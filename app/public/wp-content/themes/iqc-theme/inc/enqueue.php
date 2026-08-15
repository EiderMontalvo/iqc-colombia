<?php
/*enqueue scripts and styles. * * @package IQC_Theme * @since 1.0.0*/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/*enqueue theme assets. * * @since 1.0.0*/
function iqc_enqueue_assets() {
    /*cSS modular: main.css actua como orquestador de @imports. * Usamos filemtime del archivo mas reciente modificado para cache busting. * En produccion, cambiar a una version estatica o usar un build Paso.*/
    $css_files = array(
        IQC_THEME_DIR . '/assets/css/main.css',
        IQC_THEME_DIR . '/assets/css/base/variables.css',
        IQC_THEME_DIR . '/assets/css/base/reset.css',
        IQC_THEME_DIR . '/assets/css/base/utilities.css',
        IQC_THEME_DIR . '/assets/css/components/animations.css',
        IQC_THEME_DIR . '/assets/css/components/hero.css',
        IQC_THEME_DIR . '/assets/css/components/header.css',
        IQC_THEME_DIR . '/assets/css/components/footer.css',
        IQC_THEME_DIR . '/assets/css/components/forms.css',
        IQC_THEME_DIR . '/assets/css/pages/home.css',
        IQC_THEME_DIR . '/assets/css/pages/home-testimonials.css',
        IQC_THEME_DIR . '/assets/css/pages/nosotros.css',
        IQC_THEME_DIR . '/assets/css/pages/contacto.css',
        IQC_THEME_DIR . '/assets/css/pages/proceso.css',
        IQC_THEME_DIR . '/assets/css/pages/homologacion.css',
        IQC_THEME_DIR . '/assets/css/components/timeline.css',
        IQC_THEME_DIR . '/assets/css/pages/apelaciones.css',
        IQC_THEME_DIR . '/assets/css/pages/quejas.css',
        IQC_THEME_DIR . '/assets/css/components/process-flow.css',
        IQC_THEME_DIR . '/assets/css/pages/actualizaciones.css',
        IQC_THEME_DIR . '/assets/css/pages/reclamaciones.css',
        IQC_THEME_DIR . '/assets/css/pages/single-certificacion.css',
    );

    $latest_mtime = 0;
    foreach ( $css_files as $file ) {
        if ( file_exists( $file ) ) {
            $mtime = filemtime( $file );
            if ( $mtime > $latest_mtime ) {
                $latest_mtime = $mtime;
            }
        }
    }
    $css_ver = $latest_mtime > 0 ? $latest_mtime : IQC_THEME_VERSION;
    $js_ver  = file_exists( IQC_THEME_DIR . '/assets/js/main.js' ) ? filemtime( IQC_THEME_DIR . '/assets/js/main.js' ) : IQC_THEME_VERSION;

    /*cSS principal (orquestador con @imports)*/

    wp_enqueue_style(
        'iqc-main',
        IQC_THEME_URI . '/assets/css/main.css',
        array(),
        $css_ver,
        'all'
    );

    /*jS principal en el Pie de pagina*/

    wp_enqueue_script(
        'iqc-main',
        IQC_THEME_URI . '/assets/js/main.js',
        array(),
        $js_ver,
        array( 'in_footer' => true, 'strategy' => 'defer' )
    );

    /*jS de Formularioularios (validaciones y utilidades generales de Formularioularios)*/

    $forms_js_ver = file_exists( IQC_THEME_DIR . '/assets/js/forms.js' ) ? filemtime( IQC_THEME_DIR . '/assets/js/forms.js' ) : IQC_THEME_VERSION;
    wp_enqueue_script(
        'iqc-forms',
        IQC_THEME_URI . '/assets/js/forms.js',
        array(),
        $forms_js_ver,
        array( 'in_footer' => true, 'strategy' => 'defer' )
    );

    /*pasar la URL de AJAX y el nonce al JS de Formularioularios*/

    wp_localize_script(
        'iqc-forms',
        'iqcForms',
        array(
            'ajaxUrl' => admin_url( 'admin-ajax.php' ),
            'nonce'   => wp_create_nonce( 'iqc_forms_nonce' ),
        )
    );

    /*jS de Actualizaciones (solo para esta plantilla)*/

    if ( is_page_template( 'templates/page-actualizaciones.php' ) ) {
        $act_js_ver = file_exists( IQC_THEME_DIR . '/assets/js/actualizaciones.js' ) ? filemtime( IQC_THEME_DIR . '/assets/js/actualizaciones.js' ) : IQC_THEME_VERSION;
        wp_enqueue_script(
            'iqc-actualizaciones',
            IQC_THEME_URI . '/assets/js/actualizaciones.js',
            array(),
            $act_js_ver,
            array( 'in_footer' => true, 'strategy' => 'defer' )
        );
    }
}
add_action( 'wp_enqueue_scripts', 'iqc_enqueue_assets' );

/*preconnect a Google Fonts si se usaran externamente. * (Actualmente se usa inter en el theme.json, pero por si acaso). * * @since 1.0.0*/
function iqc_preconnect_fonts() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
}
add_action( 'wp_head', 'iqc_preconnect_fonts', 1 );
