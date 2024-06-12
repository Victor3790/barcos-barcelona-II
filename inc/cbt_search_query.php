<?php
function cbt_search_query( $query ){

  if( is_admin() || !$query->is_main_query() )
    return;

  if( ! is_post_type_archive( 'yate' ) )
    return;

  $search_nonce = get_query_var( 'search_id' );

  if( empty( $search_nonce ) )
    return;

  if( ! wp_verify_nonce( $search_nonce, 'yatch_search' ) ) {
    error_log('Custom base theme: Incorrect search nonce.');
    return;
  }

  $meta_query = array();
  $tax_query = array();

  $ship_type    = get_query_var( 'ship_type' ); 
  $min_rate     = get_query_var( 'min_rate' ); 
  $max_rate     = get_query_var( 'max_rate' ); 
  $min_length   = get_query_var( 'min_length' ); 
  $max_length   = get_query_var( 'max_length' ); 
  $min_cabins   = get_query_var( 'min_cabins' ); 
  $max_cabins   = get_query_var( 'max_cabins' ); 
  $destination  = get_query_var( 'cruising_area' ); 

  if( valid_tax_input( $ship_type, 'tipo' ) )
    $tax_query[] = array(   'taxonomy'=>'tipo',
                            'field'=>'slug',
                            'terms'=>$ship_type
                        );

  if( valid_meta_input( $min_rate, 2000, $max_rate, 800000 ) )
    $meta_query[] = array(  'key'=>'precio_data', 
                            'value'=>array($min_rate, $max_rate), 
                            'compare'=>'BETWEEN', 
                            'type'=>'NUMERIC'  
                          );

  if( valid_meta_input( $min_length, 1, $max_length, 99 ) )
    $meta_query[] = array(  'key'=>'eslora_data', 
                            'value'=>array($min_length, $max_length), 
                            'compare'=>'BETWEEN', 
                            'type'=>'NUMERIC'  
                          );

  if( valid_meta_input( $min_rate, 1, $max_rate, 21 ) )
    $meta_query[] = array(  'key'=>'camarotes_data', 
                            'value'=>array($min_cabins, $max_cabins), 
                            'compare'=>'BETWEEN', 
                            'type'=>'NUMERIC'  
                          );

  if( valid_tax_input( $destination, 'destino' ) )
    $tax_query[] = array(   'taxonomy'=>'destino',
                            'field'=>'slug',
                            'terms'=>$destination
                        );

  if( count( $meta_query ) > 1 ){
    $meta_query['relation'] = 'AND';
    $meta_query['orderby']  = array('precio_data'=>'DESC');
  }

  if( count( $meta_query ) > 0 )
    $query->set('meta_query', $meta_query);

  if( count( $tax_query ) > 1 )
    $tax_query['relation'] = 'AND';

  if( count( $tax_query ) > 0 )
    $query->set('tax_query', $tax_query);
}


function valid_tax_input( $query_var, $taxonomy ) 
{
  
  if( empty( $query_var ) )
    return false;

  $term = term_exists( $query_var, $taxonomy );

  if( $term === 0 || $term === null ) 
    return false;

  return true;

}

function valid_meta_input( $min_input, $min_limit, $max_input, $max_limit ) 
{
  
  if( empty( $min_input ) || empty( $min_limit ) )
    return false;

  if( empty( $max_input ) || empty( $max_limit ) )
    return false;

  if( !is_numeric( $min_input ) || !is_numeric( $min_limit ) )
    return false;

  if( !is_numeric( $max_input ) || !is_numeric( $max_limit ) )
    return false;

  if( $min_input < $min_limit || $min_input > $max_limit )
    return false;

  if( $max_input < $min_limit || $max_input > $max_limit )
    return false;

  return true;

}