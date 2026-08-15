<?php
/**
 * Opciones Generales del Sistema
 *
 * @package IQC_Plugin
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register Settings Page
 */
function iqc_register_settings_page() {
    add_options_page(
        __( 'Configuración IQC', 'iqc' ),
        __( 'Configuración IQC', 'iqc' ),
        'manage_options',
        'iqc-settings',
        'iqc_settings_page_html'
    );
}
add_action( 'admin_menu', 'iqc_register_settings_page' );

/**
 * Settings Page HTML
 */
function iqc_settings_page_html() {
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }
    
    // Mostramos un mensaje si se ha guardado
    if ( isset( $_GET['settings-updated'] ) ) {
        add_settings_error( 'iqc_messages', 'iqc_message', __( 'Configuración guardada', 'iqc' ), 'updated' );
    }
    
    settings_errors( 'iqc_messages' );
    ?>
    <div class="wrap">
        <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
        <form action="options.php" method="post">
            <?php
            settings_fields( 'iqc_options_group' );
            do_settings_sections( 'iqc-settings' );
            submit_button( 'Guardar Configuración' );
            ?>
        </form>
    </div>
    <?php
}

/**
 * Register Settings
 */
function iqc_register_settings() {
    register_setting( 'iqc_options_group', 'iqc_phone', 'sanitize_text_field' );
    register_setting( 'iqc_options_group', 'iqc_email', 'sanitize_email' );
    register_setting( 'iqc_options_group', 'iqc_address', 'sanitize_text_field' );
    register_setting( 'iqc_options_group', 'iqc_validation_url', 'esc_url_raw' );

    add_settings_section(
        'iqc_general_section',
        __( 'Datos de Contacto y Configuración', 'iqc' ),
        'iqc_general_section_callback',
        'iqc-settings'
    );

    add_settings_field( 'iqc_phone', __( 'Teléfono Principal', 'iqc' ), 'iqc_render_field_phone', 'iqc-settings', 'iqc_general_section' );
    add_settings_field( 'iqc_email', __( 'Correo Electrónico', 'iqc' ), 'iqc_render_field_email', 'iqc-settings', 'iqc_general_section' );
    add_settings_field( 'iqc_address', __( 'Dirección', 'iqc' ), 'iqc_render_field_address', 'iqc-settings', 'iqc_general_section' );
    add_settings_field( 'iqc_validation_url', __( 'URL del Sistema de Validación (ej. consultas.iqcperu.com)', 'iqc' ), 'iqc_render_field_validation_url', 'iqc-settings', 'iqc_general_section' );
}
add_action( 'admin_init', 'iqc_register_settings' );

/**
 * Callbacks para renderizar campos
 */
function iqc_general_section_callback() {
    echo '<p>' . esc_html__( 'Configura los datos globales de IQC. Estos datos se usarán en toda la web.', 'iqc' ) . '</p>';
}



function iqc_render_field_phone() {
    $val = get_option( 'iqc_phone', '' );
    echo '<input type="text" name="iqc_phone" value="' . esc_attr( $val ) . '" class="regular-text">';
}

function iqc_render_field_email() {
    $val = get_option( 'iqc_email', '' );
    echo '<input type="email" name="iqc_email" value="' . esc_attr( $val ) . '" class="regular-text">';
}

function iqc_render_field_address() {
    $val = get_option( 'iqc_address', '' );
    echo '<input type="text" name="iqc_address" value="' . esc_attr( $val ) . '" class="regular-text">';
}

function iqc_render_field_validation_url() {
    $val = get_option( 'iqc_validation_url', 'https://consultas.iqcperu.com/' );
    echo '<input type="url" name="iqc_validation_url" value="' . esc_url( $val ) . '" class="regular-text">';
    echo '<p class="description">' . esc_html__( 'Enlace externo para validar certificados.', 'iqc' ) . '</p>';
}

/**
 * Función helper para recuperar opciones en el tema
 */
function iqc_get_config( string $key, $default = '' ) {
    return get_option( 'iqc_' . $key, $default );
}
