<!-- Estilos estandarizados para clase de porcentaje con tema claro -->
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
    
    /* Estilos para presentación de clase mejorados - Tema claro */
    .presentation-container {
        background: linear-gradient(135deg, #f0f4f8 0%, #e9f0f7 25%, #dce7f5 50%, #f0f4f8 100%);
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
            radial-gradient(circle at 15% 85%, rgba(79, 70, 229, 0.08) 0%, transparent 50%),
            radial-gradient(circle at 85% 15%, rgba(225, 29, 72, 0.06) 0%, transparent 50%),
            radial-gradient(circle at 50% 50%, rgba(139, 92, 246, 0.04) 0%, transparent 50%),
            radial-gradient(circle at 25% 25%, rgba(59, 130, 246, 0.03) 0%, transparent 50%);
        pointer-events: none;
        animation: backgroundShift 20s ease-in-out infinite;
    }
    
    /* Elementos de fondo decorativos */
    .bg-decoration {
        position: absolute;
        border-radius: 50%;
        opacity: 0.1;
        background: radial-gradient(circle, rgba(79, 70, 229, 0.2) 0%, rgba(79, 70, 229, 0) 70%);
    }
    
    .bg-decoration-1 {
        top: 10%;
        left: 5%;
        width: 300px;
        height: 300px;
    }
    
    .bg-decoration-2 {
        bottom: 15%;
        right: 10%;
        width: 400px;
        height: 400px;
    }
    
    .bg-decoration-3 {
        top: 30%;
        right: 20%;
        width: 200px;
        height: 200px;
    }
    
    .bg-decoration-4 {
        bottom: 30%;
        left: 15%;
        width: 250px;
        height: 250px;
    }
    
    /* Estilos específicos para la presentación */
    .elegant-divider {
        height: 1px;
        width: 100%;
        background: linear-gradient(to right, transparent, rgba(79, 70, 229, 0.3), transparent);
        margin: 2rem 0;
    }
    
    .hover-lift {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .hover-lift:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    }
    
    .interactive-element {
        position: relative;
    }
    
    .interactive-element::after {
        content: '';
        position: absolute;
        inset: 0;
        border-radius: 1rem;
        pointer-events: none;
        transition: box-shadow 0.3s ease;
    }
    
    .interactive-element:hover::after {
        box-shadow: 0 0 0 2px rgba(79, 70, 229, 0.3);
    }
    
    /* Estilo para texto destacado */
    .highlight-text {
        color: #4338ca; /* Indigo-700 */
        font-weight: 600;
    }
    
    /* Estilo para bloques de código en tema claro */
    .code-block {
        background-color: #f8fafc;
        border: 1px solid #e2e8f0;
        border-radius: 0.5rem;
        padding: 1rem;
        color: #334155;
        font-family: monospace;
        overflow-x: auto;
    }
    
    /* Estilos para fórmulas matemáticas */
    .math-formula {
        background-color: #ffffff;
        border-radius: 0.5rem;
        padding: 1rem;
        margin: 1rem 0;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        text-align: center;
    }
    
    /* Estilos para ejemplos */
    .example-block {
        background-color: #f8f9ff;
        border-left: 4px solid #4338ca;
        padding: 1rem;
        margin: 1rem 0;
        border-radius: 0 0.5rem 0.5rem 0;
    }
    
    /* Estilos para ejercicios */
    .exercise-block {
        background-color: #f0f7ff;
        border: 1px solid #e0e7ff;
        border-radius: 0.5rem;
        padding: 1rem;
        margin: 1.5rem 0;
    }
    
    .exercise-block h4 {
        color: #1e40af;
        margin-bottom: 0.5rem;
    }
    
    /* Estilos para tarjetas de información */
    .info-card {
        background-color: #ffffff;
        border-radius: 0.75rem;
        padding: 1.25rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .info-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.08);
    }
</style>

<!-- MathJax para renderizar fórmulas matemáticas -->
<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
<script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
