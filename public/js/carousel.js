<<<<<<< Updated upstream
document.addEventListener('DOMContentLoaded', function() {
    // Testimonials carousel
=======
document.addEventListener('DOMContentLoaded', function () {
    new Splide('.pricing-carousel', {
        perPage: 3,
        gap: '2rem',
        breakpoints: {
            768: {
                perPage: 1,
            },
            992: {
                perPage: 2,
            }
        },
        pagination: true,
        arrows: true,
        type: 'loop',
        autoplay: true,
        interval: 4000,
    }).mount();
});

document.addEventListener('DOMContentLoaded', function () {
    // Initialize testimonials carousel
>>>>>>> Stashed changes
    new Splide('.carousel-testimony', {
        type: 'loop',
        perPage: 1,
        autoplay: true,
<<<<<<< Updated upstream
        interval: 3000,
        arrows: true,
        pagination: true
    }).mount();

    // Pricing carousel
=======
        interval: 3000
    }).mount();

    // Initialize pricing carousel
>>>>>>> Stashed changes
    new Splide('.pricing-carousel', {
        type: 'loop',
        perPage: 3,
        autoplay: true,
        interval: 4000,
<<<<<<< Updated upstream
        gap: '2rem',
        breakpoints: {
            992: {
                perPage: 2
            },
=======
        breakpoints: {
>>>>>>> Stashed changes
            768: {
                perPage: 1
            }
        }
    }).mount();
<<<<<<< Updated upstream
});
=======
});
>>>>>>> Stashed changes
