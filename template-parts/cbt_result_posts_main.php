<?php global $wp_query; ?>
<div class="col-12 col-md-6 col-lg-3">
  <div class="cbt_post_thumbnail">
		<div class="cbt_post_thumbnail_pic">
			<?php the_post_thumbnail('cbt_xs_thumbnail'); ?>
		</div>
    <div>
      <a href="<?php the_permalink(); ?>">
        <h3 class="post-title">
          <?php the_title(); ?>
        </h3>
      </a>
    </div>
  </div>
</div>
