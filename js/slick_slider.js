jQuery(document).ready(function($){

    $('#bb_news').slick({
        infinite: true,
        appendArrows: '#bb_arrows',
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