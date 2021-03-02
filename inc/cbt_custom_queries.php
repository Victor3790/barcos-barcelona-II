<?php
 /**
  * Customize queries.
  */
 function cbt_customize_queries( $query ) 
 {

    if( ! is_admin() && $query->is_main_query() ) {

        if( is_post_type_archive( 'yate' ) ) {

            $query->set( 'posts_per_page', YACHTS_PER_PAGE );

        }

        if( is_home() ) {

            $query->set( 'posts_per_page', POSTS_PER_PAGE );

        }

    }

 }