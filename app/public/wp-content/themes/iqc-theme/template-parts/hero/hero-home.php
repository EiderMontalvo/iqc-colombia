<?php
/*hero Inicio Template Part * * @package IQC_Theme * @since 1.0.0*/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>
<section class="iqc-hero-home">
    <div class="iqc-container">
        <div class="iqc-hero-content">
            <?php /*este contenido idealmente viene del Customizer o page meta*/ ?>
            <h1 class="iqc-h1"><?php esc_html_e( 'IQC Colombia Empresa Certificadora', 'iqc' ); ?></h1>
            <p class="iqc-hero-description"><?php esc_html_e( 'Certificaciones de calidad con reconocimiento internacional.', 'iqc' ); ?></p>
            <div class="iqc-hero-actions">
                <a href="#certificaciones" class="iqc-btn iqc-btn--primary"><?php esc_html_e( 'Ver Certificaciones', 'iqc' ); ?></a>
            </div>
        </div>
    </div>
</section>
