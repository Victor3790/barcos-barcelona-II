<?php
 /**
  * Add custom classes to custom logo.
  */
 function cbt_add_custom_sizes() 
 {
   add_image_size('cbt_xs',             600,  700,  true);
   add_image_size('cbt_xs_ret',         900,  1000, true);
   add_image_size('cbt_xs_lan',         700,  600,  true);
   add_image_size('cbt_xs_lan_ret',     1000, 900,  true);
   add_image_size('cbt_sm',             800,  900,  true);
   add_image_size('cbt_sm_ret',         900,  1000, true);
   add_image_size('cbt_sm_lan',         1000, 900,  true);
   add_image_size('cbt_sm_lan_ret',     1500, 900,  true);
   add_image_size('cbt_md',             1000, 700,  true);
   add_image_size('cbt_lg',             1300, 850,  true);
   add_image_size('cbt_xl',             1600, 850,  true);

   add_image_size('cbt_xxxs_thumbnail', 400,  200,  true);
   add_image_size('cbt_xxs_thumbnail',  500,  250,  true);
   add_image_size('cbt_xs_thumbnail',   600,  300,  true);
   add_image_size('cbt_sm_thumbnail',   800,  400,  true);
   add_image_size('cbt_md_thumbnail',   450,  225,  true);
   add_image_size('cbt_lg_thumbnail',   350,  200,  true);
   add_image_size('cbt_xl_thumbnail',   500,  300,  true);
 }