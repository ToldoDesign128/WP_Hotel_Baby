// My script


    // Open Panel

    jQuery('.hamburger').on('click', function() {
        jQuery(".menu").toggleClass("menu--open");
    });

    jQuery('.menu__list__item').on('click', function() {
        jQuery(".menu").removeClass("menu--open");
        jQuery(".hamburger").removeClass("is-active");
    });

    var jQueryhamburger = jQuery(".hamburger");
    jQueryhamburger.on("click", function(e) {
        jQueryhamburger.toggleClass("is-active");
    // Do something else, like open/close menu
    });




//Slick carousel
        
jQuery(".slider").slick({
    centerMode: true,
    slidesToShow: 3,
    responsive: [
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
});

jQuery(".gallery__slider").slick({
    centerMode: true,
    slidesToShow: 3,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
        {
            breakpoint: 960,
            settings: {
                slidesToShow: 1,
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
});
