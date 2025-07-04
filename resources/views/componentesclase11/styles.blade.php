<style>
    /* Estilos generales para modo claro */
    .presentation-container {
        background-color: #f8f9fa;
        color: #343a40;
    }
    
    .main-content-wrapper {
        background-color: rgba(255, 255, 255, 0.95);
        border-radius: 15px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }
    
    /* Animaciones */
    .animate-fade-in {
        animation: fadeIn 1s ease-in-out;
    }
    
    .animate-slide-in {
        opacity: 0;
        transform: translateY(20px);
        animation: slideIn 0.8s ease-out forwards;
    }
    
    .elegant-divider {
        height: 1px;
        background: linear-gradient(to right, transparent, #adb5bd, transparent);
        margin: 1.5rem 0;
    }
    
    .hover-lift {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .hover-lift:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }
    
    .interactive-element {
        border-radius: 10px;
        padding: 1.5rem;
        background-color: #ffffff;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    }
    
    .presentation-grid {
        display: grid;
        grid-gap: 1.5rem;
    }
    
    /* Encabezados para modo claro */
    h1, h2, h3, h4, h5 {
        color: #2c3e50;
    }
    
    /* Animación keyframes */
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    
    @keyframes slideIn {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    /* Estilos específicos para la presentación */
    .concept-card {
        background-color: #fff;
        border-left: 4px solid #3498db;
        padding: 1rem;
        margin-bottom: 1rem;
        border-radius: 0 8px 8px 0;
        box-shadow: 0 2px 5px rgba(0,0,0,0.05);
    }
    
    .formula-box {
        background-color: #f1f8ff;
        padding: 1rem;
        border-radius: 8px;
        margin: 1rem 0;
        border: 1px solid #d1e3fa;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .example-box {
        background-color: #f0fff4;
        padding: 1rem;
        border-radius: 8px;
        margin: 1rem 0;
        border-left: 4px solid #38c172;
    }
    
    .exercise-box {
        background-color: #fff9f0;
        padding: 1rem;
        border-radius: 8px;
        margin: 1rem 0;
        border-left: 4px solid #f59e0b;
    }
    
    .highlight {
        color: #3498db;
        font-weight: bold;
    }
    
    .math-formula {
        font-size: 1.1em;
        padding: 0.5rem;
    }
    
    /* Para ejercicios */
    .exercise-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 1rem;
        margin-top: 1rem;
    }
    
    .exercise-card {
        background-color: #fff;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        padding: 1rem;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        transition: transform 0.2s, box-shadow 0.2s;
    }
    
    .exercise-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    
    .exercise-number {
        display: inline-block;
        background-color: #3498db;
        color: white;
        width: 24px;
        height: 24px;
        line-height: 24px;
        text-align: center;
        border-radius: 50%;
        margin-right: 8px;
        font-weight: bold;
        font-size: 0.9rem;
    }
</style>

<!-- Incluir MathJax para fórmulas matemáticas -->
<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
<script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
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
