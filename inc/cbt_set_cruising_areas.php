<?php
function cbt_set_cruising_areas( $post_id )
{
    $areas = get_field( 'cruising_areas', $post_id );

    foreach ( $areas as $area ) {

        $key = 'bb_' . $area['value'];
        update_post_meta( $post_id, $key, 'true' );
        
    }
}
