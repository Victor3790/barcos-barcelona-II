<?php
/*
*   Style header to include in the yate single pages.
*
*/

global $post;

$bg_large                   = get_the_post_thumbnail_url( $post->ID, 'cbt_xl' );
$bg_small                   = get_the_post_thumbnail_url( $post->ID, 'cbt_xs');
$bg_small_retina            = get_the_post_thumbnail_url( $post->ID, 'cbt_md');
$bg_small_landscape         = get_the_post_thumbnail_url( $post->ID, 'cbt_lg');
$bg_small_landscape_retina  = get_the_post_thumbnail_url( $post->ID, 'cbt_xl');
?>
<style type="text/css">
    .hero--single
    {
        background-image: url('<?php echo $bg_small; ?>');
    }

    @media
    only screen and (-webkit-min-device-pixel-ratio: 2)      and (max-width: 576px),
    only screen and (   min--moz-device-pixel-ratio: 2)      and (max-width: 576px),
    only screen and (     -o-min-device-pixel-ratio: 2/1)    and (max-width: 576px),
    only screen and (        min-device-pixel-ratio: 2)      and (max-width: 576px),
    only screen and (                min-resolution: 192dpi) and (max-width: 576px),
    only screen and (                min-resolution: 2dppx)  and (max-width: 576px) {
        .hero--single{
            background-image: url("<?php echo $bg_small_retina; ?>");
        }
    }

    @media  (max-width: 768px) and (orientation: landscape) {
        .hero--single{
            background-image: url("<?php echo $bg_small_landscape; ?>");
        }
    }

    @media
    only screen and (-webkit-min-device-pixel-ratio: 2)      and (max-width: 768px) and (orientation: landscape),
    only screen and (   min--moz-device-pixel-ratio: 2)      and (max-width: 768px) and (orientation: landscape),
    only screen and (     -o-min-device-pixel-ratio: 2/1)    and (max-width: 768px) and (orientation: landscape),
    only screen and (        min-device-pixel-ratio: 2)      and (max-width: 768px) and (orientation: landscape),
    only screen and (                min-resolution: 192dpi) and (max-width: 768px) and (orientation: landscape),
    only screen and (                min-resolution: 2dppx)  and (max-width: 768px) and (orientation: landscape) {
        .hero--single{
            background-image: url("<?php echo $bg_small_landscape_retina; ?>");
        }
    }

    @media (min-width: 768px){
        .hero--single{
            background-image: url("<?php echo $bg_large; ?>");
        }
    }
</style>