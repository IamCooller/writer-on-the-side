// Mobile Menu Functionality
document.addEventListener("DOMContentLoaded", () => {
	const menuOpenBtn = document.querySelector(".header-mobile__menu-open");
	const menuCloseBtn = document.querySelector(".mobile-menu__close");
	const mobileMenu = document.querySelector(".mobile-menu");
	const body = document.body;

	// Debug - check if elements exist
	console.log("Menu button:", menuOpenBtn);
	console.log("Close button:", menuCloseBtn);
	console.log("Mobile menu:", mobileMenu);

	// Check if mobile menu elements exist
	if (!menuOpenBtn || !menuCloseBtn || !mobileMenu) {
		console.error("Mobile menu elements missing!");
		return;
	}

	// Open menu - delegate animation control completely to GSAP
	menuOpenBtn.addEventListener("click", () => {
		mobileMenu.classList.add("active");
		mobileMenu.classList.remove("invisible");
		mobileMenu.style.pointerEvents = "auto";
		body.style.overflow = "hidden"; // Prevent scrolling when menu is open
		
		// Dispatch a custom event to trigger GSAP animation
		const event = new CustomEvent('menuOpened');
		document.dispatchEvent(event);
		
		console.log("Menu opened", mobileMenu);
	});

	// Close menu
	menuCloseBtn.addEventListener("click", () => {
		closeMenu();
	});

	// Close menu when clicking on menu links
	const menuLinks = document.querySelectorAll(".mobile-menu__nav a");
	menuLinks.forEach((link) => {
		link.addEventListener("click", () => {
			closeMenu();
		});
	});

	// Helper function to close the menu
	function closeMenu() {
		// Dispatch a custom event to trigger GSAP animation for closing
		const event = new CustomEvent('menuClosed');
		document.dispatchEvent(event);
		
		// Let GSAP handle hiding, we just remove the active state and restore scrolling
		mobileMenu.classList.remove("active");
		body.style.overflow = ""; // Restore scrolling
		console.log("Menu closed");
	}
});
