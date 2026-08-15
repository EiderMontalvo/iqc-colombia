<?php
/**
 * Plugin Name: IQC Plugin Core
 * Description: Funcionalidades esenciales del proyecto IQC (CPTs, taxonomías, opciones generales).
 * Version: 1.0.0
 * Author: IQC Development Team
 * Text Domain: iqc
 *
 * @package IQC_Plugin
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'IQC_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'IQC_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

// Cargar Custom Post Types y Taxonomías
require_once IQC_PLUGIN_DIR . 'inc/cpt-certificacion.php';

// Cargar página de opciones del sistema
require_once IQC_PLUGIN_DIR . 'inc/options.php';

// Cargar handler seguro de formularios
require_once IQC_PLUGIN_DIR . 'inc/forms.php';
