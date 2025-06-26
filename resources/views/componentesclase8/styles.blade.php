<!-- Estilos para Clase 8: Caída Libre - Modo Claro -->
<!-- MathJax Configuration -->
<script>
  MathJax = {
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
            opacity: 0.8;
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
    
    /* Estilos para presentación - MODO CLARO */
    .presentation-container {
        background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 25%, #cbd5e1 50%, #f1f5f9 100%);
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
            radial-gradient(circle at 15% 85%, rgba(59, 130, 246, 0.08) 0%, transparent 50%),
            radial-gradient(circle at 85% 15%, rgba(239, 68, 68, 0.06) 0%, transparent 50%),
            radial-gradient(circle at 50% 50%, rgba(147, 51, 234, 0.04) 0%, transparent 50%),
            radial-gradient(circle at 25% 25%, rgba(34, 197, 94, 0.05) 0%, transparent 50%);
        pointer-events: none;
        animation: backgroundShift 20s ease-in-out infinite;
    }
    
    @keyframes backgroundShift {
        0%, 100% { transform: rotate(0deg) scale(1); }
        50% { transform: rotate(1deg) scale(1.02); }
    }
    
    /* Elementos de fondo decorativos - MODO CLARO */
    .bg-decoration {
        position: absolute;
        border-radius: 50%;
        opacity: 0.08;
        background: radial-gradient(circle, rgba(99, 102, 241, 0.1) 0%, rgba(99, 102, 241, 0) 70%);
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
    
    /* Estilos de contenido - MODO CLARO */
    .main-content-wrapper {
        background-color: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        border-radius: 24px;
        border: 1px solid rgba(148, 163, 184, 0.2);
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.1);
    }
    
    /* Divisores elegantes - MODO CLARO */
    .elegant-divider {
        height: 1px;
        width: 100%;
        background: linear-gradient(90deg, transparent, rgba(148, 163, 184, 0.3), transparent);
        margin: 2rem 0;
    }
    
    /* Estilos de interacción - MODO CLARO */
    .hover-lift {
        transition: transform 0.5s cubic-bezier(0.19, 1, 0.22, 1),
                    box-shadow 0.5s cubic-bezier(0.19, 1, 0.22, 1);
    }
    
    .hover-lift:hover {
        transform: translateY(-10px);
        box-shadow: 0 30px 60px -12px rgba(0, 0, 0, 0.15);
    }
    
    /* Estilos de contenido interactivo - MODO CLARO */
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
        box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.3);
        opacity: 0;
    }
    
    .interactive-element:hover::after {
        opacity: 1;
    }
    
    /* Estilos específicos para física - Caída Libre */
    .physics-formula {
        background: linear-gradient(135deg, #dbeafe 0%, #e0e7ff 100%);
        border: 2px solid #3b82f6;
        border-radius: 12px;
        padding: 1rem;
        margin: 1rem 0;
        font-family: 'Courier New', monospace;
        font-size: 1.2rem;
        font-weight: bold;
        color: #1e40af;
        text-align: center;
    }
    
    .concept-box {
        background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%);
        border-left: 4px solid #22c55e;
        padding: 1.5rem;
        margin: 1rem 0;
        border-radius: 8px;
        color: #15803d;
    }
    
    .example-box {
        background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);
        border: 2px solid #f59e0b;
        border-radius: 12px;
        padding: 1.5rem;
        margin: 1rem 0;
        color: #92400e;
    }
    
    .important-note {
        background: linear-gradient(135deg, #fef2f2 0%, #fee2e2 100%);
        border: 2px solid #ef4444;
        border-radius: 12px;
        padding: 1rem;
        margin: 1rem 0;
        color: #dc2626;
        font-weight: 600;
    }
</style>
