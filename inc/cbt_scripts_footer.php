<?php
/**
 * Enqueue scripts and styles.
 */
function cbt_scripts_footer() {

	if( is_page('main') ){
		
		wp_enqueue_style( THEME_NAME . '_home', 
						  THEME_URI . '/css/home.css');

		wp_enqueue_style( THEME_NAME . '_bootstrap_reboot_below', 
						  THEME_URI . '/css/bootstrap_reboot_below.css' );

		wp_enqueue_style( THEME_NAME . '_form', 
						  THEME_URI . '/css/form.css' );

		wp_enqueue_style( THEME_NAME . '_main_below', 
						  THEME_URI . '/css/main_below.css' );

		wp_enqueue_style( THEME_NAME . '_post_archive', 
						  THEME_URI . '/css/post-archive.css' );

		wp_enqueue_style( THEME_NAME . '_slick', 
						  THEME_URI . '/css/slick.css' );
	}
	
}