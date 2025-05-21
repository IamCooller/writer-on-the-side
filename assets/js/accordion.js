document.addEventListener("DOMContentLoaded", () => {
    const accordions = document.querySelectorAll('.course-accordion');
    
    accordions.forEach(accordion => {
        const header = accordion.querySelector('.course-accordion-header');
        
        header.addEventListener('click', () => {
            // Toggle the active class on the accordion
            accordion.classList.toggle('active');
            
            // If this accordion is now active, close all others
            if (accordion.classList.contains('active')) {
                accordions.forEach(otherAccordion => {
                    if (otherAccordion !== accordion && otherAccordion.classList.contains('active')) {
                        otherAccordion.classList.remove('active');
                    }
                });
            }
        });
    });
}); 