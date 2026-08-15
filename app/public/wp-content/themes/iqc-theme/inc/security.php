<?php
/*theme security hardening. * * @package IQC_Theme * @since 1.0.0*/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/*clean up wp_head() from unnecessary meta tags. * * @since 1.0.0*/
function iqc_cleanup_head() {
    remove_action( 'wp_head', 'wp_generator' );
    remove_action( 'wp_head', 'wlwmanifest_link' );
    remove_action( 'wp_head', 'rsd_link' );
    remove_action( 'wp_head', 'wp_shortlink_wp_head' );
    
    /*disable XML-RPC if not needed*/

    add_filter( 'xmlrpc_enabled', '__return_false' );
}
add_action( 'after_setup_theme', 'iqc_cleanup_head' );
