<?php
/*template part: Nuestros Logros * * @package IQC_Theme*/
?>
<section id="logros" class="iqc-nosotros-logros" aria-labelledby="logros-title">
    <div class="iqc-container">

        <div class="iqc-nosotros-logros__grid">

            <?php /*columnaaa de Textooo*/ ?>
            <div class="iqc-nosotros-logros__text iqc-animate-fade-right">
                <h2 id="logros-title" class="iqc-nosotros-logros__title">
                    <?php esc_html_e( 'Nuestros Logros', 'iqc' ); ?>
                </h2>
                <p class="iqc-nosotros-logros__body">
                    <?php esc_html_e( 'El programa IAS, acreditado por el Ministerio de Justicia mediante resolución ejecutiva, tiene la misión de fomentar el proceso de acreditación a nivel nacional e internacional. Proporciona reconocimiento y acreditación a laboratorios, organismos de inspección y certificación con criterios técnicos internacionales y contribuye a garantizar la conformidad de los bienes producidos.', 'iqc' ); ?>
                </p>
                <a href="<?php echo esc_url( home_url( '/contacto/' ) ); ?>" class="iqc-btn iqc-btn--primary" style="margin-top: var(--space-6); display: inline-flex;">
                    <?php esc_html_e( 'Conócenos', 'iqc' ); ?>
                </a>
            </div>

            <?php /*columnaaa de Imagennn*/ ?>
            <div class="iqc-nosotros-logros__image iqc-animate-fade-left">
                <img
                    src="<?php echo esc_url( get_theme_file_uri( 'assets/img/nosotros/iqc-nuestros-logros.webp' ) ); ?>"
                    alt="<?php esc_attr_e( 'Equipo IQC Colombia celebrando logros', 'iqc' ); ?>"
                    width="560"
                    height="380"
                    loading="lazy"
                    class="iqc-nosotros-logros__img"
                >
            </div>

        </div>

    </div>
</section>

