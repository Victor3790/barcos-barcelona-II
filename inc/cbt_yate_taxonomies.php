<?php
function cptui_register_my_taxes() {

/**
 * Taxonomy: Tipos.
 */

$labels = [
    "name" => __( "Tipos", "barcos_barcelona" ),
    "singular_name" => __( "Tipo", "barcos_barcelona" ),
    "menu_name" => __( "Tipos", "barcos_barcelona" ),
];

$args = [
    "label" => __( "Tipos", "barcos_barcelona" ),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => false,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => [ 'slug' => 'tipo', 'with_front' => true, ],
    "show_admin_column" => true,
    "show_in_rest" => true,
    "rest_base" => "tipo",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "show_in_quick_edit" => false,
        ];
register_taxonomy( "tipo", [ "yate" ], $args );

/**
 * Taxonomy: Destinos.
 */

$labels = [
    "name" => __( "Destinos", "barcos_barcelona" ),
    "singular_name" => __( "Destino", "barcos_barcelona" ),
];

$args = [
    "label" => __( "Destinos", "barcos_barcelona" ),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => false,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => [ 'slug' => 'destino', 'with_front' => true, ],
    "show_admin_column" => false,
    "show_in_rest" => true,
    "rest_base" => "destino",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "show_in_quick_edit" => false,
        ];
register_taxonomy( "destino", [ "yate" ], $args );
}

