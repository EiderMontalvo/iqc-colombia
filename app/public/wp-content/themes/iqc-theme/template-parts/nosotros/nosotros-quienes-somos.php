<?php
/*template part: Quiénes Somos bloque de Textoo + Imagenn lateral * * @package IQC_Theme*/
?>
<section id="quienes-somos" class="iqc-nosotros-quienes" aria-labelledby="quienes-somos-title">
    <div class="iqc-container">
        <div class="iqc-nosotros-quienes__grid">

            <?php /*columnaaa de Textooo*/ ?>
            <div class="iqc-nosotros-quienes__text iqc-animate-fade-right">
                <p class="iqc-nosotros-quienes__label">
                    <?php esc_html_e( 'SOMOS IQC COLOMBIA, ORGANISMO DE CERTIFICACIÓN DE SISTEMAS DE GESTIÓN', 'iqc' ); ?>
                </p>
                <p class="iqc-nosotros-quienes__body">
                    <?php esc_html_e( 'Somos un organismo de certificación con gran experiencia en auditorías de Sistemas de Gestión. Estamos compuestos por un grupo de profesionales con vasta experiencia y el compromiso de realizar un servicio de calidad integrado, independiente e imparcial.', 'iqc' ); ?>
                </p>
                <p class="iqc-nosotros-quienes__body">
                    <?php esc_html_e( 'Nos damos respuesta en los plazos y bajo los tiempos adecuados sin comprometer nuestra integridad e independencia en los servicios de calidad.', 'iqc' ); ?>
                </p>
                <p class="iqc-nosotros-quienes__body">
                    <?php esc_html_e( 'Ponemos nuestra energía en el grupo de profesionales especializados con reconocida trayectoria en aseguramiento de calidad.', 'iqc' ); ?>
                </p>
            </div>

            <?php /*columnaaa de Imagennn*/ ?>
            <div class="iqc-nosotros-quienes__image iqc-animate-fade-left">
                <img
                    src="<?php echo esc_url( get_theme_file_uri( 'assets/img/nosotros/iqc-persona-quienes-somos.webp' ) ); ?>"
                    alt="<?php esc_attr_e( 'Profesional IQC Colombia', 'iqc' ); ?>"
                    width="480"
                    height="600"
                    loading="lazy"
                    class="iqc-nosotros-quienes__img"
                >
            </div>

        </div>
    </div>
</section>
