<?php
/*theme helpers. * * @package IQC_Theme * @since 1.0.0*/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/*debug helper. Solo funciona en local. * * @param mixed $data Data to debug. * @since 1.0.0*/
function iqc_debug( $data ) {
    if ( defined( 'WP_DEBUG' ) && WP_DEBUG ) {
        error_log( 'IQC DEBUG: ' . print_r( $data, true ) );
    }
}
