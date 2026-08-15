<?php
/*template Part: Testimonios Seccion * Sección de reseñas y valoraciones de clientes empresariales. * * @package IQC_Theme * @since 1.0.0*/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/*testimonios de clientes en producción, estos vendrán de un CPT o * un plugin de reviews (ej. WP Testimonios). Por ahora, placeholders reales.*/
$testimonials = array(
    array(
        'quote'   => 'Gracias a IQC logramos nuestra certificación ISO 9001:2015 en tiempo récord. El acompañamiento técnico fue excepcional desde la primera reunión hasta la auditoría final.',
        'name'    => 'Carlos Martínez',
        'role'    => 'Gerente de Calidad',
        'company' => 'Industrias Andinas S.A.S.',
        'stars'   => 5,
        'initial' => 'C',
    ),
    array(
        'quote'   => 'El equipo de IQC nos guió paso a paso en todo el proceso de certificación ISO 14001. Muy profesionales y siempre disponibles para resolver nuestras dudas.',
        'name'    => 'Diana Ospina',
        'role'    => 'Directora de Operaciones',
        'company' => 'Constructora Verde S.A.',
        'stars'   => 4.5,
        'initial' => 'D',
    ),
    array(
        'quote'   => 'Renovamos nuestra certificación ISO 45001 con IQC por segundo año consecutivo. La seriedad y el rigor técnico de sus auditores nos da plena confianza.',
        'name'    => 'Roberto Sánchez',
        'role'    => 'Jefe de SST',
        'company' => 'Minería del Pacífico Ltda.',
        'stars'   => 4,
        'initial' => 'R',
    ),
    array(
        'quote'   => 'El servicio al cliente y la plataforma de seguimiento documental que nos proporcionaron facilitaron enormemente nuestra auditoría externa. Muy recomendados.',
        'name'    => 'Laura Gómez',
        'role'    => 'Coordinadora HSEQ',
        'company' => 'Transportes Logísticos Nacionales',
        'stars'   => 5,
        'initial' => 'L',
    ),
    array(
        'quote'   => 'Llevamos 5 años trabajando con IQC para nuestras múltiples certificaciones ISO. Son un aliado estratégico clave para nuestra expansión internacional.',
        'name'    => 'Andrés Silva',
        'role'    => 'Director Ejecutivo',
        'company' => 'AgroExport Colombia',
        'stars'   => 4.5,
        'initial' => 'A',
    ),
    array(
        'quote'   => 'Destaco el profesionalismo del equipo auditor. Fueron muy objetivos y aportaron valor real a la mejora de nuestros procesos internos.',
        'name'    => 'María Fernanda Ruiz',
        'role'    => 'Gerente General',
        'company' => 'Servicios Médicos Integrales',
        'stars'   => 5,
        'initial' => 'M',
    ),
);
?>

<section class="iqc-testimonials" aria-labelledby="testimonials-title">
    <div class="iqc-container">

        <header class="iqc-section-header">
            <p class="iqc-section-eyebrow"><?php esc_html_e( 'Lo que dicen nuestros clientes', 'iqc' ); ?></p>
            <h2 id="testimonials-title" class="iqc-section-title">
                <?php esc_html_e( 'Empresas que confían en IQC', 'iqc' ); ?>
            </h2>
            <p class="iqc-section-subtitle">
                <?php esc_html_e( 'Más de 500 organizaciones certificadas en Colombia y América Latina.', 'iqc' ); ?>
            </p>
        </header>

        <?php /*testimonios Cuadricula*/ ?>
        <div class="iqc-testimonials__grid">
            <?php foreach ( $testimonials as $testimonial ) : ?>
                <article class="iqc-testimonial-card" style="position: relative;">

                    <?php /*quote Iconoo*/ ?>
                    <div class="iqc-testimonial-card__quote-icon" aria-hidden="true" style="position: absolute; top: 1.5rem; right: 1.5rem; transform: scaleX(-1); color: #666; opacity: 0.4;">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                        </svg>
                    </div>

                    <?php /*stars*/ ?>
                    <div class="iqc-testimonial-card__stars" aria-label="<?php echo esc_attr( $testimonial['stars'] ) . ' de 5 estrellas'; ?>">
                        <?php 
                        $stars_count = (float) $testimonial['stars'];
                        for ( $i = 1; $i <= 5; $i++ ) : 
                            if ( $i <= $stars_count ) {
                                /*estrella completa*/

                                ?>
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                                </svg>
                                <?php
                            } elseif ( $i - 0.5 == $stars_count ) {
                                /*media estrella*/

                                $unique_id = 'half-star-' . uniqid();
                                ?>
                                <svg width="18" height="18" viewBox="0 0 24 24" aria-hidden="true">
                                    <defs>
                                        <linearGradient id="<?php echo $unique_id; ?>" x1="0" x2="100%" y1="0" y2="0">
                                            <stop offset="50%" stop-color="currentColor"/>
                                            <stop offset="50%" stop-color="currentColor" stop-opacity="0.3"/>
                                        </linearGradient>
                                    </defs>
                                    <polygon fill="url(#<?php echo $unique_id; ?>)" points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                                </svg>
                                <?php
                            } else {
                                /*estrella vacía*/

                                ?>
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" style="opacity: 0.3;" aria-hidden="true">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                                </svg>
                                <?php
                            }
                        endfor; 
                        ?>
                    </div>

                    <?php /*quote*/ ?>
                    <blockquote class="iqc-testimonial-card__quote">
                        <p><?php echo esc_html( $testimonial['quote'] ); ?></p>
                    </blockquote>

                    <?php /*author*/ ?>
                    <footer class="iqc-testimonial-card__author">
                        <div class="iqc-testimonial-card__avatar" aria-hidden="true">
                            <?php echo esc_html( $testimonial['initial'] ); ?>
                        </div>
                        <div class="iqc-testimonial-card__meta">
                            <strong class="iqc-testimonial-card__name"><?php echo esc_html( $testimonial['name'] ); ?></strong>
                            <span class="iqc-testimonial-card__role">
                                <?php echo esc_html( $testimonial['role'] ); ?> &mdash; <?php echo esc_html( $testimonial['company'] ); ?>
                            </span>
                        </div>
                    </footer>

                </article>
            <?php endforeach; ?>
        </div>

        <?php /*carrusel Pagination Dots*/ ?>
        <div class="iqc-testimonials__pagination" aria-hidden="true"></div>

    </div>
</section>
