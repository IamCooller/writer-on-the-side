import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

// Регистрируем плагины GSAP
gsap.registerPlugin(ScrollTrigger);

// Инициализация анимаций
const initAnimations = () => {

	// Функция для обновления ScrollTrigger при изменении размеров окна
	window.addEventListener("resize", () => {
		ScrollTrigger.refresh();
	});
};

// Инициализируем анимации после загрузки DOM
document.addEventListener("DOMContentLoaded", initAnimations);

// Экспортируем функцию инициализации для возможного использования в других файлах
export default initAnimations;
