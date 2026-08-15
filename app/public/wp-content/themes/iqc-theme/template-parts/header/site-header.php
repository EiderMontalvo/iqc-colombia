<?php
/*site Cabecera Template Part * * @package IQC_Theme * @since 1.0.0*/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$validation_url = function_exists('iqc_get_config') ? iqc_get_config( 'validation_url', 'https://consultas.iqcperu.com/' ) : 'https://consultas.iqcperu.com/';
?>
<header id="masthead" class="iqc-site-header" role="banner">
    <div class="iqc-container iqc-site-header__inner">

        <?php /*logotipotipo / Branding*/ ?>
        <div class="iqc-site-branding">
            <?php
            if ( has_custom_logo() ) {
                the_custom_logo();
            } else {
                echo '<a href="' . esc_url( home_url( '/' ) ) . '" rel="home" class="iqc-logo-link">';
                echo '<img src="' . esc_url( get_theme_file_uri( 'assets/img/global/iqc-colombia-logo.webp' ) ) . '" alt="' . esc_attr( get_bloginfo( 'name' ) ) . ' Logo" class="iqc-logo-img">';
                echo '</a>';
            }
            ?>
        </div><?php /*.iqc-site-branding*/ ?>

        <?php /*nav + Hamburger*/ ?>
        <div class="iqc-header__actions">

            <?php /*menú Principal (Escritorio Visible / Movil off-canvas)*/ ?>
            <nav id="site-navigation" class="iqc-main-navigation iqc-nav-mobile" aria-label="<?php esc_attr_e( 'Navegación principal', 'iqc' ); ?>">

                <?php /*cabecera del panel móvil (título + X)*/ ?>
                <div class="iqc-nav-mobile__header">
                    <span class="iqc-nav-mobile__title">Menú</span>
                    <button class="iqc-nav__close" aria-label="<?php esc_attr_e( 'Cerrar menú', 'iqc' ); ?>">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>

                <?php /*enlaces del menú*/ ?>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'primary-menu',
                        'menu_class'     => 'iqc-nav-menu',
                        'container'      => false,
                        'fallback_cb'    => 'iqc_primary_menu_fallback',
                    )
                );
                ?>

                <?php /*botón Validar Certificado sólo Visible dentro del menú móvil*/ ?>
                <div class="iqc-nav-mobile__validate">
                    <a href="<?php echo esc_url( $validation_url ); ?>" class="iqc-btn iqc-btn--primary iqc-nav__validate-btn" target="_blank" rel="noopener noreferrer">
                        <?php esc_html_e( 'Validar Certificado', 'iqc' ); ?>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="margin-left:8px">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                </div>

            </nav><?php /*#site-Navegacion*/ ?>

            <?php /*botón Validar Certificado sólo Visible en Escritorio*/ ?>
            <a href="<?php echo esc_url( $validation_url ); ?>" class="iqc-btn iqc-btn--white iqc-header__btn" target="_blank" rel="noopener noreferrer">
                <?php esc_html_e( 'Validar Certificado', 'iqc' ); ?>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="margin-left:8px">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
            </a>

            <?php /*toggle Menú Móvil (hamburguesa)*/ ?>
            <button class="iqc-nav__toggle" aria-controls="site-navigation" aria-expanded="false" aria-label="<?php esc_attr_e( 'Abrir menú', 'iqc' ); ?>">
                <span class="iqc-nav__toggle-icon" aria-hidden="true">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                </span>
            </button>

        </div><?php /*.iqc-Cabecera actions*/ ?>
    </div><?php /*.iqc-site-Cabecera Interior*/ ?>
</header><?php /*#masthead*/ ?>
