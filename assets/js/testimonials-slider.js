import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';
import 'swiper/css';


document.addEventListener("DOMContentLoaded", () => {
    const testimonialsSlider = new Swiper('.testimonials-slider', {
        modules: [Navigation, Pagination],
        slidesPerView: 1.5,
        spaceBetween: 30,
        loop: true,
       autoHeight: true,
        
        navigation: {
            nextEl: '.testimonials-slider-next',
            prevEl: '.testimonials-slider-prev',
        },
        pagination: {
            el: '.testimonials-slider-pagination',
            clickable: true,
        },
       
    });
}); 