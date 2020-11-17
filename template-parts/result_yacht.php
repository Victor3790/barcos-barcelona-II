<div class="col-12 col-md-6 col-lg-4">
    <div class="card">
        <img class="card__image" src="./imgs/thumbnail2_xs.jpg" alt="">
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