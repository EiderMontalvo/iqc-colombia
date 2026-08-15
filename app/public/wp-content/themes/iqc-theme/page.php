<?php
/*the template for Mostraring all pages. * * @package IQC_Theme * @since 1.0.0*/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<main id="main-content" tabindex="-1" class="iqc-container">
    <?php
    while ( have_posts() ) {
        the_post();
        
        echo '<article id="post-' . get_the_ID() . '" <?php post_class(); ?>>';
        
        echo '<header class="iqc-page-header">';
        the_title( '<h1 class="iqc-h1">', '</h1>' );
        echo '</header>';

        echo '<div class="iqc-page-content">';
        the_content();
        echo '</div>';
        
        echo '</article>';
    }
    ?>
</main>

<?php
get_footer();
