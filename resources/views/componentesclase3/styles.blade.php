<!-- Estilos estandarizados para la clase de Jerarquía de operaciones -->
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
    
    body {
        font-family: 'Poppins', sans-serif;
        overflow-x: hidden;
    }
    
    /* Animaciones para presentación */
    .animate-pulse-slow {
        animation: pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }
    
    .animate-float {
        animation: float 6s ease-in-out infinite;
    }
    
    .animate-slide-in {
        animation: slideIn 1s ease-out forwards;
    }
    
    .animate-fade-in {
        animation: fadeIn 1.5s ease-out forwards;
    }
    
    @keyframes pulse {
        0%, 100% {
            opacity: 1;
            transform: scale(1);
        }
        50% {
            opacity: 0.6;
            transform: scale(1.05);
        }
    }
    
    @keyframes float {
        0%, 100% {
            transform: translateY(0px) rotate(0deg);
        }
        50% {
            transform: translateY(-20px) rotate(2deg);
        }
    }
    
    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }
    
    /* Estilos para presentación de clase mejorados con color enfocado en matemáticas */
    .presentation-container {
        background: linear-gradient(135deg, #0f1f35 0%, #1a2a3e 25%, #16233e 50%, #0f1f35 100%);
        position: relative;
        overflow: hidden;
        min-height: 100vh;
    }
    
    .presentation-container::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: 
            radial-gradient(circle at 15% 85%, rgba(99, 102, 241, 0.12) 0%, transparent 50%),
            radial-gradient(circle at 85% 15%, rgba(68, 150, 239, 0.08) 0%, transparent 50%),
            radial-gradient(circle at 50% 50%, rgba(51, 149, 234, 0.06) 0%, transparent 50%),
            radial-gradient(circle at 25% 25%, rgba(59, 130, 246, 0.04) 0%, transparent 50%);
        pointer-events: none;
        animation: backgroundShift 20s ease-in-out infinite;
    }
    
    /* Elementos de fondo decorativos para matemáticas */
    .bg-decoration {
        position: absolute;
        border-radius: 50%;
        opacity: 0.1;
        background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 70%);
    }
    
    .bg-decoration-1 {
        top: 10%;
        left: 10%;
        width: 300px;
        height: 300px;
    }
    
    .bg-decoration-2 {
        top: 60%;
        left: 5%;
        width: 250px;
        height: 250px;
    }
    
    .bg-decoration-3 {
        top: 15%;
        right: 5%;
        width: 400px;
        height: 400px;
    }
    
    .bg-decoration-4 {
        bottom: 10%;
        right: 10%;
        width: 350px;
        height: 350px;
    }
    
    /* Estilos de contenido */
    .main-content-wrapper {
        background-color: rgba(15, 15, 35, 0.6);
        backdrop-filter: blur(10px);
        border-radius: 24px;
        border: 1px solid rgba(255, 255, 255, 0.1);
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
    }
    
    /* Divisores elegantes */
    .elegant-divider {
        height: 1px;
        width: 100%;
        background: linear-gradient(90deg, transparent, rgba(100, 180, 255, 0.2), transparent);
        margin: 2rem 0;
    }
    
    /* Estilos de interacción */
    .hover-lift {
        transition: transform 0.5s cubic-bezier(0.19, 1, 0.22, 1),
                    box-shadow 0.5s cubic-bezier(0.19, 1, 0.22, 1);
    }
    
    .hover-lift:hover {
        transform: translateY(-10px);
        box-shadow: 0 30px 60px -12px rgba(0, 0, 0, 0.5);
    }
    
    /* Estilos de contenido interactivo */
    .interactive-element {
        position: relative;
        transition: all 0.3s ease;
    }
    
    .interactive-element::after {
        content: '';
        position: absolute;
        inset: 0;
        border-radius: inherit;
        pointer-events: none;
        transition: opacity 0.3s ease;
        box-shadow: 0 0 0 2px rgba(50, 150, 255, 0.3);
        opacity: 0;
    }
    
    .interactive-element:hover::after {
        opacity: 1;
    }
    
    /* Estilos específicos para matemáticas */
    .math-expression {
        font-family: 'Cambria Math', Georgia, serif;
        font-size: 1.2em;
        padding: 0.5rem 1rem;
        background: rgba(0, 40, 80, 0.2);
        border-radius: 8px;
        display: inline-block;
        margin: 0.5rem 0;
    }
    
    .equation-box {
        background: rgba(25, 35, 60, 0.6);
        border-radius: 12px;
        padding: 1.5rem;
        border: 1px solid rgba(100, 180, 255, 0.2);
        margin: 1rem 0;
    }
    
    .operation-step {
        padding: 0.75rem;
        border-left: 3px solid rgba(100, 180, 255, 0.5);
        margin: 0.5rem 0;
        transition: all 0.3s ease;
    }
    
    .operation-step:hover {
        background: rgba(100, 180, 255, 0.1);
    }
</style>
