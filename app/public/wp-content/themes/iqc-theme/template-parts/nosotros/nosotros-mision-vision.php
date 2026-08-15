<?php
/*template part: Misión, Visión y Valores * * @package IQC_Theme*/

$items = array(
    array(
        'id'    => 'mision',
        'label' => __( 'MISIÓN', 'iqc' ),
        'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg>',
        'body'  => __( 'Impulsar la calidad, la seguridad y la sostenibilidad de las organizaciones colombianas mediante procesos de certificación ágiles, independientes e imparciales que generen valor real al tejido empresarial.', 'iqc' ),
    ),
    array(
        'id'    => 'vision',
        'label' => __( 'VISIÓN', 'iqc' ),
        'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>',
        'body'  => __( 'Ser el organismo de certificación líder en Colombia y Latinoamérica, reconocido por la excelencia técnica, la integridad ética y el compromiso con el desarrollo sostenible de las empresas que confían en nosotros.', 'iqc' ),
    ),
    array(
        'id'    => 'valores',
        'label' => __( 'VALORES', 'iqc' ),
        'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>',
        'body'  => __( 'Integridad · Independencia · Excelencia · Calidad · Lealtad', 'iqc' ),
    ),
);
?>
<section id="mision-vision" class="iqc-nosotros-mvv" aria-labelledby="mvv-title">
    <div class="iqc-container">

        <h2 id="mvv-title" class="screen-reader-text">
            <?php esc_html_e( 'Misión, Visión y Valores', 'iqc' ); ?>
        </h2>

        <div class="iqc-mvv__grid">
            <?php foreach ( $items as $index => $item ) : ?>
                <article
                    class="iqc-mvv__card iqc-animate-fade-up"
                    style="--delay: <?php echo esc_attr( $index * 0.15 ); ?>s"
                    aria-labelledby="mvv-<?php echo esc_attr( $item['id'] ); ?>-label"
                >
                    <div class="iqc-mvv__icon" aria-hidden="true">
                        <?php echo $item['icon']; /*phpcs:ignore WordPress.Security.EscapeOutput ?>*/

                    </div>
                    <h3 id="mvv-<?php echo esc_attr( $item['id'] ); ?>-label" class="iqc-mvv__label">
                        <?php echo esc_html( $item['label'] ); ?>
                    </h3>
                    <p class="iqc-mvv__body">
                        <?php echo esc_html( $item['body'] ); ?>
                    </p>
                </article>
            <?php endforeach; ?>
        </div>

    </div>
</section>
