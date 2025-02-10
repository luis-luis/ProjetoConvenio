$(document).ready(function(){
    const owl = $('.owl-carousel');
    $(".carousel-planos").owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        dots: true,
        autoplay: true,
        autoplayTimeout: 20000, //20 segundos (tempo em ms)
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

    // Quando o usuário desliza, reinicia o autoplay
    $(".owl-carousel").on("translated.owl.carousel", function () {
        owl.trigger("stop.owl.autoplay");
        setTimeout(() => owl.trigger("play.owl.autoplay", [20000]), 500);
    });

});
