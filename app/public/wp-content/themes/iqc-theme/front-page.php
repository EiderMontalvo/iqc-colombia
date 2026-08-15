<?php
/*the front page template file * * @package IQC_Theme*/

get_header(); ?>

<main id="primary" class="site-main">
    <?php get_template_part( 'template-parts/home/hero' ); ?>
    <?php get_template_part( 'template-parts/home/certifications' ); ?>
    <?php get_template_part( 'template-parts/home/why-us' ); ?>
    <?php get_template_part( 'template-parts/home/testimonials' ); ?>
    <?php get_template_part( 'template-parts/home/accreditations' ); ?>
</main>

<?php
get_footer();
