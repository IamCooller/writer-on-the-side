import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';
import 'swiper/css';


document.addEventListener("DOMContentLoaded", () => {
    // Initialize the testimonials slider with both new and old class names for backward compatibility
    const testimonialsSlider = new Swiper('.testimonials-slider', {
        modules: [Navigation, Pagination],
        slidesPerView: 1.5,
        spaceBetween: 30,
        loop: true,
        autoHeight: true,
        
        navigation: {
            nextEl: '.testimonials-slider-next, .swiper-next',
            prevEl: '.testimonials-slider-prev, .swiper-prev',
        },
        pagination: {
            el: '.testimonials-slider-pagination, .swiper-pagination',
            clickable: true,
        },
    });
    
    // Initialize the people slider
    const peopleSlider = new Swiper('.people-slider', {
        modules: [Navigation, Pagination],
        slidesPerView: 3, // Default for mobile
        spaceBetween: 20,
        loop: true,
        
        breakpoints: {
            // When window width is >= 768px
            768: {
                slidesPerView: 5,
                spaceBetween: 30,
            },
        },
        
        navigation: {
            nextEl: '.people-slider-container .swiper-next',
            prevEl: '.people-slider-container .swiper-prev',
        },
        pagination: {
            el: '.people-slider-container .swiper-pagination',
            clickable: true,
        },
    });
}); 