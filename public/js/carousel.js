document.addEventListener('DOMContentLoaded', function() {
    // Testimonials carousel
    new Splide('.carousel-testimony', {
        type: 'loop',
        perPage: 1,
        autoplay: true,
        interval: 3000,
        arrows: true,
        pagination: true
    }).mount();

    // Pricing carousel
    new Splide('.pricing-carousel', {
        type: 'loop',
        perPage: 3,
        autoplay: true,
        interval: 4000,
        gap: '2rem',
        breakpoints: {
            992: {
                perPage: 2
            },
            768: {
                perPage: 1
            }
        }
    }).mount();
});
