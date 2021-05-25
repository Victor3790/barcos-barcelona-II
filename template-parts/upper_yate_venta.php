<?php
  global $wp_query;
	$total = $wp_query->found_posts;
	$on_page = $wp_query->post_count;
?>
<div class="hero hero--venta-archive" style="margin-top:0;">
      <div class="hero__title-wrapper">
        <h1 class="hero__title"> <span class="hero__title__upper">VENTA DE </span>YATES</h1>
        <span class="hero__arrow"></span>
      </div>
</div>
<div class="search section section--dark section--justified">
    <div class="row">
        <div class="search__counter__wrapper col">
          <p class="search__counter" style="padding:10px 0;margin:0;">
            Mostrando <?php echo $on_page; ?> de <?php echo $total; ?>
          </p>
        </div>
    </div>
</div>
