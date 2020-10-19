<?php
 /**
  * Add custom classes to custom logo.
  */
 function cbt_add_custom_sizes() 
 {
    add_image_size('cbt_large', 1900, 850, true);
    //add_image_size('cbt_large_yacht', 1600, 700, true);
    add_image_size('cbt_small', 800, 300, true);
    add_image_size('cbt_small_retina', 1400, 600, true);
    add_image_size('cbt_small_landscape', 900, 450, true);
    add_image_size('cbt_small_landscape_retina', 1500, 850, true);
    add_image_size('cbt_thumbnail', 900, 700, true);
 }