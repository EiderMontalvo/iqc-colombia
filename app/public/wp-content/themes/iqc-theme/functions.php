<?php
/*iQC Theme Functions * Solo carga archivos de /inc/. Nunca lógica directa aquí. * * @package IQC_Theme * @since 1.0.0*/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'IQC_THEME_VERSION', '1.0.0' );
define( 'IQC_THEME_DIR', get_template_directory() );
define( 'IQC_THEME_URI', get_template_directory_uri() );

require_once IQC_THEME_DIR . '/inc/setup.php';
require_once IQC_THEME_DIR . '/inc/enqueue.php';
require_once IQC_THEME_DIR . '/inc/security.php';
require_once IQC_THEME_DIR . '/inc/helpers.php';
require_once IQC_THEME_DIR . '/inc/menus.php';

