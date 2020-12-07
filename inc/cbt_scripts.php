 
<?php
/**
 * Enqueue scripts and styles.
 */
function cbt_scripts() {

	//wp_enqueue_style( 'cbt-style', get_stylesheet_uri() );

	wp_enqueue_script ( THEME_NAME . '_menu',
						THEME_URI . '/js/menu.js',
						array('jquery'),
						false,
						true );

	wp_enqueue_style( THEME_NAME . '_bootstrap_reboot', 
					  THEME_URI . '/css/bootstrap_reboot.css' );

	wp_enqueue_style( THEME_NAME . '_main', 
					  THEME_URI . '/css/main.css' );

	wp_enqueue_style( THEME_NAME . '_header', 
					  THEME_URI . '/css/header.css' );

	if( is_page('main') ){

		wp_dequeue_style( THEME_NAME . '_bootstrap_reboot' );

		wp_dequeue_style( THEME_NAME . '_main' );
		
		wp_enqueue_style( THEME_NAME . '_bootstrap_reboot_above', 
						  THEME_URI . '/css/bootstrap_reboot_above.css' );

		wp_enqueue_style( THEME_NAME . '_main_above', 
						  THEME_URI . '/css/main_above.css' );

	}

	if ( is_singular('yate') ){

		wp_enqueue_style( THEME_NAME . '_single', 
						  THEME_URI . '/css/single_yacht.css' );

		wp_enqueue_style( THEME_NAME . '_bootstrap_grid', 
						  THEME_URI . '/css/bootstrap_grid.css' );

		wp_enqueue_style( THEME_NAME . '_form', 
						  THEME_URI . '/css/form.css' );
	}

	if(is_post_type_archive('yate')){

		wp_enqueue_style( THEME_NAME . '_bootstrap_grid', 
						  THEME_URI . '/css/bootstrap_grid.css' );

		wp_enqueue_style( THEME_NAME . '_archive', 
						  THEME_URI . '/css/yacht_archive.css' );


		wp_enqueue_style( THEME_NAME . '_slider', 
						  'https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css' );

		wp_enqueue_style( THEME_NAME . '_search_style', 
						  THEME_URI . '/css/search.css' );

		wp_enqueue_script ( THEME_NAME . '_search_slider',
						  THEME_URI . '/js/search_slider.js',
						  array('jquery-touch-punch', 'jquery-ui-slider', 'jquery'),
						  false,
						  true );

		wp_enqueue_script ( THEME_NAME . '_search',
						  THEME_URI . '/js/search.js',
						  array(THEME_NAME . '_search_slider'),
						  false,
						  true );
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
}