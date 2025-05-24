# Scroll-Based Animations Guide

## Как использовать scroll-анимации

### Автоматические анимации
Все секции теперь автоматически анимируются при скролле:
- Заголовки (h1, h2, h3, .heading-primary) - появляются снизу
- Изображения - масштабируются и появляются
- Параграфы - появляются снизу с задержкой

### Кастомные анимации
Добавьте атрибут `data-animate` к любому элементу:

```html
<!-- Появление снизу -->
<div data-animate="fadeInUp">Содержимое</div>

<!-- Появление сверху -->
<div data-animate="fadeInDown">Содержимое</div>

<!-- Появление слева -->
<div data-animate="fadeInLeft">Содержимое</div>

<!-- Появление справа -->
<div data-animate="fadeInRight">Содержимое</div>

<!-- Масштабирование -->
<div data-animate="scaleIn">Содержимое</div>

<!-- Вращение -->
<div data-animate="rotateIn">Содержимое</div>

<!-- С задержкой -->
<div data-animate="fadeInUp" data-delay="0.5">Содержимое</div>
```

### Отключение анимаций
Чтобы отключить автоматические анимации:

```html
<!-- Для секции -->
<section data-no-animate>...</section>

<!-- Для отдельного элемента -->
<img data-no-animate src="..." />
<p data-no-animate>Текст без анимации</p>
```

### Настройки ScrollTrigger
- Анимации запускаются когда элемент на 85% виден в viewport
- Анимации воспроизводятся в обратном порядке при скролле назад
- Используется `toggleActions: "play none none reverse"`

### Производительность
- Все анимации используют GPU acceleration
- Поддерживается `prefers-reduced-motion`
- ScrollTrigger автоматически обновляется при изменении размера окна 