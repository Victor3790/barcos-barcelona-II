<?php
function cbt_search_query( $query ){

  if( is_admin() || !$query->is_main_query() )
    return;

  if( ! is_post_type_archive( 'yate' ) )
    return;

  $search_nonce = get_query_var( 'search_id' );

  if( empty( $search_nonce ) )
    return;

  if( ! wp_verify_nonce( $search_nonce, 'yatch_search' ) )
    return;

  $meta_query = array();

  $ship_type  = get_query_var( 'ship_type' ); 
  $min_rate   = get_query_var( 'min_rate' ); 
  $max_rate   = get_query_var( 'max_rate' ); 
  $min_length = get_query_var( 'min_length' ); 
  $max_length = get_query_var( 'max_length' ); 
  $min_cabins = get_query_var( 'min_cabins' ); 
  $max_cabins = get_query_var( 'max_cabins' ); 

  if( !empty( $ship_type ) )
    $meta_query[] = array(  'key'=>'tipo_data', 
                            'value'=>$ship_type, 
                            'compare'=>'=', 
                            'type'=>'CHAR'  
                          );

  if( !empty( $min_rate ) && !empty( $max_rate ) )
    $meta_query[] = array(  'key'=>'precio_data', 
                            'value'=>array($min_rate, $max_rate), 
                            'compare'=>'BETWEEN', 
                            'type'=>'NUMERIC'  
                          );

  if( !empty( $min_length ) && !empty( $max_length ) )
    $meta_query[] = array(  'key'=>'eslora_data', 
                            'value'=>array($min_length, $max_length), 
                            'compare'=>'BETWEEN', 
                            'type'=>'NUMERIC'  
                          );

  if( !empty( $min_cabins && !empty( $max_cabins ) ) )
    $meta_query[] = array(  'key'=>'camarotes_data', 
                            'value'=>array($min_cabins, $max_cabins), 
                            'compare'=>'BETWEEN', 
                            'type'=>'NUMERIC'  
                          );

  if( count( $meta_query ) > 1 ){
    $meta_query['relation'] = 'AND';
    $meta_query['orderby']  = array('precio_data'=>'DESC');
  }

  if( count( $meta_query ) > 0 )
    $query->set('meta_query', $meta_query);
  
}