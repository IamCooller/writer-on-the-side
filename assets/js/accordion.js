document.addEventListener("DOMContentLoaded", () => {
    const accordions = document.querySelectorAll('.course-accordion');
    
    accordions.forEach(accordion => {
        const header = accordion.querySelector('.course-accordion-header');
        const content = accordion.querySelector('.course-accordion-content');
        const icon = header.querySelector('.course-accordion-icon');
        
        // Устанавливаем начальное состояние для закрытых аккордеонов
        if (!accordion.classList.contains('active')) {
            content.style.maxHeight = '0';
            content.style.overflow = 'hidden';
        }
        
        header.addEventListener('click', () => {
            const isActive = accordion.classList.contains('active');
            
            // Закрываем все другие аккордеоны
            accordions.forEach(otherAccordion => {
                if (otherAccordion !== accordion && otherAccordion.classList.contains('active')) {
                    const otherContent = otherAccordion.querySelector('.course-accordion-content');
                    const otherIcon = otherAccordion.querySelector('.course-accordion-icon');
                    
                    otherAccordion.classList.remove('active');
                    otherContent.style.maxHeight = '0';
                    otherIcon.style.transform = 'rotate(0deg)';
                }
            });
            
            // Переключаем текущий аккордеон
            if (!isActive) {
                // Открываем аккордеон
                accordion.classList.add('active');
                content.style.maxHeight = content.scrollHeight + 'px';
                icon.style.transform = 'rotate(180deg)';
            } else {
                // Закрываем аккордеон
                accordion.classList.remove('active');
                content.style.maxHeight = '0';
                icon.style.transform = 'rotate(0deg)';
            }
        });
    });
}); 