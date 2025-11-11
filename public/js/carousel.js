document.addEventListener('DOMContentLoaded', function () {
    // Plans carousel
    new Splide('.carousel-planos', {
        type: 'loop',
        perPage: 3,
        perMove: 1,
        gap: '2rem',
        autoplay: false,
        interval: 8000,
        speed: 500,
        drag: false,
        pagination: true,
        arrows: false, // padrão: sem setas no desktop
        breakpoints: {
            1024: {
                perPage: 3,
                arrows: false,
                drag: true,
            },
            768: {
                perPage: 2,
                arrows: true, // 👈 ativa no celular
                drag: true,
            },
            640: {
                perPage: 1,
                arrows: true, // 👈 idem
                drag: true,
            },
        },
    }).mount();


    // If you need the second carousel
    new Splide('.carousel-planos-2', {
        type: 'loop',
        perPage: 3,
        perMove: 1,
        gap: '2rem',
        autoplay: false,
        interval: 8000,
        speed: 500,
        drag: true,
        pagination: true,
        arrows: true,
        breakpoints: {
            1024: {
                perPage: 3,
            },
            768: {
                perPage: 2,
            },
            640: {
                perPage: 1,
            }
        }
    }).mount();
});

new Splide('.carousel-testimony', {
    type: 'loop',
    perPage: 1,
    autoplay: false,
    interval: 8000,
    speed: 500
}).mount();