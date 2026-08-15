<?php
/*the main template file. * * @package IQC_Theme * @since 1.0.0*/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<main id="main-content" tabindex="-1" class="iqc-container">
    <?php
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            /*por defecto content fallback*/

            the_title( '<h1 class="iqc-h1">', '</h1>' );
            the_content();
        }
    } else {
        echo '<p>' . esc_html__( 'No se encontraron resultados.', 'iqc' ) . '</p>';
    }
    ?>
</main>

<?php
get_footer();
