jQuery(document).ready(function($){

    $('#bb_news').slick({
        infinite: true,
        appendArrows: '#bb_arrows',
        prevArrow: '<i class="fas fa-angle-left slick-arrow" style="font-size: 43px; padding: 0 20px;"></i>',
        nextArrow: '<i class="fas fa-angle-right slick-arrow" style="font-size: 43px;"></i>',
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }
        ]
    });

});