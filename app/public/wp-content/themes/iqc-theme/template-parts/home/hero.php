<?php
/*template part for Mostraring the Hero Seccion * * @package IQC_Theme*/
?>

<section class="iqc-hero iqc-imagen-background" aria-labelledby="hero-title">
    <div class="iqc-hero__overlay" aria-hidden="true"></div>
    <div class="iqc-container iqc-hero__inner">
        <div class="iqc-hero__content">
            <h1 id="hero-title" class="iqc-hero__title">
                <?php esc_html_e( 'Certificación de Excelencia para tu Empresa', 'iqc' ); ?>
            </h1>
            <p class="iqc-hero__subtitle">
                <?php esc_html_e( 'Impulsamos la calidad, seguridad y sostenibilidad de las organizaciones en Colombia con estándares internacionales.', 'iqc' ); ?>
            </p>
            <div class="iqc-hero__actions">
                <a href="<?php echo esc_url( home_url( '/contacto/' ) ); ?>" class="iqc-btn iqc-btn--primary">
                    <?php esc_html_e( 'Solicitar Presupuesto', 'iqc' ); ?>
                </a>
            </div>
        </div>
    </div>
</section>
