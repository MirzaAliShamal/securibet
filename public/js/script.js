$(document).ready(function () {
    // Reviews Slider
    if ($(".reviews-section").length > 0) {
        $(".review-slider").slick({
            dots: true,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 3000,
            slidesToShow: 3,
            slidesToScroll: 1,
            speed: 300,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                    }
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        arrows: false,
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false,
                    }
                }
            ]
        });
    }
});
