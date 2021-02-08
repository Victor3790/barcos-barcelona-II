jQuery(document).ready(function($){

    $('#bb_news').slick({
        infinite: true,
        appendArrows: '#bb_arrows',
        prevArrow: '<div class="ships__arrow-container"><div class="ships__arrow ships__arrow--left"></div></div>',
        nextArrow: '<div class="ships__arrow-container"><div class="ships__arrow ships__arrow--right"></div></div>',
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