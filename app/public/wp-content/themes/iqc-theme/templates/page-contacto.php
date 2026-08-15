<?php
/*Template Name: Página Contactoo * * @package IQC_Theme * @since 1.0.0*/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<main id="main-content" tabindex="-1">
    <?php get_template_part( 'template-parts/contacto/contacto-hero' ); ?>
    <?php get_template_part( 'template-parts/contacto/contacto-info' ); ?>
    <?php get_template_part( 'template-parts/contacto/contacto-form' ); ?>
</main>

<?php get_footer(); ?>
