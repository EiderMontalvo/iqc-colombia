<?php
/**
 * IQC Plugin - Manejo seguro de formularios
 * Archivo: inc/forms.php
 *
 * Handler AJAX para los formularios de:
 *  - Contacto        (form_type: contacto)
 *  - Homologación    (form_type: homologacion)
 *  - Libro de Reclamaciones (form_type: reclamacion)
 *
 * Seguridad implementada:
 *  - Verificación de nonce (CSRF)
 *  - Sanitización completa de inputs
 *  - Validación de email
 *  - Honeypot antibot
 *  - Rate limiting por IP (transients)
 *  - Sin queries a $wpdb → sin riesgo SQL injection
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// ─── Registrar el handler para usuarios logueados y no logueados ───
add_action( 'wp_ajax_iqc_submit_form',        'iqc_handle_form_submission' );
add_action( 'wp_ajax_nopriv_iqc_submit_form', 'iqc_handle_form_submission' );

/**
 * Handler principal de formularios IQC.
 * Proceso: Verificar nonce → Honeypot → Rate Limit → Sanitizar → Validar → Enviar.
 */
function iqc_handle_form_submission() {

    // 1. Verificar nonce (protección CSRF)
    check_ajax_referer( 'iqc_forms_nonce', 'nonce' );

    // 2. Verificar honeypot (trampa antibot — si viene relleno, es un bot)
    $honeypot = isset( $_POST['iqc_url'] ) ? sanitize_text_field( wp_unslash( $_POST['iqc_url'] ) ) : '';
    if ( ! empty( $honeypot ) ) {
        // Responder como si fuera éxito para no alertar al bot
        wp_send_json_success( array( 'message' => __( 'Formulario enviado correctamente.', 'iqc' ) ) );
    }

    // 3. Rate limiting — máximo 3 envíos por IP cada 10 minutos
    $ip          = sanitize_text_field( wp_unslash( $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0' ) );
    $transient   = 'iqc_form_rate_' . md5( $ip );
    $submit_count = (int) get_transient( $transient );

    if ( $submit_count >= 3 ) {
        wp_send_json_error( array(
            'message' => __( 'Has enviado demasiados mensajes en poco tiempo. Por favor espera unos minutos.', 'iqc' ),
        ) );
    }

    // 4. Sanitizar todos los campos
    $form_type = sanitize_key( wp_unslash( $_POST['form_type'] ?? 'contacto' ) );
    $nombre    = sanitize_text_field( wp_unslash( $_POST['nombre'] ?? '' ) );
    $empresa   = sanitize_text_field( wp_unslash( $_POST['empresa'] ?? '' ) );
    $correo    = sanitize_email( wp_unslash( $_POST['correo'] ?? '' ) );
    $telefono  = sanitize_text_field( wp_unslash( $_POST['telefono'] ?? '' ) );
    $mensaje   = sanitize_textarea_field( wp_unslash( $_POST['mensaje'] ?? '' ) );

    // Campos adicionales de Homologación
    $giro      = sanitize_text_field( wp_unslash( $_POST['giro'] ?? '' ) );
    $personal  = absint( $_POST['personal'] ?? 0 );
    $servicio  = sanitize_text_field( wp_unslash( $_POST['servicio'] ?? '' ) );
    $meses     = sanitize_text_field( wp_unslash( $_POST['meses'] ?? '' ) );

    // Campos adicionales de Libro de Reclamaciones
    $empresa_razon   = sanitize_text_field( wp_unslash( $_POST['empresa_razon'] ?? '' ) );
    $empresa_ruc     = sanitize_text_field( wp_unslash( $_POST['empresa_ruc'] ?? '' ) );
    $rep_nombres     = sanitize_text_field( wp_unslash( $_POST['rep_nombres'] ?? '' ) );
    $rep_apellido_1  = sanitize_text_field( wp_unslash( $_POST['rep_apellido_1'] ?? '' ) );
    $rep_apellido_2  = sanitize_text_field( wp_unslash( $_POST['rep_apellido_2'] ?? '' ) );
    $tipo_servicio   = sanitize_text_field( wp_unslash( $_POST['tipo_servicio'] ?? '' ) );
    $sede_auditoria  = sanitize_text_field( wp_unslash( $_POST['sede_auditoria'] ?? '' ) );
    $tipo_incidencia = sanitize_text_field( wp_unslash( $_POST['tipo_incidencia'] ?? '' ) );
    $detalle_reclamo = sanitize_textarea_field( wp_unslash( $_POST['detalle_reclamo'] ?? '' ) );
    $pedido_cliente  = sanitize_textarea_field( wp_unslash( $_POST['pedido_cliente'] ?? '' ) );

    if ( $form_type === 'reclamacion' ) {
        $nombre = trim( $rep_nombres . ' ' . $rep_apellido_1 . ' ' . $rep_apellido_2 );
    }

    // 5. Validar campos requeridos comunes
    if ( empty( $nombre ) ) {
        wp_send_json_error( array( 'message' => __( 'El nombre es obligatorio.', 'iqc' ) ) );
    }

    if ( ! is_email( $correo ) ) {
        wp_send_json_error( array( 'message' => __( 'El correo electrónico no es válido.', 'iqc' ) ) );
    }

    if ( empty( $mensaje ) && empty( $detalle_reclamo ) ) {
        wp_send_json_error( array( 'message' => __( 'El mensaje es obligatorio.', 'iqc' ) ) );
    }

    // 6. Construir el asunto y cuerpo del correo según el tipo de formulario
    $destinatario = 'comercial@iqcperu.com';
    $asunto       = '';
    $cuerpo       = '';

    switch ( $form_type ) {

        case 'homologacion':
            $asunto = sprintf( '[IQC Colombia] Solicitud de Homologación — %s', $nombre );
            $cuerpo = iqc_build_email_homologacion( $nombre, $empresa, $correo, $telefono, $giro, $personal, $servicio, $meses, $mensaje );
            break;

        case 'reclamacion':
            $asunto = sprintf( '[IQC Colombia] Libro de Reclamaciones — %s', $nombre );
            $cuerpo = iqc_build_email_reclamacion( $empresa_razon, $empresa_ruc, $rep_nombres, $rep_apellido_1, $rep_apellido_2, $correo, $telefono, $tipo_servicio, $sede_auditoria, $tipo_incidencia, $detalle_reclamo, $pedido_cliente );
            break;

        case 'cotizacion':
            $sector_cotiz   = sanitize_text_field( wp_unslash( $_POST['sector'] ?? '' ) );
            $certificacion  = sanitize_text_field( wp_unslash( $_POST['servicio'] ?? '' ) );
            $asunto = sprintf( '[IQC Colombia] Cotización ISO %s — %s', $certificacion, $nombre );
            // Podemos usar la misma estructura de homologación ya que los campos son casi idénticos
            $cuerpo = iqc_build_email_homologacion( $nombre, $empresa, $correo, $telefono, $sector_cotiz, $personal, $certificacion, $meses, $mensaje );
            break;

        case 'contacto':
        default:
            $asunto_campo = sanitize_text_field( wp_unslash( $_POST['asunto'] ?? '' ) );
            $asunto = sprintf( '[IQC Colombia] Contacto — %s', $nombre );
            $cuerpo = iqc_build_email_contacto( $nombre, $empresa, $correo, $telefono, $asunto_campo, $mensaje );
            break;
    }

    // 7. Cabeceras del correo
    $headers = array(
        'Content-Type: text/html; charset=UTF-8',
        sprintf( 'Reply-To: %s <%s>', $nombre, $correo ),
    );

    // 8. Enviar correo con wp_mail()
    $enviado = wp_mail( $destinatario, $asunto, $cuerpo, $headers );

    if ( ! $enviado ) {
        wp_send_json_error( array(
            'message' => __( 'Hubo un problema al enviar tu mensaje. Por favor inténtalo de nuevo o contáctanos directamente.', 'iqc' ),
        ) );
    }

    // 9. Actualizar rate limiting
    if ( $submit_count === 0 ) {
        set_transient( $transient, 1, 10 * MINUTE_IN_SECONDS );
    } else {
        set_transient( $transient, $submit_count + 1, 10 * MINUTE_IN_SECONDS );
    }

    // 10. Respuesta exitosa
    wp_send_json_success( array(
        'message' => __( 'Formulario enviado correctamente.', 'iqc' ),
    ) );
}

// ─── Funciones auxiliares de construcción de HTML del correo ───────────────

/**
 * Construye el HTML del correo de Contacto.
 */
function iqc_build_email_contacto( $nombre, $empresa, $correo, $telefono, $asunto, $mensaje ) {
    $empresa_html  = ! empty( $empresa )  ? '<tr><td><strong>Empresa:</strong></td><td>' . esc_html( $empresa )  . '</td></tr>' : '';
    $telefono_html = ! empty( $telefono ) ? '<tr><td><strong>Teléfono:</strong></td><td>' . esc_html( $telefono ) . '</td></tr>' : '';
    $asunto_html   = ! empty( $asunto )   ? '<tr><td><strong>Asunto:</strong></td><td>'   . esc_html( $asunto )   . '</td></tr>' : '';

    return iqc_email_wrapper( 'Formulario de Contacto', "
        <table cellpadding='6' cellspacing='0' style='width:100%;border-collapse:collapse;'>
            <tr><td><strong>Nombre:</strong></td><td>" . esc_html( $nombre ) . "</td></tr>
            {$empresa_html}
            <tr><td><strong>Correo:</strong></td><td><a href='mailto:" . esc_attr( $correo ) . "'>" . esc_html( $correo ) . "</a></td></tr>
            {$telefono_html}
            {$asunto_html}
        </table>
        <hr style='margin:20px 0;border:none;border-top:1px solid #e0e0e0;'>
        <p><strong>Mensaje:</strong></p>
        <p style='white-space:pre-wrap;background:#f9f9f9;padding:16px;border-radius:6px;'>" . esc_html( $mensaje ) . "</p>
    " );
}

/**
 * Construye el HTML del correo de Homologación.
 */
function iqc_build_email_homologacion( $nombre, $empresa, $correo, $telefono, $giro, $personal, $servicio, $meses, $mensaje ) {
    $telefono_html = ! empty( $telefono ) ? '<tr><td><strong>Teléfono:</strong></td><td>'           . esc_html( $telefono )        . '</td></tr>' : '';
    $empresa_html  = ! empty( $empresa )  ? '<tr><td><strong>Empresa:</strong></td><td>'            . esc_html( $empresa )         . '</td></tr>' : '';
    $personal_html = $personal > 0        ? '<tr><td><strong>Nº Personal:</strong></td><td>'        . esc_html( $personal )        . '</td></tr>' : '';
    $meses_html    = ! empty( $meses )    ? '<tr><td><strong>Meses implementación:</strong></td><td>' . esc_html( $meses )         . '</td></tr>' : '';
    $mensaje_html  = ! empty( $mensaje )  ? '<hr style="margin:20px 0;border:none;border-top:1px solid #e0e0e0;"><p><strong>Mensaje adicional:</strong></p><p style="white-space:pre-wrap;background:#f9f9f9;padding:16px;border-radius:6px;">' . esc_html( $mensaje ) . '</p>' : '';

    return iqc_email_wrapper( 'Solicitud de Cotización — Homologación', "
        <table cellpadding='6' cellspacing='0' style='width:100%;border-collapse:collapse;'>
            <tr><td><strong>Nombre:</strong></td><td>"  . esc_html( $nombre )   . "</td></tr>
            {$empresa_html}
            <tr><td><strong>Correo:</strong></td><td><a href='mailto:" . esc_attr( $correo ) . "'>" . esc_html( $correo ) . "</a></td></tr>
            {$telefono_html}
            <tr><td><strong>Giro / Sector:</strong></td><td>" . esc_html( $giro )    . "</td></tr>
            {$personal_html}
            <tr><td><strong>Servicio requerido:</strong></td><td>" . esc_html( $servicio ) . "</td></tr>
            {$meses_html}
        </table>
        {$mensaje_html}
    " );
}

/**
 * Construye el HTML del correo de Libro de Reclamaciones.
 */
function iqc_build_email_reclamacion( $empresa_razon, $empresa_ruc, $rep_nombres, $rep_apellido_1, $rep_apellido_2, $correo, $telefono, $tipo_servicio, $sede_auditoria, $tipo_incidencia, $detalle_reclamo, $pedido_cliente ) {
    $empresa_html  = ! empty( $empresa_razon ) ? '<tr><td><strong>Empresa (Razón Social):</strong></td><td>' . esc_html( $empresa_razon ) . '</td></tr>' : '';
    $ruc_html      = ! empty( $empresa_ruc )   ? '<tr><td><strong>RUC/NIT:</strong></td><td>' . esc_html( $empresa_ruc ) . '</td></tr>' : '';
    $telefono_html = ! empty( $telefono )      ? '<tr><td><strong>Teléfono:</strong></td><td>' . esc_html( $telefono ) . '</td></tr>' : '';
    $sede_html     = ! empty( $sede_auditoria )? '<tr><td><strong>Sede de Auditoría:</strong></td><td>' . esc_html( $sede_auditoria ) . '</td></tr>' : '';
    $pedido_html   = ! empty( $pedido_cliente )? '<hr style="margin:20px 0;border:none;border-top:1px solid #e0e0e0;"><p><strong>Pedido del cliente:</strong></p><p style="white-space:pre-wrap;background:#f9f9f9;padding:16px;border-radius:6px;">' . esc_html( $pedido_cliente ) . '</p>' : '';
    $nombre_completo = trim( $rep_nombres . ' ' . $rep_apellido_1 . ' ' . $rep_apellido_2 );

    return iqc_email_wrapper( 'Libro de Reclamaciones', "
        <table cellpadding='6' cellspacing='0' style='width:100%;border-collapse:collapse;'>
            <tr><th colspan='2' style='text-align:left;background:#f4f6f9;padding:10px;'>Datos del Representante</th></tr>
            <tr><td><strong>Nombre Completo:</strong></td><td>" . esc_html( $nombre_completo ) . "</td></tr>
            <tr><td><strong>Correo:</strong></td><td><a href='mailto:" . esc_attr( $correo ) . "'>" . esc_html( $correo ) . "</a></td></tr>
            {$telefono_html}
            
            <tr><th colspan='2' style='text-align:left;background:#f4f6f9;padding:10px;'>Datos de la Empresa</th></tr>
            {$empresa_html}
            {$ruc_html}
            
            <tr><th colspan='2' style='text-align:left;background:#f4f6f9;padding:10px;'>Detalle del Reclamo / Queja</th></tr>
            <tr><td><strong>Tipo de Incidencia:</strong></td><td>" . esc_html( $tipo_incidencia ) . "</td></tr>
            <tr><td><strong>Tipo de Servicio:</strong></td><td>" . esc_html( $tipo_servicio ) . "</td></tr>
            {$sede_html}
        </table>
        <hr style='margin:20px 0;border:none;border-top:1px solid #e0e0e0;'>
        <p><strong>Descripción Detallada:</strong></p>
        <p style='white-space:pre-wrap;background:#f9f9f9;padding:16px;border-radius:6px;'>" . esc_html( $detalle_reclamo ) . "</p>
        {$pedido_html}
    " );
}

/**
 * Envuelve el contenido del correo en una plantilla HTML corporativa.
 *
 * @param string $titulo  Título de la sección del correo.
 * @param string $cuerpo  HTML del contenido principal.
 * @return string         HTML completo del correo.
 */
function iqc_email_wrapper( $titulo, $cuerpo ) {
    return '<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1"></head>
<body style="margin:0;padding:0;background:#f4f6f9;font-family:Arial,Helvetica,sans-serif;">
  <table width="100%" cellpadding="0" cellspacing="0" style="background:#f4f6f9;padding:30px 0;">
    <tr>
      <td align="center">
        <table width="600" cellpadding="0" cellspacing="0" style="background:#ffffff;border-radius:10px;overflow:hidden;box-shadow:0 2px 12px rgba(0,0,0,0.08);max-width:600px;">

          <!-- Header -->
          <tr>
            <td style="background:#0019D2;padding:28px 32px;">
              <p style="margin:0;color:#ffffff;font-size:20px;font-weight:700;">IQC Colombia</p>
              <p style="margin:6px 0 0;color:rgba(255,255,255,0.75);font-size:13px;">' . esc_html( $titulo ) . '</p>
            </td>
          </tr>

          <!-- Body -->
          <tr>
            <td style="padding:32px;">
              ' . $cuerpo . '
            </td>
          </tr>

          <!-- Footer -->
          <tr>
            <td style="background:#f4f6f9;padding:16px 32px;border-top:1px solid #e0e0e0;">
              <p style="margin:0;font-size:11px;color:#999;">
                Este correo fue generado automáticamente desde el sitio web de IQC Colombia.<br>
                No respondas directamente a este correo — usa Reply-To para responder al remitente.
              </p>
            </td>
          </tr>

        </table>
      </td>
    </tr>
  </table>
</body>
</html>';
}
