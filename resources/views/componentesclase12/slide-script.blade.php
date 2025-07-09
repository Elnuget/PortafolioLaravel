// Funcionalidad de navegación tipo PowerPoint para la presentación
document.addEventListener('DOMContentLoaded', function() {
    // Elementos DOM
    const slides = document.querySelectorAll('.slide');
    const prevButton = document.getElementById('prevSlide');
    const nextButton = document.getElementById('nextSlide');
    const currentSlideElement = document.getElementById('currentSlide');
    const totalSlidesElement = document.getElementById('totalSlides');
    
    // Variables para el control de las diapositivas
    let currentSlideIndex = 0;
    const totalSlides = slides.length;
    
    // Inicializar el indicador de diapositivas
    totalSlidesElement.textContent = totalSlides;
    updateSlideIndicator();
    
    // Mostrar la primera diapositiva y ocultar las demás
    function initSlides() {
        slides.forEach((slide, index) => {
            if (index === 0) {
                slide.classList.add('active');
            } else {
                slide.classList.remove('active');
            }
        });
    }
    
    // Actualizar el indicador de diapositivas actual
    function updateSlideIndicator() {
        currentSlideElement.textContent = currentSlideIndex + 1;
    }
    
    // Navegar a la diapositiva anterior
    function goToPrevSlide() {
        slides[currentSlideIndex].classList.remove('active');
        slides[currentSlideIndex].classList.add('slide-exit-right');
        
        setTimeout(() => {
            slides[currentSlideIndex].classList.remove('slide-exit-right');
            currentSlideIndex = (currentSlideIndex - 1 + totalSlides) % totalSlides;
            slides[currentSlideIndex].classList.add('slide-enter-left');
            slides[currentSlideIndex].classList.add('active');
            
            setTimeout(() => {
                slides[currentSlideIndex].classList.remove('slide-enter-left');
                updateSlideIndicator();
            }, 300);
        }, 300);
    }
    
    // Navegar a la siguiente diapositiva
    function goToNextSlide() {
        slides[currentSlideIndex].classList.remove('active');
        slides[currentSlideIndex].classList.add('slide-exit-left');
        
        setTimeout(() => {
            slides[currentSlideIndex].classList.remove('slide-exit-left');
            currentSlideIndex = (currentSlideIndex + 1) % totalSlides;
            slides[currentSlideIndex].classList.add('slide-enter-right');
            slides[currentSlideIndex].classList.add('active');
            
            setTimeout(() => {
                slides[currentSlideIndex].classList.remove('slide-enter-right');
                updateSlideIndicator();
            }, 300);
        }, 300);
    }
    
    // Event listeners para los botones de navegación
    prevButton.addEventListener('click', goToPrevSlide);
    nextButton.addEventListener('click', goToNextSlide);
    
    // Soporte para navegación con teclado (flechas izquierda/derecha)
    document.addEventListener('keydown', function(e) {
        if (e.key === 'ArrowLeft') {
            goToPrevSlide();
        } else if (e.key === 'ArrowRight') {
            goToNextSlide();
        }
    });
    
    // Inicializar las diapositivas
    initSlides();
});
