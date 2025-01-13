jQuery(function($) {
    $('.latest-info-container').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    dots: true,
                    arrows: false,
                }
            }
        ],
        arrows: true,
        dots: false
    });
});