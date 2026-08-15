<?php
/*the Cabecera for our theme. * * @package IQC_Theme * @since 1.0.0*/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="iqc-skip-link" href="#main-content">
    <?php esc_html_e( 'Saltar al contenido principal', 'iqc' ); ?>
</a>

<?php get_template_part( 'template-parts/header/site-header' ); ?>
