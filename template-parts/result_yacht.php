<?php
    $xxxs_thumbnail = get_the_post_thumbnail_url($post->ID, 'cbt_xxxs_thumbnail');
    $xxs_thumbnail  = get_the_post_thumbnail_url($post->ID, 'cbt_xxs_thumbnail');
    $xs_thumbnail   = get_the_post_thumbnail_url($post->ID, 'cbt_xs_thumbnail');
    $sm_thumbnail   = get_the_post_thumbnail_url($post->ID, 'cbt_sm_thumbnail');
    $md_thumbnail   = get_the_post_thumbnail_url($post->ID, 'cbt_md_thumbnail');
    $lg_thumbnail   = get_the_post_thumbnail_url($post->ID, 'cbt_lg_thumbnail');
    $xl_thumbnail   = get_the_post_thumbnail_url($post->ID, 'cbt_xl_thumbnail');
?>
<div class="col-12 col-md-6 col-lg-4">
    <div class="card">
        <a href="<?php the_permalink(); ?>">
            <div class="card__picture card__picture--center">
                <img  class="card__picture__img"
                    src="<?php echo $xl_thumbnail; ?>" 
                    alt="<?php the_title(); ?>" 
                    srcset="<?php echo $xxxs_thumbnail; ?>  400w,
                            <?php echo $xxs_thumbnail;  ?>  500w,
                            <?php echo $xs_thumbnail;   ?>  600w,
                            <?php echo $sm_thumbnail;   ?>  800w,
                            <?php echo $md_thumbnail;   ?>  450w,
                            <?php echo $lg_thumbnail;   ?>  350w,
                            <?php echo $xl_thumbnail;   ?>  500w"

                    sizes=" (max-width: 400px)  400px,
                            (max-width: 480px)  500px,
                            (max-width: 576px)  600px,
                            (max-width: 768px)  800px,
                            (max-width: 992px)  450px,
                            (max-width: 1200px) 350px,
                            500px">
            </div>
        </a>
        <div class="card__info section section--dark">
            <a class="card__title card--upper" href="<?php the_permalink(); ?>">
                <h3>
                        <?php the_title(); ?>
                </h3>
            </a>
            <p class="card__text card--upper">
                <?php 
                    the_field('builder'); 
                    echo ", ";  
                    the_field('eslora'); 
                ?>
            </p>
            <p class="card__text">
                <?php $accommodation = get_field( 'accommodation' ); ?>
                <?php echo $accommodation['invitados']; ?> 
                invitados en 
                <?php echo $accommodation['camarotes']; ?> 
                camarotes.
            </p>
            <p class="card__text">
                <?php the_field('precio'); ?>
            </p>
        </div>
    </div>
</div>