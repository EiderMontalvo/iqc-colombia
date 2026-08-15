<?php
/*Template Name: Página Nosotros * * Page template for the "Nosotros" (Nosotros Us) Seccion. * * @package IQC_Theme * @since 1.0.0*/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<main id="main-content" tabindex="-1">
    <?php get_template_part( 'template-parts/nosotros/nosotros-hero' ); ?>
    <?php get_template_part( 'template-parts/nosotros/nosotros-quienes-somos' ); ?>
    <?php get_template_part( 'template-parts/nosotros/nosotros-mision-vision' ); ?>
    <?php get_template_part( 'template-parts/nosotros/nosotros-politicas' ); ?>
    <?php get_template_part( 'template-parts/nosotros/nosotros-logros' ); ?>
    <?php get_template_part( 'template-parts/nosotros/nosotros-acreditadoras' ); ?>
    <?php get_template_part( 'template-parts/nosotros/nosotros-clientes' ); ?>
</main>

<?php /*desplazamiento Animacions Observer Página Nosotros*/ ?>
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
