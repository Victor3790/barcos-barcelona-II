<?php
function cbt_query_vars( $vars ){
  $vars[] = 'ship_type';
  $vars[] = 'min_rate';
  $vars[] = 'max_rate';
  $vars[] = 'min_length';
  $vars[] = 'max_length';
  $vars[] = 'min_cabins';
  $vars[] = 'max_cabins';

  return $vars;
}