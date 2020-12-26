<?php
 /**
  * Add style tags in the header for yate post type.
  */
 function cbt_header_styles() 
 {
    if( is_singular( 'yate' ) || 
        ( is_page() && !is_page('main') ) || 
        is_single() )
        
        get_template_part( 'template-parts/single_yate_styles' );
 }
 