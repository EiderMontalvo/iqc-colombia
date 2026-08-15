<?php
/*template part: Acreditadoras IAS, JAS-ANZ, INACAL * * @package IQC_Theme*/

$acreditadoras = array(
    array(
        'id'    => 'ias',
        'logo'  => get_theme_file_uri( 'assets/img/acreditadoras/ias.webp' ),
        'alt'   => 'International Accreditation Service — IAS',
        'width' => 120,
        'height'=> 60,
        'normas'=> array(),
        'texto' => __( 'International Accreditation Service (IAS) proporciona evidencia objetiva de que una organización opera al nivel más alto de las normas éticas, legales y técnicas. IAS acredita una amplia gama de compañías y organizaciones, incluyendo entidades gubernamentales, empresas comerciales, y asociaciones de profesionales. Los programas de acreditación de IAS se basan en normas nacionales e internacionales reconocidas que facilitan la aceptación nacional y/o mundial de sus acreditaciones.', 'iqc' ),
    ),
    array(
        'id'    => 'jas-anz',
        'logo'  => get_theme_file_uri( 'assets/img/acreditadoras/jas-anz.webp' ),
        'alt'   => 'Joint Accreditation System of Australia and New Zealand — JAS-ANZ',
        'width' => 120,
        'height'=> 60,
        'normas'=> array( 'ISO 21001', 'FSSC 22000', 'ISO 9001', 'ISO 45001', 'ISO 14001', 'ISO 27001' ),
        'texto' => __( 'La acreditación JAS-ANZ constata la independencia e imparcialidad de los organismos de certificación, y autoriza su funcionamiento. Indica además que ha sido aprobado por un tercero independiente como un organismo profesional que actúa con integridad al certificar o inspeccionar la evaluación de las conformidades.', 'iqc' ),
    ),
    array(
        'id'    => 'inacal',
        'logo'  => get_theme_file_uri( 'assets/img/acreditadoras/inacal-logo.webp' ),
        'alt'   => 'Instituto Nacional de Calidad — INACAL',
        'width' => 120,
        'height'=> 60,
        'normas'=> array(),
        'texto' => __( 'INACAL es el referente nacional en materia de calidad — normalización técnica, acreditación y metrología — y gestión del Sistema Nacional para la Calidad. A través de esta certificación internacional, el Estado peruano se asegura de que todos los productos comercializados en el país sean de excelente calidad y cumplan con las exigencias dispuestas en la legislación.', 'iqc' ),
    ),
);
?>
<section id="acreditadoras" class="iqc-nosotros-acreditadoras" aria-labelledby="acreditadoras-title">
    <div class="iqc-container">

        <h2 id="acreditadoras-title" class="iqc-nosotros-acreditadoras__title iqc-section-title iqc-animate-fade-up">
            <?php esc_html_e( 'Nuestros Respaldos', 'iqc' ); ?>
        </h2>

        <div class="iqc-acreditadoras__list">
            <?php foreach ( $acreditadoras as $index => $item ) : ?>
                <article
                    class="iqc-acreditadora__card iqc-animate-fade-up"
                    style="--delay: <?php echo esc_attr( $index * 0.15 ); ?>s"
                    aria-labelledby="acr-<?php echo esc_attr( $item['id'] ); ?>-label"
                >
                    <div class="iqc-acreditadora__logo-wrap">
                        <img
                            src="<?php echo esc_url( $item['logo'] ); ?>"
                            alt="<?php echo esc_attr( $item['alt'] ); ?>"
                            width="<?php echo esc_attr( $item['width'] ); ?>"
                            height="<?php echo esc_attr( $item['height'] ); ?>"
                            loading="lazy"
                            class="iqc-acreditadora__logo"
                        >
                    </div>

                    <div class="iqc-acreditadora__body">
                        <p id="acr-<?php echo esc_attr( $item['id'] ); ?>-label" class="iqc-acreditadora__text">
                            <?php echo esc_html( $item['texto'] ); ?>
                        </p>

                        <?php if ( ! empty( $item['normas'] ) ) : ?>
                            <ul class="iqc-acreditadora__normas" role="list" aria-label="<?php esc_attr_e( 'Normas certificadas', 'iqc' ); ?>">
                                <?php foreach ( $item['normas'] as $norma ) : ?>
                                    <li class="iqc-acreditadora__norma-badge"><?php echo esc_html( $norma ); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>

    </div>
</section>
