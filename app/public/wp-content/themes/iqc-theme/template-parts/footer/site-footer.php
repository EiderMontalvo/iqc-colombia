<?php
/*site Pie de pagina Template Part * * @package IQC_Theme * @since 1.0.0*/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$phone      = function_exists( 'iqc_get_config' ) ? iqc_get_config( 'phone', '+51 980 923 270' )   : '+51 980 923 270';
$email      = function_exists( 'iqc_get_config' ) ? iqc_get_config( 'email', 'comercial@iqcperu.com' )  : 'comercial@iqcperu.com';
$address    = function_exists( 'iqc_get_config' ) ? iqc_get_config( 'address', 'Bogotá, Colombia' )    : 'Bogotá, Colombia';
$schedule   = function_exists( 'iqc_get_config' ) ? iqc_get_config( 'schedule', 'Lun – Vie: 8:00 AM – 6:00 PM' ) : 'Lun – Vie: 8:00 AM – 6:00 PM';

$social_links = array(
    array(
        'label' => 'LinkedIn',
        'url'   => '#',
        'icon'  => '<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>',
    ),
    array(
        'label' => 'Facebook',
        'url'   => '#',
        'icon'  => '<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>',
    ),
    array(
        'label' => 'Instagram',
        'url'   => '#',
        'icon'  => '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>',
    ),
    array(
        'label' => 'YouTube',
        'url'   => '#',
        'icon'  => '<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46A2.78 2.78 0 0 0 1.46 6.42 29 29 0 0 0 1 12a29 29 0 0 0 .46 5.58A2.78 2.78 0 0 0 3.41 19.6C5.12 20 12 20 12 20s6.88 0 8.59-.46a2.78 2.78 0 0 0 1.95-1.95A29 29 0 0 0 23 12a29 29 0 0 0-.46-5.58z"/><polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02" fill="#000"/></svg>',
    ),
);
?>

<footer id="colophon" class="iqc-site-footer" role="contentinfo">

    <?php /*main Pie de pagina Cuadricula*/ ?>
    <div class="iqc-footer__main">
        <div class="iqc-container">
            <div class="iqc-footer__grid">

                <?php /*columnaa 1: Brand + Descripcion + Redes Redes socialeses*/ ?>
                <div class="iqc-footer__col iqc-footer__col--brand">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="iqc-footer__logo-link">
                        <img
                            src="<?php echo esc_url( get_theme_file_uri( 'assets/img/global/iqc-colombia-logo.webp' ) ); ?>"
                            alt="<?php esc_attr_e( 'Logo IQC Colombia', 'iqc' ); ?>"
                            class="iqc-footer__logo"
                            loading="lazy"
                        >
                    </a>
                    <p class="iqc-footer__description">
                        <?php esc_html_e( 'Empresa certificadora acreditada a nivel internacional. Impulsamos la calidad, seguridad y sostenibilidad de las organizaciones en Colombia.', 'iqc' ); ?>
                    </p>
                    <?php /*redes Redes socialeses Enlaces: Visible en Escritorio, oculto en móvil (se muestran en col Legal)*/ ?>
                    <div class="iqc-footer__social iqc-footer__social--desktop" aria-label="<?php esc_attr_e( 'Redes sociales de IQC', 'iqc' ); ?>">
                        <?php foreach ( $social_links as $social ) : ?>
                            <a
                                href="<?php echo esc_url( $social['url'] ); ?>"
                                class="iqc-footer__social-link"
                                target="_blank"
                                rel="noopener noreferrer"
                                aria-label="<?php echo esc_attr( $social['label'] ); ?>"
                            >
                                <?php echo $social['icon']; /*phpcs:ignore WordPress.Security.EscapeOutput ?>*/

                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>

                <?php /*nav Columnaas: Empresa + Legal en una fila en móvil*/ ?>
                <div class="iqc-footer__nav-row">

                <?php /*columnaa 2: Empresa*/ ?>
                <div class="iqc-footer__col iqc-footer__col--empresa">
                    <h3 class="iqc-footer__col-title"><?php esc_html_e( 'Empresa', 'iqc' ); ?></h3>
                    <ul class="iqc-footer__links">
                        <li><a href="<?php echo esc_url( home_url( '/nosotros/' ) ); ?>" class="iqc-footer__link"><?php esc_html_e( 'Quiénes Somos', 'iqc' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/proceso-de-certificacion/' ) ); ?>" class="iqc-footer__link"><?php esc_html_e( 'Proceso de Certificación', 'iqc' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/actualizaciones/' ) ); ?>" class="iqc-footer__link"><?php esc_html_e( 'Actualizaciones Normativas', 'iqc' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/contacto/' ) ); ?>" class="iqc-footer__link"><?php esc_html_e( 'Contacto', 'iqc' ); ?></a></li>
                    </ul>

                    <?php /*redes Redes Redes socialeseses: solo Visibles en móvil, debajo de Enlaces de Empresa*/ ?>
                    <div class="iqc-footer__social iqc-footer__social--mobile" aria-label="<?php esc_attr_e( 'Redes sociales de IQC', 'iqc' ); ?>" style="margin-top: var(--space-4);">
                        <?php foreach ( $social_links as $social ) : ?>
                            <a
                                href="<?php echo esc_url( $social['url'] ); ?>"
                                class="iqc-footer__social-link"
                                target="_blank"
                                rel="noopener noreferrer"
                                aria-label="<?php echo esc_attr( $social['label'] ); ?>"
                            >
                                <?php echo $social['icon']; /*phpcs:ignore WordPress.Security.EscapeOutput ?>*/

                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>

                <?php /*columnaa 3: Legal*/ ?>
                <div class="iqc-footer__col iqc-footer__col--legal">
                    <h3 class="iqc-footer__col-title"><?php esc_html_e( 'Legal', 'iqc' ); ?></h3>
                    <ul class="iqc-footer__links" style="margin-bottom: var(--space-6);">
                        <li><a href="<?php echo esc_url( home_url( '/politica-de-privacidad/' ) ); ?>" class="iqc-footer__link"><?php esc_html_e( 'Política de Privacidad', 'iqc' ); ?></a></li>
                        <li>
                            <a href="<?php echo esc_url( home_url( '/apelaciones/' ) ); ?>" class="iqc-footer__link iqc-footer__link--underline"><?php esc_html_e( 'Apelaciones', 'iqc' ); ?></a> 
                            <?php esc_html_e( 'y', 'iqc' ); ?> 
                            <a href="<?php echo esc_url( home_url( '/quejas/' ) ); ?>" class="iqc-footer__link iqc-footer__link--underline"><?php esc_html_e( 'Quejas', 'iqc' ); ?></a>
                        </li>
                    </ul>
                    
                    <?php /*libro de Reclamaciones*/ ?>
                    <div class="iqc-footer__reclamaciones" style="margin-top: var(--space-4);">
                        <a href="<?php echo esc_url( home_url( '/libro-de-reclamaciones/' ) ); ?>" aria-label="<?php esc_attr_e( 'Libro de Reclamaciones', 'iqc' ); ?>">
                            <img 
                                src="<?php echo esc_url( get_theme_file_uri( 'assets/img/global/iqc-libro-reclamaciones.webp' ) ); ?>" 
                                alt="<?php esc_attr_e( 'Libro de Reclamaciones', 'iqc' ); ?>"
                                class="iqc-libro-reclamaciones-img"
                                loading="lazy"
                            >
                        </a>
                    </div>
                </div>

                </div><?php /*.iqc-Pie de pagina nav-Fila*/ ?>

                <?php /*botón Validar Certificado: solo en móvil, ancho completo debajo del nav-Fila*/ ?>
                <?php
                $validation_url_nav = function_exists( 'iqc_get_config' ) ? iqc_get_config( 'validation_url', 'https://consultas.iqcperu.com/' ) : 'https://consultas.iqcperu.com/';
                ?>
                <div class="iqc-footer__validate-row">
                    <a href="<?php echo esc_url( $validation_url_nav ); ?>" class="iqc-btn iqc-btn--primary iqc-footer__validate-btn iqc-footer__validate-btn--nav" target="_blank" rel="noopener noreferrer">
                        <?php esc_html_e( 'Validar Certificado', 'iqc' ); ?>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true" style="margin-left:8px"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                </div>

                <?php /*columnaa 4: Contactoo Informacionrmularioacion*/ ?>
                <div class="iqc-footer__col iqc-footer__col--contact">
                    <h3 class="iqc-footer__col-title"><?php esc_html_e( 'Contacto', 'iqc' ); ?></h3>
                    <ul class="iqc-footer__contact">
                        <li class="iqc-footer__contact-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 2.18h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 9.91a16 16 0 0 0 6.18 6.18l1.08-.9a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                            <a href="tel:<?php echo esc_attr( preg_replace( '/[^+\d]/', '', $phone ) ); ?>" class="iqc-footer__link"><?php echo esc_html( $phone ); ?></a>
                        </li>
                        <li class="iqc-footer__contact-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                            <a href="mailto:<?php echo esc_attr( $email ); ?>" class="iqc-footer__link"><?php echo esc_html( $email ); ?></a>
                        </li>
                        <li class="iqc-footer__contact-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            <span><?php echo esc_html( $address ); ?></span>
                        </li>
                        <li class="iqc-footer__contact-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            <span><?php echo esc_html( $schedule ); ?></span>
                        </li>
                    </ul>

                    <?php /*cTA Validar*/ ?>
                    <?php
                    $validation_url = function_exists( 'iqc_get_config' ) ? iqc_get_config( 'validation_url', 'https://consultas.iqcperu.com/' ) : 'https://consultas.iqcperu.com/';
                    ?>
                    <a href="<?php echo esc_url( $validation_url ); ?>" class="iqc-btn iqc-btn--primary iqc-footer__validate-btn" target="_blank" rel="noopener noreferrer">
                        <?php esc_html_e( 'Validar Certificado', 'iqc' ); ?>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true" style="margin-left:8px"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                </div>

            </div> <?php /*.iqc-Pie de pagina Cuadricula*/ ?>
            
            <?php /*inferior Fila inside main Pie de pagina*/ ?>
            <div class="iqc-footer__bottom-row">
                <p class="iqc-footer__copy">
                    &copy; <?php echo esc_html( gmdate( 'Y' ) ); ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="iqc-footer__link"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>.
                    <?php esc_html_e( 'Todos los derechos reservados.', 'iqc' ); ?>
                </p>
                <p class="iqc-footer__accreditations-note">
                    <?php esc_html_e( 'Acreditado por INACAL · JAS-ANZ · IAS', 'iqc' ); ?>
                </p>
            </div>
        </div> <?php /*.iqc-Contenedor*/ ?>
    </div> <?php /*.iqc-Pie de pagina main*/ ?>

</footer><?php /*#colophon*/ ?>
