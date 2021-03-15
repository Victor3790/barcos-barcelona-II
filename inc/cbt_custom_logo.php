<?php
 /**
  * Add custom classes to custom logo.
  */
 function cbt_custom_logo( $html ) 
 {
    $html = '';

    $custom_logo_id = get_theme_mod( 'custom_logo', false );

    if( empty( $custom_logo_id ) )
        return $html;

    $home_url = esc_url( home_url('/') );
    $image = esc_url( wp_get_attachment_url( $custom_logo_id ) );
    $alt = esc_attr( get_bloginfo ( 'name' ) );
    $code = '<a href="%1$s" rel="home">' .
            '<img src=%2$s class="header__logo__img" alt="%3$s"></a>';
    $html = sprintf( $code, $home_url, $image, $alt );

    return $html;
 }