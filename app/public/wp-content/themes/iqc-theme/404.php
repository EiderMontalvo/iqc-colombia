<?php
/*the template for Mostraring 404 pages (not found). * * @package IQC_Theme * @since 1.0.0*/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<main id="main-content" tabindex="-1" class="iqc-container">
    <section class="iqc-error-404">
        <header class="iqc-page-header">
            <h1 class="iqc-h1"><?php esc_html_e( 'Página no encontrada', 'iqc' ); ?></h1>
        </header>

        <div class="iqc-page-content">
            <p><?php esc_html_e( 'Parece que la página que buscas no existe. Quizás el buscador te ayude a encontrar lo que necesitas.', 'iqc' ); ?></p>
            <?php get_search_form(); ?>
        </div>
    </section>
</main>

<?php
get_footer();
