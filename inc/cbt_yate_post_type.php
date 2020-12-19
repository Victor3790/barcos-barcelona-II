<?php
function cptui_register_my_cpts_yate() {

	/**
	 * Post Type: yates.
	 */

	$labels = [
		"name" => __( "yates", "barcos_barcelona" ),
		"singular_name" => __( "yate", "barcos_barcelona" ),
	];

	$args = [
		"label" => __( "yates", "barcos_barcelona" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "yate", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "yate", $args );
}

