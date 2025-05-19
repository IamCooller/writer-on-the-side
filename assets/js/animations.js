import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

// Регистрируем плагины GSAP
gsap.registerPlugin(ScrollTrigger);

// Инициализация анимаций
const initAnimations = () => {
	// Инициализация анимаций для мобильного меню
	initMobileMenuAnimations();

	// Функция для обновления ScrollTrigger при изменении размеров окна
	window.addEventListener("resize", () => {
		ScrollTrigger.refresh();
	});
};

// Функция анимации мобильного меню
const initMobileMenuAnimations = () => {
	const mobileMenu = document.querySelector(".mobile-menu");
	const menuItems = document.querySelectorAll(".mobile-menu__nav a");
	const menuContent = document.querySelector(".mobile-menu .container");
	
	if (!mobileMenu || !menuContent) {
		console.warn("Mobile menu elements not found, skipping animations");
		return;
	}
	
	console.log("Mobile menu animations initialized");
	
	// Настраиваем начальное положение меню (за пределами экрана)
	gsap.set(mobileMenu, { 
		xPercent: 100,
		opacity: 0
	});
	
	// Создаем временные линии для открытия и закрытия меню
	const openTimeline = gsap.timeline({ paused: true });
	const closeTimeline = gsap.timeline({ paused: true });
	
	// Анимация открытия
	openTimeline
		.to(mobileMenu, {
			xPercent: 0,
			opacity: 1,
			duration: 0.5,
			ease: "power3.out"
		})
		.from(menuItems, {
			y: 30,
			opacity: 0,
			stagger: 0.1,
			duration: 0.4,
			ease: "power3.out"
		}, "-=0.2");
	
	// Анимация закрытия
	closeTimeline
		.to(mobileMenu, {
			xPercent: 100,
			opacity: 0,
			duration: 0.5,
			ease: "power3.in",
			onComplete: () => {
				mobileMenu.classList.add("invisible");
				mobileMenu.style.pointerEvents = "none";
			}
		});
	
	// Слушаем пользовательские события для запуска анимаций
	document.addEventListener("menuOpened", () => {
		closeTimeline.pause(0);
		openTimeline.restart();
		console.log("GSAP opening animation started");
	});
	
	document.addEventListener("menuClosed", () => {
		openTimeline.pause();
		closeTimeline.restart();
		console.log("GSAP closing animation started");
	});
};

// Инициализируем анимации после загрузки DOM
document.addEventListener("DOMContentLoaded", initAnimations);

// Экспортируем функцию инициализации для возможного использования в других файлах
export default initAnimations;
