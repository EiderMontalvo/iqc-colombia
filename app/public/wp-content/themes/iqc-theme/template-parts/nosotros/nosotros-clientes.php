<?php
/*template part: Nuestros Clientes * * @package IQC_Theme*/

$clientes = array(
    array(
        'img'    => get_theme_file_uri( 'assets/img/clientes/iqc-cliente-1.webp' ),
        'alt'    => __( 'Ortiz Lossio S.R.L. — IQC Colombia', 'iqc' ),
        'nombre' => 'ORTIZ LOSSIO S.R.L.',
        'certs'  => array( 'ISO 9001:2015', 'ISO 14001:2015', 'ISO 45001:2018', 'ISO 37001:2016' ),
    ),
    array(
        'img'    => get_theme_file_uri( 'assets/img/clientes/iqc-cliente-2.webp' ),
        'alt'    => __( 'Constructora y Consultora Asenmer S.R.L. — IQC Colombia', 'iqc' ),
        'nombre' => 'CONSTRUCTORA Y CONSULTORA ASENMER S.R.L.',
        'certs'  => array( 'ISO 37001:2016', 'ISO 45001:2018' ),
    ),
    array(
        'img'    => get_theme_file_uri( 'assets/img/clientes/iqc-cliente-3.webp' ),
        'alt'    => __( 'Ortiz Lossio S.R.L. — Certificación ISO', 'iqc' ),
        'nombre' => 'ORTIZ LOSSIO S.R.L.',
        'certs'  => array( 'ISO 45001:2018', 'ISO 37001:2016' ),
    ),
    array(
        'img'    => get_theme_file_uri( 'assets/img/clientes/iqc-cliente-4.webp' ),
        'alt'    => __( 'Cliente IQC Colombia 4', 'iqc' ),
        'nombre' => 'EMPRESA CERTIFICADA IQC',
        'certs'  => array( 'ISO 9001:2015', 'ISO 45001:2018' ),
    ),
    array(
        'img'    => get_theme_file_uri( 'assets/img/clientes/iqc-cliente-5.webp' ),
        'alt'    => __( 'Cliente IQC Colombia 5', 'iqc' ),
        'nombre' => 'EMPRESA CERTIFICADA IQC',
        'certs'  => array( 'ISO 14001:2015', 'ISO 9001:2015' ),
    ),
);
?>
<section id="clientes" class="iqc-nosotros-clientes" aria-labelledby="clientes-title">
    <div class="iqc-container">

        <h2 id="clientes-title" class="iqc-section-title iqc-animate-fade-up" style="text-align:center; margin-bottom: var(--space-8);">
            <?php esc_html_e( 'Nuestros Clientes', 'iqc' ); ?>
        </h2>

        <div class="iqc-clientes__grid" role="list">
            <?php foreach ( $clientes as $index => $cliente ) : ?>
                <article
                    class="iqc-cliente__card iqc-animate-fade-up"
                    style="--delay: <?php echo esc_attr( $index * 0.1 ); ?>s"
                    role="listitem"
                >
                    <div class="iqc-cliente__img-wrap">
                        <img
                            src="<?php echo esc_url( $cliente['img'] ); ?>"
                            alt="<?php echo esc_attr( $cliente['alt'] ); ?>"
                            width="400"
                            height="300"
                            loading="lazy"
                            class="iqc-cliente__img"
                        >
                    </div>
                    <div class="iqc-cliente__info">
                        <p class="iqc-cliente__nombre"><?php echo esc_html( $cliente['nombre'] ); ?></p>
                        <ul class="iqc-cliente__certs" role="list" aria-label="<?php esc_attr_e( 'Certificaciones', 'iqc' ); ?>">
                            <?php foreach ( $cliente['certs'] as $cert ) : ?>
                                <li class="iqc-cliente__cert">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" width="12" height="12" aria-hidden="true" focusable="false">
                                        <polyline points="2 8 6 12 14 4"/>
                                    </svg>
                                    <?php echo esc_html( $cert ); ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>

    </div>
</section>
