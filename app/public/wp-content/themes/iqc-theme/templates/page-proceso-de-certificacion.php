<?php
/*Template Name: Página Proceso de Certificación * * Page template for the "Proceso de Certificación" Seccion. * * @package IQC_Theme * @since 1.0.0*/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<main id="main-content" tabindex="-1">
    <?php get_template_part( 'template-parts/proceso-certificacion/proceso-hero' ); ?>
    <?php get_template_part( 'template-parts/proceso-certificacion/proceso-pasos' ); ?>
    <?php get_template_part( 'template-parts/proceso-certificacion/proceso-auditorias' ); ?>
</main>

<?php /*desplazamiento Animacions Observer*/ ?>
<script>
(function () {
    if (!('IntersectionObserver' in window)) return;
    const observer = new IntersectionObserver(
        function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    const el = entry.target;
                    const delay = el.style.getPropertyValue('--delay') || '0s';
                    el.style.transitionDelay = delay;
                    el.classList.add('is-visible');
                    observer.unobserve(el);
                }
            });
        },
        { threshold: 0.1 }
    );
    document.querySelectorAll('.iqc-animate-fade-up, .iqc-animate-fade-right, .iqc-animate-fade-left').forEach(function (el) {
        observer.observe(el);
    });
}());
</script>

<?php get_footer(); ?>
