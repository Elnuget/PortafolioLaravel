<!-- Estilos para Clase 7 - Modo Claro + MathJax -->
<script>
window.MathJax = {
  tex: {
    inlineMath: [['$', '$'], ['\\(', '\\)']],
    displayMath: [['$$', '$$'], ['\\[', '\\]']],
    processEscapes: true,
    processEnvironments: true
  },
  options: {
    skipHtmlTags: ['script', 'noscript', 'style', 'textarea', 'pre']
  }
};
</script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
<script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
    
    body {
        font-family: 'Poppins', sans-serif;
        overflow-x: hidden;
        background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
    }
    
    /* Animaciones optimizadas */
    .animate-pulse-slow {
        animation: pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }
    
    .animate-float {
        animation: float 6s ease-in-out infinite;
    }
    
    .animate-slide-in {
        animation: slideIn 1s ease-out forwards;
        opacity: 0;
        transform: translateY(30px);
    }
    
    .animate-fade-in {
        animation: fadeIn 1.5s ease-out forwards;
        opacity: 0;
    }
    
    @keyframes pulse {
        0%, 100% {
            opacity: 0.3;
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
        33% {
            transform: translateY(-10px) rotate(1deg);
        }
        66% {
            transform: translateY(5px) rotate(-1deg);
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
    
    /* Contenedor principal */
    .presentation-container {
        position: relative;
        min-height: 100vh;
    }
    
    .main-content-wrapper {
        backdrop-filter: blur(10px);
        background: rgba(255, 255, 255, 0.1);
        border-radius: 24px;
        border: 1px solid rgba(255, 255, 255, 0.2);
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.05);
    }
    
    /* Divisores elegantes */
    .elegant-divider {
        height: 2px;
        background: linear-gradient(90deg, transparent, #3b82f6, transparent);
        margin: 2rem 0;
        border-radius: 2px;
        opacity: 0.6;
    }
    
    /* Grid de presentación */
    .presentation-grid {
        display: grid;
        gap: 2rem;
        grid-template-columns: 1fr;
    }
    
    .content-area {
        position: relative;
        transition: all 0.3s ease;
    }
    
    .hover-lift:hover {
        transform: translateY(-5px);
    }
    
    .interactive-element {
        cursor: pointer;
        border-radius: 16px;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .interactive-element:hover {
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }
    
    /* Estilos específicos para modo claro */
    .text-primary {
        color: #1e40af;
    }
    
    .text-secondary {
        color: #475569;
    }
    
    .bg-primary {
        background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
    }
    
    .bg-card {
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.3);
    }
    
    /* Estilos específicos para MathJax */
    .MathJax {
        font-size: 1.1em !important;
    }
    
    .MathJax_Display {
        margin: 1em 0 !important;
    }
    
    /* Mejoras para fórmulas */
    .formula-container {
        background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
        border: 2px solid #3b82f6;
        border-radius: 12px;
        padding: 1.5rem;
        margin: 1rem 0;
        text-align: center;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    }
    
    .formula-container .MathJax {
        color: #1e40af !important;
        font-weight: 600 !important;
    }
    
    /* Ejercicios interactivos */
    details {
        transition: all 0.3s ease;
    }
    
    details[open] {
        background: rgba(255, 255, 255, 0.9);
        border-radius: 8px;
        padding: 0.5rem;
    }
    
    summary {
        font-weight: 600;
        padding: 0.5rem;
        border-radius: 6px;
        transition: all 0.2s ease;
    }
    
    summary:hover {
        background: rgba(147, 51, 234, 0.1);
        transform: translateX(4px);
    }
    
    /* Ejemplos destacados */
    .example-highlight {
        background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);
        border-left: 4px solid #f59e0b;
        padding: 1rem;
        border-radius: 0.5rem;
        margin: 1rem 0;
        position: relative;
    }
    
    .example-highlight::before {
        content: "💡";
        position: absolute;
        top: -10px;
        left: -10px;
        background: #f59e0b;
        color: white;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
    }
    
    /* Sombras suaves para modo claro */
    .shadow-soft {
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.05), 0 4px 6px -2px rgba(0, 0, 0, 0.03);
    }
    
    .shadow-card {
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.08), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }
    
    /* Efectos de hover mejorados */
    button:hover {
        transform: translateY(-2px);
        box-shadow: 0 12px 20px -5px rgba(0, 0, 0, 0.15);
    }
    
    /* Tarjetas de progresión */
    .progression-card {
        background: rgba(255, 255, 255, 0.95);
        border-radius: 12px;
        padding: 1.5rem;
        margin: 1rem 0;
        border: 2px solid transparent;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    
    .progression-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #3b82f6, #06b6d4);
        transform: scaleX(0);
        transition: transform 0.3s ease;
    }
    
    .progression-card:hover::before {
        transform: scaleX(1);
    }
    
    .progression-card:hover {
        transform: translateY(-2px);
        border-color: #3b82f6;
        box-shadow: 0 8px 25px -5px rgba(59, 130, 246, 0.2);
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .main-content-wrapper {
            margin: 1rem;
            padding: 1.5rem;
        }
        
        .presentation-grid {
            gap: 1rem;
        }
        
        .MathJax {
            font-size: 0.9em !important;
        }
    }
    
    /* Mejoras de legibilidad para fórmulas */
    .math-inline {
        background: rgba(59, 130, 246, 0.1);
        padding: 0.2rem 0.4rem;
        border-radius: 0.25rem;
        border: 1px solid rgba(59, 130, 246, 0.2);
        font-family: 'SF Mono', Monaco, 'Cascadia Code', 'Roboto Mono', Consolas, 'Courier New', monospace;
    }
    
    /* Indicadores de progreso */
    .progress-indicator {
        background: linear-gradient(90deg, #10b981 0%, #059669 100%);
        height: 4px;
        border-radius: 2px;
        margin: 0.5rem 0;
        animation: progressBar 2s ease-in-out infinite;
    }
    
    @keyframes progressBar {
        0% { width: 0%; }
        50% { width: 100%; }
        100% { width: 0%; }
    }
    
    /* Alertas y notas especiales */
    .math-note {
        background: linear-gradient(135deg, #e0f2fe 0%, #b3e5fc 100%);
        border-left: 4px solid #0288d1;
        padding: 1rem;
        border-radius: 0.5rem;
        margin: 1rem 0;
        font-size: 0.9rem;
        line-height: 1.5;
    }
    
    .math-warning {
        background: linear-gradient(135deg, #fff3e0 0%, #ffcc02 20%, #fff3e0 100%);
        border-left: 4px solid #ff9800;
        padding: 1rem;
        border-radius: 0.5rem;
        margin: 1rem 0;
        font-size: 0.9rem;
        line-height: 1.5;
    }
</style>
