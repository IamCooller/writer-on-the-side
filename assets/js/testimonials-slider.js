import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';
import 'swiper/css';

document.addEventListener("DOMContentLoaded", () => {
    // Initialize the testimonials slider
    const testimonialsSlider = new Swiper('.testimonials-slider', {
        modules: [Navigation, Pagination],
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoHeight: true,
        speed: 600,
        
        navigation: {
            nextEl: '.testimonials-slider-next, .swiper-next',
            prevEl: '.testimonials-slider-prev, .swiper-prev',
        },
        pagination: {
            el: '.testimonials-slider-pagination',
            clickable: true,
        }
    });
    
    // Initialize the people slider
    const peopleSlider = new Swiper('.people-slider', {
        modules: [Navigation, Pagination],
        slidesPerView: 3, // Default for mobile
        spaceBetween: 20,
        loop: true,
        speed: 600,
        
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
        }
    });
}); 