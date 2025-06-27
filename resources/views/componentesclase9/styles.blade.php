<!-- Estilos para Clase 9: FRACCIONES - Modo Claro -->
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
    @import url('https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.16.8/katex.min.css');
    
    body {
        font-family: 'Poppins', sans-serif;
        overflow-x: hidden;
        background-color: #f8fafc;
    }
    
    /* Modo claro - Colores principales */
    .presentation-container {
        background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%);
        color: #1e293b;
    }
    
    .main-content-wrapper {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(148, 163, 184, 0.2);
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.1);
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
            transform: scale(1.02);
        }
    }
    
    @keyframes float {
        0%, 100% {
            transform: translateY(0px) rotate(0deg);
        }
        50% {
            transform: translateY(-15px) rotate(1deg);
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
    
    /* Elementos interactivos */
    .hover-lift {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .hover-lift:hover {
        transform: translateY(-8px);
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
    }
    
    .interactive-element {
        cursor: pointer;
        position: relative;
        overflow: hidden;
    }
    
    .interactive-element::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(59, 130, 246, 0.1), transparent);
        transition: left 0.5s;
    }
    
    .interactive-element:hover::before {
        left: 100%;
    }
    
    /* Divisores elegantes */
    .elegant-divider {
        height: 2px;
        background: linear-gradient(90deg, transparent, #3b82f6, transparent);
        margin: 3rem 0;
        border-radius: 2px;
        opacity: 0.6;
    }
    
    /* Grid de presentación */
    .presentation-grid {
        display: grid;
        gap: 2rem;
        grid-template-columns: 1fr;
    }
    
    /* Área de contenido */
    .content-area {
        background: rgba(255, 255, 255, 0.8);
        padding: 2.5rem;
        border-radius: 1rem;
        border: 1px solid rgba(148, 163, 184, 0.2);
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05);
    }
    
    /* Tarjetas de contenido */
    .content-card {
        background: rgba(255, 255, 255, 0.9);
        border-radius: 0.75rem;
        padding: 1.5rem;
        margin-bottom: 1.5rem;
        border: 1px solid rgba(148, 163, 184, 0.15);
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
    }
    
    .content-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
    }
    
    /* Estilos para fracciones matemáticas */
    .fraction-display {
        font-size: 1.5rem;
        margin: 1rem 0;
        text-align: center;
        font-weight: 600;
        color: #1e40af;
    }
    
    .math-example {
        background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%);
        border-left: 4px solid #3b82f6;
        padding: 1rem 1.5rem;
        margin: 1rem 0;
        border-radius: 0.5rem;
        font-family: 'Courier New', monospace;
    }
    
    .exercise-box {
        background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);
        border-left: 4px solid #f59e0b;
        padding: 1rem 1.5rem;
        margin: 1rem 0;
        border-radius: 0.5rem;
    }
    
    /* Botones de acción */
    .action-button {
        background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
        color: white;
        padding: 0.75rem 1.5rem;
        border-radius: 0.5rem;
        text-decoration: none;
        display: inline-block;
        margin: 0.5rem;
        transition: all 0.3s ease;
        font-weight: 600;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    }
    
    .action-button:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px -5px rgba(59, 130, 246, 0.4);
        color: white;
        text-decoration: none;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .main-content-wrapper {
            padding: 1.5rem;
        }
        
        .content-area {
            padding: 1.5rem;
        }
        
        .fraction-display {
            font-size: 1.2rem;
        }
    }
    
    /* Estilos para KaTeX */
    .katex {
        font-size: 1.2em;
    }
    
    .katex-display {
        margin: 1rem 0;
    }
</style>

<!-- Cargar KaTeX para renderizar matemáticas -->
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.16.8/katex.min.js"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.16.8/contrib/auto-render.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        renderMathInElement(document.body, {
            delimiters: [
                {left: "$$", right: "$$", display: true},
                {left: "$", right: "$", display: false}
            ]
        });
    });
</script>
