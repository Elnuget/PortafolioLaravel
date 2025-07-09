<!-- Estilos específicos para la presentación tipo PowerPoint -->
<style>
    /* Contenedor de diapositivas */
    .slides-container {
        position: relative;
        width: 100%;
        overflow: hidden;
    }
    
    /* Estilos de cada diapositiva */
    .slide {
        display: none;
        width: 100%;
        opacity: 0;
        transition: opacity 0.3s ease, transform 0.3s ease;
    }
    
    .slide.active {
        display: block;
        opacity: 1;
    }
    
    /* Animaciones de transición */
    .slide-enter-right {
        animation: slideInFromRight 0.5s forwards;
    }
    
    .slide-enter-left {
        animation: slideInFromLeft 0.5s forwards;
    }
    
    .slide-exit-left {
        animation: slideOutToLeft 0.5s forwards;
    }
    
    .slide-exit-right {
        animation: slideOutToRight 0.5s forwards;
    }
    
    /* Botones de navegación */
    .slide-navigation {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 2rem;
        gap: 1rem;
    }
    
    .nav-button {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border: none;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }
    
    .nav-button:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 15px rgba(102, 126, 234, 0.3);
    }
    
    .nav-button:active {
        transform: translateY(0);
    }
    
    /* Indicador de diapositivas */
    .slide-indicator {
        background: rgba(102, 126, 234, 0.1);
        padding: 5px 15px;
        border-radius: 20px;
        font-weight: 600;
        color: #667eea;
    }
    
    /* Animaciones para las transiciones */
    @keyframes slideInFromRight {
        from {
            transform: translateX(100%);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }
    
    @keyframes slideInFromLeft {
        from {
            transform: translateX(-100%);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }
    
    @keyframes slideOutToLeft {
        from {
            transform: translateX(0);
            opacity: 1;
        }
        to {
            transform: translateX(-100%);
            opacity: 0;
        }
    }
    
    @keyframes slideOutToRight {
        from {
            transform: translateX(0);
            opacity: 1;
        }
        to {
            transform: translateX(100%);
            opacity: 0;
        }
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .nav-button {
            width: 40px;
            height: 40px;
        }
    }
</style>
