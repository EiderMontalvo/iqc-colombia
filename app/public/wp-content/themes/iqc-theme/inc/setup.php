<?php
/*theme setup. * * @package IQC_Theme * @since 1.0.0*/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/*configure theme supported features. * * @since 1.0.0*/
function iqc_theme_setup() {
    /*add Por defecto posts and comments RSS feed Enlaces to head.*/

    add_theme_support( 'automatic-feed-links' );

    /*let WordPress manage the document Titulo.*/

    add_theme_support( 'title-tag' );

    /*enable support for Post Thumbnails on posts and pages.*/

    add_theme_support( 'post-thumbnails' );

    /*switch Por defecto core markup for Buscar Formulario, comment Formulario, and comments to output valid HTML5.*/

    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    /*add support for core custom Logotipo.*/

    add_theme_support(
        'custom-logo',
        array(
            'height'               => 250,
            'width'                => 250,
            'flex-width'           => true,
            'flex-height'          => true,
            'header-text'          => array( 'site-title', 'site-description' ),
            'unlink-homepage-logo' => true,
        )
    );
    
    /*add custom Imagen Tamanos*/

    add_image_size( 'iqc-hero', 1920, 800, true );
    add_image_size( 'iqc-card', 600, 400, true );

    /*register Navegacion Menus*/

    register_nav_menus(
        array(
            'primary' => esc_html__( 'Menú Principal', 'iqc' ),
            'footer'  => esc_html__( 'Menú Footer', 'iqc' ),
        )
    );
}
add_action( 'after_setup_theme', 'iqc_theme_setup' );
