/*iQC Theme Main JS * * @package IQC_Theme*/

document.addEventListener('DOMContentLoaded', function() {
    /*menu toggle logic*/

    const navToggle = document.querySelector('.iqc-nav__toggle');
    const navClose = document.querySelector('.iqc-nav__close');
    const navMenu = document.querySelector('.iqc-nav-mobile');
    
    if (navToggle && navMenu) {
        navToggle.addEventListener('click', function() {
            navMenu.classList.add('is-open');
        });
    }

    if (navClose && navMenu) {
        navClose.addEventListener('click', function() {
            navMenu.classList.remove('is-open');
        });
    }

    /*movil Accordion Logic*/

    const parentItems = document.querySelectorAll('.iqc-nav-mobile .menu-item-has-children');
    const iconDown = '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>';
    const iconUp = '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="18 15 12 9 6 15"></polyline></svg>';
    
    parentItems.forEach(function(item) {
        const link = item.querySelector('a');
        if (link) {
            const toggleBtn = document.createElement('button');
            toggleBtn.className = 'iqc-submenu-toggle';
            toggleBtn.innerHTML = iconDown;
            toggleBtn.setAttribute('aria-label', 'Alternar submenú');
            
            /*insert the toggle Boton next to the anchor tag*/

            item.insertBefore(toggleBtn, link.nextSibling);
            
            toggleBtn.addEventListener('click', function(e) {
                e.preventDefault();
                item.classList.toggle('is-expanded');
                this.innerHTML = item.classList.contains('is-expanded') ? iconUp : iconDown;
            });

            /*if the parent Enlace is just '#', clicking it should also toggle the Menu*/

            if (link.getAttribute('href') === '#') {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    toggleBtn.click();
                });
            }
        }
    });

    /*testimonios Carrusel Logic*/

    const testimonialsGrid = document.querySelector('.iqc-testimonials__grid');
    const paginationContainer = document.querySelector('.iqc-testimonials__pagination');
    
    if (testimonialsGrid && paginationContainer) {
        const cards = Array.from(testimonialsGrid.querySelectorAll('.iqc-testimonial-card'));
        let autoPlayInterval;
        
        /*create dots*/

        cards.forEach((_, index) => {
            const dot = document.createElement('button');
            dot.className = 'iqc-testimonials__dot';
            dot.setAttribute('aria-label', `Ir al testimonio ${index + 1}`);
            if (index === 0) dot.classList.add('is-active');
            
            dot.addEventListener('click', () => {
                const scrollPos = cards[index].offsetLeft - testimonialsGrid.offsetLeft;
                testimonialsGrid.scrollTo({ left: scrollPos, behavior: 'smooth' });
                resetAutoPlay();
            });
            
            paginationContainer.appendChild(dot);
        });
        
        const dots = paginationContainer.querySelectorAll('.iqc-testimonials__dot');
        
        /*update Activo dot on Desplazamiento*/

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const index = cards.indexOf(entry.target);
                    if (index !== -1) {
                        dots.forEach(d => d.classList.remove('is-active'));
                        dots[index].classList.add('is-active');
                    }
                }
            });
        }, {
            root: testimonialsGrid,
            threshold: 0.6
        });
        
        cards.forEach(card => observer.observe(card));
        
        /*auto-play*/

        function startAutoPlay() {
            autoPlayInterval = setInterval(() => {
                const activeDot = paginationContainer.querySelector('.is-active');
                let nextIndex = Array.from(dots).indexOf(activeDot) + 1;
                if (nextIndex >= dots.length) nextIndex = 0;
                
                const scrollPos = cards[nextIndex].offsetLeft - testimonialsGrid.offsetLeft;
                testimonialsGrid.scrollTo({ left: scrollPos, behavior: 'smooth' });
            }, 4500);
        }
        
        function resetAutoPlay() {
            clearInterval(autoPlayInterval);
            startAutoPlay();
        }
        
        startAutoPlay();
        
        /*pause on Al pasar el raton or touch*/

        testimonialsGrid.addEventListener('mouseenter', () => clearInterval(autoPlayInterval));
        testimonialsGrid.addEventListener('mouseleave', startAutoPlay);
        testimonialsGrid.addEventListener('touchstart', () => clearInterval(autoPlayInterval), {passive: true});
        testimonialsGrid.addEventListener('touchend', startAutoPlay, {passive: true});
    }

    /*desplazamiento Animacions (Fade Up, Izquierda, Derecha)*/

    const animElements = document.querySelectorAll('.iqc-animate-fade-up, .iqc-animate-fade-left, .iqc-animate-fade-right');
    if (animElements.length > 0) {
        const animObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    /*opcional: dejar de observar una vez que ya se anim*/

                    /*observer.unobserve(entry.target);*/

                }
            });
        }, {
            root: null,
            threshold: 0.15, /*activar cuando el 15% del elemento sea Visible*/

            rootMargin: '0px 0px -50px 0px' /*activar un poco antes de que llegue al fondo*/

        });

        animElements.forEach(el => animObserver.observe(el));
    }
});
