$(document).ready(function () {
    const owl = $('.owl-carousel');
    $(".carousel-planos").owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        dots: true,
        autoplay: true,
        autoplayTimeout: 8000, //8 segundos (tempo em ms)
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            1024: {
                items: 3
            }
        }
    });

    $(".carousel-planos-2").owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        dots: true,
        autoplay: true,
        autoplayTimeout: 8000, //8 segundos (tempo em ms)
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            1024: {
                items: 3
            }
        }
    });

    // // Quando o usuário desliza, reinicia o autoplay
    // $(".owl-carousel").on("translated.owl.carousel", function () {
    //     owl.trigger("stop.owl.autoplay");
    //     setTimeout(() => owl.trigger("play.owl.autoplay", [20000]), 500);
    // });

    // Reset autoplay for first carousel only on user swipe
    $(".carousel-planos").on("drag.owl.carousel", function () {
        $(this).trigger("stop.owl.autoplay");
        setTimeout(() => $(this).trigger("play.owl.autoplay", [20000]), 500);
    });

    // Reset autoplay for second carousel only on user swipe
    $(".carousel-planos-2").on("drag.owl.carousel", function () {
        $(this).trigger("stop.owl.autoplay");
        setTimeout(() => $(this).trigger("play.owl.autoplay", [20000]), 500);
    });



});
