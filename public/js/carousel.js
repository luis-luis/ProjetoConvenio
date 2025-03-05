document.addEventListener('DOMContentLoaded', function () {
    // Plans carousel
    new Splide('.carousel-planos', {
        type: 'loop',
        perPage: 3,
        perMove: 1,
        gap: '2rem',
        autoplay: true,
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

    // If you need the second carousel
    new Splide('.carousel-planos-2', {
        type: 'loop',
        perPage: 3,
        perMove: 1,
        gap: '2rem',
        autoplay: true,
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
    autoplay: true,
    interval: 8000,
    speed: 500
}).mount();