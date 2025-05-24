import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { TextPlugin } from "gsap/TextPlugin";

// Регистрируем плагины GSAP
gsap.registerPlugin(ScrollTrigger, TextPlugin);

// Инициализация анимаций
const initAnimations = () => {
	// Инициализация различных анимаций
	initMobileMenuAnimations();
	initHeroAnimations();
	initScrollAnimations();
	initTestimonialAnimations();
	initCounterAnimations();
	initParallaxAnimations();
	initInteractiveElements();
	initUniversalScrollAnimations();

	// Функция для обновления ScrollTrigger при изменении размеров окна
	window.addEventListener("resize", () => {
		ScrollTrigger.refresh();
	});
};

// Анимации героического раздела
const initHeroAnimations = () => {
	console.log("Initializing hero animations");
	
	// Анимация заголовка с типографическим эффектом
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
			scrollTrigger: {
				trigger: heroTitle,
				start: "top 80%",
				end: "bottom 20%",
				toggleActions: "play none none reverse"
			}
		});
	}

	// Анимация героического изображения
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
			scrollTrigger: {
				trigger: heroImage,
				start: "top 85%",
				end: "bottom 20%",
				toggleActions: "play none none reverse"
			}
		});
	}

	// Анимация текстовых блоков героя
	const heroTexts = document.querySelectorAll("section p");
	heroTexts.forEach((text, index) => {
		gsap.fromTo(text, {
			y: 50,
			opacity: 0
		}, {
			y: 0,
			opacity: 1,
			duration: 0.8,
			ease: "power2.out",
			scrollTrigger: {
				trigger: text,
				start: "top 85%",
				end: "bottom 20%",
				toggleActions: "play none none reverse",
				delay: index * 0.2
			}
		});
	});

	// Анимация кнопок
	const buttons = document.querySelectorAll(".btn-red");
	buttons.forEach((button, index) => {
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
			scrollTrigger: {
				trigger: button,
				start: "top 85%",
				end: "bottom 20%",
				toggleActions: "play none none reverse",
				delay: index * 0.1
			}
		});
	});

	// Анимация рейтинговых звезд
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
			scrollTrigger: {
				trigger: star,
				start: "top 85%",
				end: "bottom 20%",
				toggleActions: "play none none reverse",
				delay: index * 0.1
			}
		});
	});
};

// Анимации при скролле
const initScrollAnimations = () => {
	console.log("Initializing scroll animations");

	// Анимация заголовков разделов
	const sectionHeadings = document.querySelectorAll(".heading-primary");
	sectionHeadings.forEach(heading => {
		gsap.fromTo(heading, {
			y: 80,
			opacity: 0
		}, {
			y: 0,
			opacity: 1,
			duration: 1,
			ease: "power3.out",
			scrollTrigger: {
				trigger: heading,
				start: "top 80%",
				end: "bottom 20%",
				toggleActions: "play none none reverse"
			}
		});
	});

	// Анимация карточек причин (reason cards)
	const reasonCards = document.querySelectorAll(".reason-card-bg");
	reasonCards.forEach((card, index) => {
		gsap.fromTo(card, {
			y: 100,
			opacity: 0,
			scale: 0.8
		}, {
			y: 0,
			opacity: 1,
			scale: 1,
			duration: 0.8,
			ease: "power3.out",
			scrollTrigger: {
				trigger: card,
				start: "top 85%",
				delay: index * 0.2
			}
		});
	});

	// Анимация изображений книг
	const bookImages = document.querySelectorAll("img[alt*='Book']");
	bookImages.forEach((img, index) => {
		gsap.fromTo(img, {
			scale: 0.7,
			opacity: 0,
			rotation: -10
		}, {
			scale: 1,
			opacity: 1,
			rotation: 0,
			duration: 1,
			ease: "elastic.out(1, 0.5)",
			scrollTrigger: {
				trigger: img,
				start: "top 90%",
				delay: index * 0.1
			}
		});
	});

	// Анимация иконок
	const icons = document.querySelectorAll(".reason-icon-bg");
	icons.forEach((icon, index) => {
		gsap.fromTo(icon, {
			scale: 0,
			rotation: 180
		}, {
			scale: 1,
			rotation: 0,
			duration: 0.8,
			ease: "back.out(1.7)",
			scrollTrigger: {
				trigger: icon,
				start: "top 85%",
				delay: index * 0.1
			}
		});
	});

	// Анимация номерных иконок
	const numberIcons = document.querySelectorAll("img[alt*='#']");
	numberIcons.forEach((icon, index) => {
		gsap.fromTo(icon.parentElement, {
			scale: 0,
			y: 50
		}, {
			scale: 1,
			y: 0,
			duration: 0.8,
			ease: "bounce.out",
			scrollTrigger: {
				trigger: icon,
				start: "top 85%",
				delay: index * 0.2
			}
		});
	});

	// Анимация логотипов
	const logos = document.querySelectorAll("img[class*='h-[25px]'], img[class*='h-5']");
	logos.forEach((logo, index) => {
		gsap.fromTo(logo, {
			opacity: 0,
			y: 30
		}, {
			opacity: 1,
			y: 0,
			duration: 0.6,
			ease: "power2.out",
			scrollTrigger: {
				trigger: logo,
				start: "top 90%",
				delay: index * 0.05
			}
		});
	});

	// Анимация ценовой таблицы
	const pricingTable = document.querySelector(".pricing-table-wrapper");
	if (pricingTable) {
		const pricingCells = pricingTable.querySelectorAll("div");
		gsap.fromTo(pricingCells, {
			opacity: 0,
			scale: 0.9
		}, {
			opacity: 1,
			scale: 1,
			duration: 0.5,
			stagger: 0.05,
			ease: "power2.out",
			scrollTrigger: {
				trigger: pricingTable,
				start: "top 80%"
			}
		});
	}
};

// Анимации отзывов
const initTestimonialAnimations = () => {
	console.log("Initializing testimonial animations");

	const testimonialCards = document.querySelectorAll(".testimonial-card");
	testimonialCards.forEach((card, index) => {
		// Анимация появления карточки
		gsap.fromTo(card, {
			y: 100,
			opacity: 0,
			scale: 0.9
		}, {
			y: 0,
			opacity: 1,
			scale: 1,
			duration: 1,
			ease: "power3.out",
			scrollTrigger: {
				trigger: card,
				start: "top 85%",
				delay: index * 0.3
			}
		});

		// Анимация аватара
		const avatar = card.querySelector(".testimonial-avatar img");
		if (avatar) {
			gsap.fromTo(avatar, {
				scale: 0,
				rotation: -180
			}, {
				scale: 1,
				rotation: 0,
				duration: 0.8,
				ease: "back.out(1.7)",
				scrollTrigger: {
					trigger: card,
					start: "top 80%",
					delay: 0.5
				}
			});
		}

		// Анимация highlighted текста
		const highlights = card.querySelectorAll(".testimonial-highlight, span[style*='background']");
		highlights.forEach((highlight, i) => {
			gsap.fromTo(highlight, {
				backgroundColor: "transparent"
			}, {
				backgroundColor: "#FFF5A5",
				duration: 0.8,
				ease: "power2.out",
				scrollTrigger: {
					trigger: card,
					start: "top 70%",
					delay: 1 + (i * 0.3)
				}
			});
		});
	});
};

// Анимации счетчиков
const initCounterAnimations = () => {
	console.log("Initializing counter animations");

	// Анимация рейтинга 4.9/5.0
	const rating = document.querySelector("div:contains('4.9/5.0')");
	if (rating) {
		gsap.fromTo({ value: 0 }, {
			value: 4.9,
			duration: 2,
			ease: "power2.out",
			onUpdate: function() {
				if (rating.textContent) {
					rating.textContent = this.targets()[0].value.toFixed(1) + "/5.0";
				}
			},
			scrollTrigger: {
				trigger: rating,
				start: "top 80%"
			}
		});
	}

	// Анимация количества студентов
	const studentsText = document.querySelector("p:contains('Happy Students')");
	if (studentsText) {
		gsap.fromTo({ value: 0 }, {
			value: 750,
			duration: 2.5,
			ease: "power2.out",
			onUpdate: function() {
				const currentValue = Math.floor(this.targets()[0].value);
				studentsText.innerHTML = studentsText.innerHTML.replace(/\d+/, currentValue + "+");
			},
			scrollTrigger: {
				trigger: studentsText,
				start: "top 80%"
			}
		});
	}
};

// Параллакс эффекты
const initParallaxAnimations = () => {
	console.log("Initializing parallax animations");

	// Параллакс для фоновых изображений
	const backgroundImages = document.querySelectorAll("img[class*='absolute'][class*='opacity-10']");
	backgroundImages.forEach(img => {
		gsap.to(img, {
			yPercent: -30,
			ease: "none",
			scrollTrigger: {
				trigger: img.parentElement,
				start: "top bottom",
				end: "bottom top",
				scrub: true
			}
		});
	});

	// Параллакс для декоративных элементов
	const decorativeElements = document.querySelectorAll("img[alt*='arrow'], img[alt*='Arrow']");
	decorativeElements.forEach((element, index) => {
		gsap.to(element, {
			y: index % 2 === 0 ? -20 : 20,
			rotation: index % 2 === 0 ? 5 : -5,
			ease: "none",
			scrollTrigger: {
				trigger: element,
				start: "top bottom",
				end: "bottom top",
				scrub: 1
			}
		});
	});
};

// Интерактивные элементы
const initInteractiveElements = () => {
	console.log("Initializing interactive elements");

	// Ховер эффекты для кнопок
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

	// Ховер эффекты для карточек
	const cards = document.querySelectorAll(".testimonial-card, .reason-card-bg");
	cards.forEach(card => {
		card.addEventListener("mouseenter", () => {
			gsap.to(card, {
				scale: 1.02,
				y: -5,
				duration: 0.4,
				ease: "power2.out"
			});
		});

		card.addEventListener("mouseleave", () => {
			gsap.to(card, {
				scale: 1,
				y: 0,
				duration: 0.4,
				ease: "power2.out"
			});
		});
	});

	// Ховер эффекты для иконок
	const icons = document.querySelectorAll(".reason-icon-bg");
	icons.forEach(icon => {
		icon.addEventListener("mouseenter", () => {
			gsap.to(icon, {
				rotation: 10,
				scale: 1.1,
				duration: 0.3,
				ease: "power2.out"
			});
		});

		icon.addEventListener("mouseleave", () => {
			gsap.to(icon, {
				rotation: 0,
				scale: 1,
				duration: 0.3,
				ease: "power2.out"
			});
		});
	});

	// Исключаем аккордеоны из GSAP анимации - используем CSS анимацию
	// Анимация при клике на аккордеон убрана для предотвращения конфликтов
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

// Универсальная функция для scroll-анимаций
const initUniversalScrollAnimations = () => {
	// Анимация для всех элементов с data-animate атрибутом
	const animatedElements = document.querySelectorAll('[data-animate]');
	
	animatedElements.forEach((element, index) => {
		const animationType = element.getAttribute('data-animate');
		const delay = element.getAttribute('data-delay') || 0;
		
		let fromVars = {};
		let toVars = {
			duration: 1,
			ease: "power3.out",
			scrollTrigger: {
				trigger: element,
				start: "top 85%",
				end: "bottom 20%",
				toggleActions: "play none none reverse"
			}
		};
		
		switch(animationType) {
			case 'fadeInUp':
				fromVars = { y: 50, opacity: 0 };
				toVars = { ...toVars, y: 0, opacity: 1 };
				break;
			case 'fadeInDown':
				fromVars = { y: -50, opacity: 0 };
				toVars = { ...toVars, y: 0, opacity: 1 };
				break;
			case 'fadeInLeft':
				fromVars = { x: -50, opacity: 0 };
				toVars = { ...toVars, x: 0, opacity: 1 };
				break;
			case 'fadeInRight':
				fromVars = { x: 50, opacity: 0 };
				toVars = { ...toVars, x: 0, opacity: 1 };
				break;
			case 'scaleIn':
				fromVars = { scale: 0.8, opacity: 0 };
				toVars = { ...toVars, scale: 1, opacity: 1 };
				break;
			case 'rotateIn':
				fromVars = { rotation: -180, scale: 0, opacity: 0 };
				toVars = { ...toVars, rotation: 0, scale: 1, opacity: 1, ease: "back.out(1.7)" };
				break;
		}
		
		if (delay > 0) {
			toVars.scrollTrigger.delay = parseFloat(delay);
		}
		
		gsap.fromTo(element, fromVars, toVars);
	});
	
	// Автоматическая анимация для секций
	const sections = document.querySelectorAll('section:not([data-no-animate])');
	sections.forEach((section, index) => {
		// Анимация заголовков в секции
		const headings = section.querySelectorAll('h1, h2, h3, .heading-primary');
		headings.forEach((heading, i) => {
			if (!heading.hasAttribute('data-animate')) {
				gsap.fromTo(heading, {
					y: 50,
					opacity: 0
				}, {
					y: 0,
					opacity: 1,
					duration: 1,
					ease: "power3.out",
					scrollTrigger: {
						trigger: heading,
						start: "top 85%",
						end: "bottom 20%",
						toggleActions: "play none none reverse",
						delay: i * 0.2
					}
				});
			}
		});
		
		// Анимация изображений в секции
		const images = section.querySelectorAll('img:not([data-no-animate])');
		images.forEach((img, i) => {
			if (!img.hasAttribute('data-animate')) {
				gsap.fromTo(img, {
					scale: 0.8,
					opacity: 0
				}, {
					scale: 1,
					opacity: 1,
					duration: 0.8,
					ease: "power2.out",
					scrollTrigger: {
						trigger: img,
						start: "top 90%",
						end: "bottom 20%",
						toggleActions: "play none none reverse",
						delay: i * 0.1
					}
				});
			}
		});
		
		// Анимация параграфов в секции
		const paragraphs = section.querySelectorAll('p:not([data-no-animate])');
		paragraphs.forEach((p, i) => {
			if (!p.hasAttribute('data-animate')) {
				gsap.fromTo(p, {
					y: 30,
					opacity: 0
				}, {
					y: 0,
					opacity: 1,
					duration: 0.6,
					ease: "power2.out",
					scrollTrigger: {
						trigger: p,
						start: "top 85%",
						end: "bottom 20%",
						toggleActions: "play none none reverse",
						delay: i * 0.1
					}
				});
			}
		});
	});
};

// Инициализируем анимации после загрузки DOM
document.addEventListener("DOMContentLoaded", initAnimations);

// Экспортируем функцию инициализации для возможного использования в других файлах
export default initAnimations;
