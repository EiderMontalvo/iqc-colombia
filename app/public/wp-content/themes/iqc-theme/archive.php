<?php
/*the template for Mostraring archive pages. * * @package IQC_Theme * @since 1.0.0*/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<main id="main-content" tabindex="-1" class="iqc-container">
    <header class="iqc-archive-header">
        <?php
        the_archive_title( '<h1 class="iqc-h1">', '</h1>' );
        the_archive_description( '<div class="iqc-archive-description">', '</div>' );
        ?>
    </header>

    <?php if ( have_posts() ) : ?>
        <div class="iqc-grid--auto">
            <?php
            while ( have_posts() ) :
                the_post();
                
                /*tarjeta genérica. Debería usar get_template_part para componentes específicos.*/

                echo '<article id="post-' . get_the_ID() . '" class="iqc-card">';
                the_title( '<h2 class="iqc-h3"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
                the_excerpt();
                echo '</article>';
            endwhile;
            ?>
        </div>
        
        <?php the_posts_pagination(); ?>
        
    <?php else : ?>
        <p><?php esc_html_e( 'No se encontró contenido para este archivo.', 'iqc' ); ?></p>
    <?php endif; ?>
</main>

<?php
get_footer();
