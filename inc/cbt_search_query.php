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
  $precio = get_query_var( 'precio' );

  if( !empty( get_query_var( 'tipo' ) ) ){
    $tipo             = get_query_var( 'tipo' );
    $meta_query[] = array( 'key'=>'tipo_data', 'value'=>$tipo, 'compare'=>'=', 'type'=>'CHAR'  );
  }

  if( isset( $precio ) ){
    $precio_from      = get_query_var( 'precio' );
    $precio_to        = $precio_from + 100000;
    if($precio_from == 500000){
      $meta_query[] = array( 'key'=>'precio_data', 'value'=>$precio_from, 'compare'=>'>=', 'type'=>'NUMERIC'  );
    }else{
      $meta_query[] = array( 'key'=>'precio_data', 'value'=>array($precio_from, $precio_to), 'compare'=>'BETWEEN', 'type'=>'NUMERIC'  );
    }
  }

  if( count( $meta_query ) > 1 ){
    $meta_query['relation'] = 'AND';
    $meta_query['orderby']  = array('precio_data'=>'DESC');
  }

  if( count( $meta_query ) > 0 ){
    $query->set('meta_query', $meta_query);
  }
}