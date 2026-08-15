<?php
/**
 * Custom Post Type: Certificación
 *
 * @package IQC_Plugin
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register Certificacion CPT
 */
function iqc_register_certificacion_cpt() {
    $labels = array(
        'name'                  => _x( 'Certificaciones', 'Post Type General Name', 'iqc' ),
        'singular_name'         => _x( 'Certificación', 'Post Type Singular Name', 'iqc' ),
        'menu_name'             => __( 'Certificaciones', 'iqc' ),
        'name_admin_bar'        => __( 'Certificación', 'iqc' ),
        'archives'              => __( 'Archivos de Certificación', 'iqc' ),
        'attributes'            => __( 'Atributos de Certificación', 'iqc' ),
        'parent_item_colon'     => __( 'Certificación Padre:', 'iqc' ),
        'all_items'             => __( 'Todas las Certificaciones', 'iqc' ),
        'add_new_item'          => __( 'Añadir Nueva Certificación', 'iqc' ),
        'add_new'               => __( 'Añadir Nueva', 'iqc' ),
        'new_item'              => __( 'Nueva Certificación', 'iqc' ),
        'edit_item'             => __( 'Editar Certificación', 'iqc' ),
        'update_item'           => __( 'Actualizar Certificación', 'iqc' ),
        'view_item'             => __( 'Ver Certificación', 'iqc' ),
        'view_items'            => __( 'Ver Certificaciones', 'iqc' ),
        'search_items'          => __( 'Buscar Certificación', 'iqc' ),
        'not_found'             => __( 'No se encontró', 'iqc' ),
        'not_found_in_trash'    => __( 'No se encontró en papelera', 'iqc' ),
        'featured_image'        => __( 'Imagen destacada', 'iqc' ),
        'set_featured_image'    => __( 'Establecer imagen destacada', 'iqc' ),
        'remove_featured_image' => __( 'Quitar imagen destacada', 'iqc' ),
        'use_featured_image'    => __( 'Usar como imagen destacada', 'iqc' ),
        'insert_into_item'      => __( 'Insertar en la certificación', 'iqc' ),
        'uploaded_to_this_item' => __( 'Subido a esta certificación', 'iqc' ),
        'items_list'            => __( 'Lista de certificaciones', 'iqc' ),
        'items_list_navigation' => __( 'Navegación de lista de certificaciones', 'iqc' ),
        'filter_items_list'     => __( 'Filtrar lista de certificaciones', 'iqc' ),
    );
    $args = array(
        'label'                 => __( 'Certificación', 'iqc' ),
        'description'           => __( 'Información sobre certificaciones IQC', 'iqc' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes' ),
        'taxonomies'            => array( 'sector' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 20,
        'menu_icon'             => 'dashicons-awards',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => 'certificaciones',
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true, // Habilita Gutenberg
        'rewrite'               => array( 'slug' => 'certificaciones', 'with_front' => false ),
    );
    register_post_type( 'certificacion', $args );
}
add_action( 'init', 'iqc_register_certificacion_cpt', 0 );

/**
 * Register Sector Taxonomy for Certificacion CPT
 */
function iqc_register_sector_taxonomy() {
    $labels = array(
        'name'                       => _x( 'Sectores', 'Taxonomy General Name', 'iqc' ),
        'singular_name'              => _x( 'Sector', 'Taxonomy Singular Name', 'iqc' ),
        'menu_name'                  => __( 'Sectores', 'iqc' ),
        'all_items'                  => __( 'Todos los Sectores', 'iqc' ),
        'parent_item'                => __( 'Sector Padre', 'iqc' ),
        'parent_item_colon'          => __( 'Sector Padre:', 'iqc' ),
        'new_item_name'              => __( 'Nuevo Nombre de Sector', 'iqc' ),
        'add_new_item'               => __( 'Añadir Nuevo Sector', 'iqc' ),
        'edit_item'                  => __( 'Editar Sector', 'iqc' ),
        'update_item'                => __( 'Actualizar Sector', 'iqc' ),
        'view_item'                  => __( 'Ver Sector', 'iqc' ),
        'separate_items_with_commas' => __( 'Separar sectores con comas', 'iqc' ),
        'add_or_remove_items'        => __( 'Añadir o eliminar sectores', 'iqc' ),
        'choose_from_most_used'      => __( 'Elegir de los más usados', 'iqc' ),
        'popular_items'              => __( 'Sectores populares', 'iqc' ),
        'search_items'               => __( 'Buscar Sectores', 'iqc' ),
        'not_found'                  => __( 'No se encontró', 'iqc' ),
        'no_terms'                   => __( 'No hay sectores', 'iqc' ),
        'items_list'                 => __( 'Lista de sectores', 'iqc' ),
        'items_list_navigation'      => __( 'Navegación de lista de sectores', 'iqc' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => false, // Como tags, no como categorías (o true si prefieren jerarquía)
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_rest'               => true,
        'rewrite'                    => array( 'slug' => 'sector' ),
    );
    register_taxonomy( 'sector', array( 'certificacion' ), $args );
}
add_action( 'init', 'iqc_register_sector_taxonomy', 0 );
