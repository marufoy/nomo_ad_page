jQuery(function($) {
    $('.latest-info-container').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1
                }
            }
        ],
        arrows: true,
        dots: false
    });
});