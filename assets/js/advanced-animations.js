import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { MorphSVGPlugin } from "gsap/MorphSVGPlugin";

gsap.registerPlugin(ScrollTrigger, MorphSVGPlugin);




// Анимированный фон с частицами
const createParticleBackground = () => {
    const sections = document.querySelectorAll('section[class*="bg-[#20201D]"]');
    
    sections.forEach(section => {
        const particleContainer = document.createElement('div');
        particleContainer.classList.add('particle-container');
        section.style.position = 'relative';
        section.appendChild(particleContainer);

        // Создаем частицы
        for (let i = 0; i < 30; i++) {
            const particle = document.createElement('div');
            particle.classList.add('particle');
            particleContainer.appendChild(particle);

            // Случайное позиционирование
            gsap.set(particle, {
                x: Math.random() * section.offsetWidth,
                y: Math.random() * section.offsetHeight,
                scale: Math.random() * 0.5 + 0.5,
                opacity: Math.random() * 0.3 + 0.1
            });

            // Анимация движения
            gsap.to(particle, {
                y: "-=100",
                duration: Math.random() * 10 + 10,
                repeat: -1,
                ease: "none",
                delay: Math.random() * 2
            });

            gsap.to(particle, {
                x: "+=50",
                duration: Math.random() * 5 + 5,
                repeat: -1,
                yoyo: true,
                ease: "sine.inOut",
                delay: Math.random() * 2
            });
        }
    });

    // Стили для частиц
    const particleStyles = `
        .particle-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            overflow: hidden;
        }
        
        .particle {
            position: absolute;
            width: 3px;
            height: 3px;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 50%;
        }
    `;

    const style = document.createElement('style');
    style.textContent = particleStyles;
    document.head.appendChild(style);
};

// Магнитный эффект для кнопок
const createMagneticButtons = () => {
    const buttons = document.querySelectorAll('.btn-red');
    
    buttons.forEach(button => {
        button.addEventListener('mousemove', (e) => {
            const rect = button.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;
            
            gsap.to(button, {
                x: x * 0.3,
                y: y * 0.3,
                duration: 0.3,
                ease: "power2.out"
            });
        });
        
        button.addEventListener('mouseleave', () => {
            gsap.to(button, {
                x: 0,
                y: 0,
                duration: 0.5,
                ease: "elastic.out(1, 0.3)"
            });
        });
    });
};


// Продвинутые анимации прокрутки
const createAdvancedScrollAnimations = () => {
    // Анимация разделительных линий
    const sectionDividers = document.querySelectorAll('.section-divider svg path, [class*="section-divider"] svg path');
    sectionDividers.forEach(path => {
        gsap.fromTo(path, {
            drawSVG: "0%"
        }, {
            drawSVG: "100%",
            duration: 1.5,
            ease: "power2.inOut",
            scrollTrigger: {
                trigger: path.closest('div'),
                start: "top 80%",
                end: "bottom 20%"
            }
        });
    });

    // Анимация появления секций с эффектом "занавеса"
    const sections = document.querySelectorAll('section');
    sections.forEach((section, index) => {
        const overlay = document.createElement('div');
        overlay.style.cssText = `
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(-101deg, #D11217 27%, #A2090D 100%);
            z-index: 1;
        `;
        
        section.style.position = 'relative';
        section.style.overflow = 'hidden';
        section.appendChild(overlay);
        
        ScrollTrigger.create({
            trigger: section,
            start: "top 80%",
            onEnter: () => {
                gsap.to(overlay, {
                    x: "100%",
                    duration: 1.2,
                    ease: "power3.inOut",
                    onComplete: () => overlay.remove()
                });
            }
        });
    });
};

// Анимация счетчика лайков/звезд
const createStarAnimation = () => {
    const stars = document.querySelectorAll('img[src*="star.svg"]');
    
    stars.forEach((star, index) => {
        star.addEventListener('mouseenter', () => {
            gsap.to(star, {
                rotation: 360,
                scale: 1.2,
                duration: 0.5,
                ease: "back.out(1.7)"
            });
        });
        
        star.addEventListener('mouseleave', () => {
            gsap.to(star, {
                rotation: 0,
                scale: 1,
                duration: 0.3,
                ease: "power2.out"
            });
        });
    });
};

// Инициализация всех продвинутых анимаций
const initAdvancedAnimations = () => {
    createParticleBackground();
    createMagneticButtons();
    createAdvancedScrollAnimations();
    createStarAnimation();
    
    console.log("Advanced GSAP animations initialized");
};

// Инициализация после загрузки DOM
document.addEventListener("DOMContentLoaded", initAdvancedAnimations);

export default initAdvancedAnimations; 