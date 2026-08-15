<?php
/*template part: Informacion de Contactoo + mapa * * @package IQC_Theme*/

$info_items = array(
    array(
        'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.35 2 2 0 0 1 3.59 1h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.91a16 16 0 0 0 6.15 6.15l1.18-.87a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>',
        'label' => __( 'Teléfono', 'iqc' ),
        'value' => '+51 980 923 270',
        'href'  => 'tel:+51980923270',
    ),
    array(
        'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>',
        'label' => __( 'Correo', 'iqc' ),
        'value' => 'comercial@iqcperu.com',
        'href'  => 'mailto:comercial@iqcperu.com',
    ),
    array(
        'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>',
        'label' => __( 'Ubicación', 'iqc' ),
        'value' => 'Colombia',
        'href'  => '#mapa',
    ),
    array(
        'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>',
        'label' => __( 'Horario', 'iqc' ),
        'value' => 'Lunes a Viernes · 9:00 AM – 6:00 PM',
        'href'  => null,
    ),
);
?>
<section class="iqc-contacto-info" aria-labelledby="contacto-info-title">
    <div class="iqc-container">

        <div class="iqc-contacto-info__grid">

            <?php /*mapa*/ ?>
            <div class="iqc-contacto-mapa" id="mapa">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15908948.34736742!2d-79.89505545!3d4.570868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f0a6dcdb98a85%3A0x2af09f3e754dd5fa!2sColombia!5e0!3m2!1ses!2sco!4v1694000000000!5m2!1ses!2sco"
                    width="100%"
                    height="360"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    title="<?php esc_attr_e( 'Ubicación de IQC Colombia en el mapa', 'iqc' ); ?>"
                ></iframe>
            </div>

            <?php /*informacionrmularioacion Tarjetas*/ ?>
            <div class="iqc-contacto-info__cards">
                <h2 id="contacto-info-title" class="iqc-contacto-info__heading">
                    <?php esc_html_e( 'Nos Encontramos En', 'iqc' ); ?>
                </h2>

                <?php foreach ( $info_items as $item ) : ?>
                    <div class="iqc-contacto-info__card">
                        <span class="iqc-contacto-info__icon" aria-hidden="true">
                            <?php echo $item['icon']; /*phpcs:ignore WordPress.Security.EscapeOutput ?>*/

                        </span>
                        <div class="iqc-contacto-info__card-body">
                            <span class="iqc-contacto-info__card-label"><?php echo esc_html( $item['label'] ); ?></span>
                            <?php if ( $item['href'] ) : ?>
                                <a href="<?php echo esc_url( $item['href'] ); ?>" class="iqc-contacto-info__card-value">
                                    <?php echo esc_html( $item['value'] ); ?>
                                </a>
                            <?php else : ?>
                                <span class="iqc-contacto-info__card-value"><?php echo esc_html( $item['value'] ); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</section>
