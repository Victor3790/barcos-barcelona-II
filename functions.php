<?php
/**
 * Custom Base Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Custom_Base_Theme
 */

define ( 'THEME_NAME', 'barcos_barcelona' );
define ( 'THEME_URI', get_template_directory_uri() );
define ( 'POSTS_PER_PAGE', 3 );
define ( 'YACHTS_PER_PAGE', 5);

//Action hooks

include (get_theme_file_path('/inc/cbt_setup.php'));
add_action( 'after_setup_theme', 'cbt_setup' );

include (get_theme_file_path('/inc/cbt_content_width.php'));
add_action( 'after_setup_theme', 'cbt_content_width', 0 );

include (get_theme_file_path('/inc/cbt_widgets_init.php'));
add_action( 'widgets_init', 'cbt_widgets_init' );

include (get_theme_file_path('/inc/cbt_scripts.php'));
add_action( 'wp_enqueue_scripts', 'cbt_scripts' );

include (get_theme_file_path('/inc/cbt_scripts_footer.php'));
add_action( 'get_footer', 'cbt_scripts_footer' );

include (get_theme_file_path('/inc/cbt_customizer.php'));
add_action( 'customize_register', 'cbt_customizer' );

include (get_theme_file_path('/inc/cbt_header_styles.php'));
add_action( 'wp_head', 'cbt_header_styles' );

include (get_theme_file_path('/inc/cbt_yate_post_type.php'));
add_action( 'init', 'cptui_register_my_cpts_yate' );

include (get_theme_file_path('/inc/cbt_yate_taxonomies.php'));
add_action( 'init', 'cptui_register_my_taxes' );

include (get_theme_file_path('/inc/cbt_custom_queries.php'));
add_action( 'pre_get_posts', 'cbt_customize_queries' );

//Filter hooks

include (get_theme_file_path('/inc/cbt_custom_logo.php'));
add_filter( 'get_custom_logo', 'cbt_custom_logo' );

include (get_theme_file_path('/inc/cbt_add_custom_sizes.php'));
add_filter( 'after_setup_theme', 'cbt_add_custom_sizes' );

include (get_theme_file_path('/inc/cbt_query_vars.php'));
add_filter( 'query_vars', 'cbt_query_vars' );

include (get_theme_file_path('/inc/cbt_search_query.php'));
add_filter( 'pre_get_posts', 'cbt_search_query' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
