<?php
 /**
  * Add style tags in the header for yate post type.
  */
 function cbt_header_styles() 
 {
    if( is_singular( 'yate' ) )
        get_template_part( 'template-parts/single_yate_styles' );
 }
 