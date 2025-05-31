import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { TextPlugin } from "gsap/TextPlugin";

// Регистрируем плагины GSAP
gsap.registerPlugin(ScrollTrigger, TextPlugin);

// Инициализация анимаций
const initAnimations = () => {
	// Инициализация только героических анимаций и мобильного меню
	initMobileMenuAnimations();
	initHeroAnimations();
	initInteractiveElements();

	// Функция для обновления ScrollTrigger при изменении размеров окна
	window.addEventListener("resize", () => {
		ScrollTrigger.refresh();
	});
};

// Анимации героического раздела
const initHeroAnimations = () => {
	console.log("Initializing hero animations");
	
	// Анимация заголовка с типографическим эффектом - запускается сразу
	const heroTitle = document.querySelector("h1");
	if (heroTitle) {
		gsap.fromTo(heroTitle, {
			y: 100,
			opacity: 0,
			scale: 0.8
		}, {
			y: 0,
			opacity: 1,
			scale: 1,
			duration: 1.2,
			ease: "power3.out",
			delay: 0.2
		});
	}

	// Анимация героического изображения - запускается сразу
	const heroImage = document.querySelector("section img[alt='Hero image']");
	if (heroImage) {
		gsap.fromTo(heroImage, {
			x: 100,
			opacity: 0,
			scale: 0.9
		}, {
			x: 0,
			opacity: 1,
			scale: 1,
			duration: 1.5,
			ease: "power3.out",
			delay: 0.4
		});
	}

	// Анимация текстовых блоков героя - запускается сразу (только в первой секции)
	const heroSection = document.querySelector("section");
	const heroTexts = heroSection ? heroSection.querySelectorAll("p") : [];
	heroTexts.forEach((text, index) => {
		gsap.fromTo(text, {
			y: 50,
			opacity: 0
		}, {
			y: 0,
			opacity: 1,
			duration: 0.8,
			ease: "power2.out",
			delay: 0.6 + (index * 0.2)
		});
	});

	// Анимация кнопок - запускается сразу (только в героическом разделе)
	const heroButtons = heroSection ? heroSection.querySelectorAll(".btn-red") : [];
	heroButtons.forEach((button, index) => {
		gsap.fromTo(button, {
			y: 30,
			opacity: 0,
			scale: 0.9
		}, {
			y: 0,
			opacity: 1,
			scale: 1,
			duration: 0.6,
			ease: "back.out(1.7)",
			delay: 0.8 + (index * 0.1)
		});
	});

	// Анимация рейтинговых звезд - запускается сразу
	const stars = document.querySelectorAll("img[alt='Hero image'][src*='star.svg']");
	stars.forEach((star, index) => {
		gsap.fromTo(star, {
			scale: 0,
			rotation: -180
		}, {
			scale: 1,
			rotation: 0,
			duration: 0.5,
			ease: "back.out(1.7)",
			delay: 1.0 + (index * 0.1)
		});
	});

	// Анимация логотипов "AS SEEN ON" - запускается сразу
	const heroLogos = document.querySelectorAll("img[class*='h-[25px]'], img[class*='h-5']");
	heroLogos.forEach((logo, index) => {
		gsap.fromTo(logo, {
			opacity: 0,
			y: 30
		}, {
			opacity: 1,
			y: 0,
			duration: 0.6,
			ease: "power2.out",
			delay: 1.2 + (index * 0.05)
		});
	});

	// Анимация рейтинга и аватаров - запускается сразу
	const ratingBlock = document.querySelector(".bg-\\[\\#EDEDED\\]");
	if (ratingBlock) {
		gsap.fromTo(ratingBlock, {
			scale: 0.8,
			opacity: 0
		}, {
			scale: 1,
			opacity: 1,
			duration: 0.8,
			ease: "power2.out",
			delay: 1.0
		});
	}
};

// Интерактивные элементы (только ховер эффекты)
const initInteractiveElements = () => {
	console.log("Initializing interactive elements");

	// Ховер эффекты для кнопок (оставляем по просьбе клиента)
	const buttons = document.querySelectorAll(".btn-red");
	buttons.forEach(button => {
		button.addEventListener("mouseenter", () => {
			gsap.to(button, {
				scale: 1.05,
				y: -2,
				duration: 0.3,
				ease: "power2.out"
			});
		});

		button.addEventListener("mouseleave", () => {
			gsap.to(button, {
				scale: 1,
				y: 0,
				duration: 0.3,
				ease: "power2.out"
			});
		});
	});
};

// Функция анимации мобильного меню (обновленная)
const initMobileMenuAnimations = () => {
	const mobileMenu = document.querySelector(".mobile-menu");
	const menuItems = document.querySelectorAll(".mobile-menu__nav a");
	const menuContent = document.querySelector(".mobile-menu .container");
	
	if (!mobileMenu || !menuContent) {
		console.warn("Mobile menu elements not found, skipping animations");
		return;
	}
	
	console.log("Mobile menu animations initialized");
	
	// Настраиваем начальное положение меню
	gsap.set(mobileMenu, { 
		xPercent: 100,
		opacity: 0
	});
	
	// Создаем временные линии для открытия и закрытия меню
	const openTimeline = gsap.timeline({ paused: true });
	const closeTimeline = gsap.timeline({ paused: true });
	
	// Анимация открытия с более сложными эффектами
	openTimeline
		.to(mobileMenu, {
			xPercent: 0,
			opacity: 1,
			duration: 0.6,
			ease: "power3.out"
		})
		.from(menuItems, {
			x: 50,
			y: 30,
			opacity: 0,
			stagger: 0.1,
			duration: 0.5,
			ease: "back.out(1.7)"
		}, "-=0.3");
	
	// Анимация закрытия
	closeTimeline
		.to(menuItems, {
			x: 50,
			opacity: 0,
			stagger: 0.05,
			duration: 0.3,
			ease: "power2.in"
		})
		.to(mobileMenu, {
			xPercent: 100,
			opacity: 0,
			duration: 0.4,
			ease: "power3.in",
			onComplete: () => {
				mobileMenu.classList.add("invisible");
				mobileMenu.style.pointerEvents = "none";
			}
		}, "-=0.1");
	
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
