<?php
    //Get the header image background in differente sizes.
    $cbt_bg_xs          = get_the_post_thumbnail_url($post->ID, 'cbt_xs');
    $cbt_bg_xs_ret      = get_the_post_thumbnail_url($post->ID, 'cbt_xs_ret');
    $cbt_bg_xs_lan      = get_the_post_thumbnail_url($post->ID, 'cbt_xs_lan');
    $cbt_bg_xs_lan_ret  = get_the_post_thumbnail_url($post->ID, 'cbt_xs_lan_ret');
    $cbt_bg_sm          = get_the_post_thumbnail_url($post->ID, 'cbt_sm');
    $cbt_bg_sm_ret      = get_the_post_thumbnail_url($post->ID, 'cbt_sm_ret');
    $cbt_bg_sm_lan      = get_the_post_thumbnail_url($post->ID, 'cbt_sm_lan');
    $cbt_bg_sm_lan_ret  = get_the_post_thumbnail_url($post->ID, 'cbt_sm_lan_ret');
    $cbt_bg_md          = get_the_post_thumbnail_url($post->ID, 'cbt_md');
    $cbt_bg_lg          = get_the_post_thumbnail_url($post->ID, 'cbt_lg');
    $cbt_bg_xl          = get_the_post_thumbnail_url($post->ID, 'cbt_xl');
?>
<style type="text/css">

    .hero--single{
        background-image: url("<?php echo $cbt_bg_xl; ?>");
    }

    @media (max-width: 1200px){
                .hero--single{
                    background-image: url("<?php echo $cbt_bg_lg; ?>");
                }
    }

    @media (max-width: 992px){
            .hero--single{
                background-image: url("<?php echo $cbt_bg_md; ?>");
            }
    }

    @media (max-width: 768px){
        .hero--single{
            background-image: url("<?php echo $cbt_bg_sm; ?>");
        }
    }

    @media
    only screen and (-webkit-min-device-pixel-ratio: 2)      and (max-width: 768px),
    only screen and (   min--moz-device-pixel-ratio: 2)      and (max-width: 768px),
    only screen and (     -o-min-device-pixel-ratio: 2/1)    and (max-width: 768px),
    only screen and (        min-device-pixel-ratio: 2)      and (max-width: 768px),
    only screen and (                min-resolution: 192dpi) and (max-width: 768px),
    only screen and (                min-resolution: 2dppx)  and (max-width: 768px) {
        .hero--single{
            background-image: url("<?php echo $cbt_bg_sm_ret; ?>");
        }
    }

    @media  (max-width: 768px) and (orientation: landscape) {
        .hero--single{
            background-image: url("<?php echo $cbt_bg_sm_lan; ?>");
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
            background-image: url("<?php echo $cbt_bg_sm_lan_ret; ?>");
        }
    }

    @media (max-width: 576px){
        .hero--single{
            background-image: url("<?php echo $cbt_bg_xs; ?>");
        }
    }

    @media
    only screen and (-webkit-min-device-pixel-ratio: 2)      and (max-width: 576px),
    only screen and (   min--moz-device-pixel-ratio: 2)      and (max-width: 576px),
    only screen and (     -o-min-device-pixel-ratio: 2/1)    and (max-width: 576px),
    only screen and (        min-device-pixel-ratio: 2)      and (max-width: 576px),
    only screen and (                min-resolution: 192dpi) and (max-width: 576px),
    only screen and (                min-resolution: 2dppx)  and (max-width: 576px) {
        .hero--single{
            background-image: url("<?php echo $cbt_bg_xs_ret; ?>");
        }
    }

    @media  (max-width: 576px) and (orientation: landscape) {
        .hero--single{
            background-image: url("<?php echo $cbt_bg_xs_lan; ?>");
        }
    }

    @media
    only screen and (-webkit-min-device-pixel-ratio: 2)      and (max-width: 576px) and (orientation: landscape),
    only screen and (   min--moz-device-pixel-ratio: 2)      and (max-width: 576px) and (orientation: landscape),
    only screen and (     -o-min-device-pixel-ratio: 2/1)    and (max-width: 576px) and (orientation: landscape),
    only screen and (        min-device-pixel-ratio: 2)      and (max-width: 576px) and (orientation: landscape),
    only screen and (                min-resolution: 192dpi) and (max-width: 576px) and (orientation: landscape),
    only screen and (                min-resolution: 2dppx)  and (max-width: 576px) and (orientation: landscape) {
        .hero--single{
            background-image: url("<?php echo $cbt_bg_xs_lan_ret; ?>");
        }
    }


</style>

