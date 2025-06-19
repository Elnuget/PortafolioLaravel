<!-- Estilos estandarizados para Clase 5: Física - Cantidades Físicas -->
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
    
    /* Contenedor principal */
    .presentation-container {
        background: linear-gradient(135deg, #1a1a2e 0%, #16213e 25%, #0f3460 50%, #16213e 75%, #1a1a2e 100%);
        position: relative;
        min-height: 100vh;
    }
    
    /* Efectos de fondo */
    .background-effects {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        overflow: hidden;
        z-index: 1;
    }
    
    /* Contenedor principal del contenido */
    .main-content-wrapper {
        background: rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 20px;
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.4);
    }
    
    /* Divisores elegantes */
    .elegant-divider {
        height: 2px;
        background: linear-gradient(90deg, transparent, #e11d48, transparent);
        margin: 2rem 0;
        border-radius: 2px;
        position: relative;
    }
    
    .elegant-divider::after {
        content: '';
        position: absolute;
        top: -2px;
        left: 50%;
        transform: translateX(-50%);
        width: 8px;
        height: 8px;
        background: #e11d48;
        border-radius: 50%;
        box-shadow: 0 0 20px rgba(225, 29, 72, 0.5);
    }
    
    /* Grid de presentación */
    .presentation-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 2rem;
    }
    
    /* Área de contenido */
    .content-area {
        transition: all 0.3s ease;
    }
    
    .hover-lift:hover {
        transform: translateY(-5px);
    }
    
    .interactive-element {
        cursor: pointer;
    }
    
    /* Estilos específicos para física */
    .physics-formula {
        background: linear-gradient(135deg, #1e3a8a 0%, #3730a3 100%);
        border: 2px solid #60a5fa;
        border-radius: 12px;
        padding: 1.5rem;
        margin: 1rem 0;
        position: relative;
        overflow: hidden;
    }
    
    .physics-formula::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(45deg, transparent 49%, rgba(96, 165, 250, 0.1) 50%, transparent 51%);
        animation: shimmer 3s infinite;
    }
    
    @keyframes shimmer {
        0% { transform: translateX(-100%); }
        100% { transform: translateX(100%); }
    }
    
    .physics-unit {
        background: linear-gradient(135deg, #059669 0%, #047857 100%);
        border: 1px solid #10b981;
        border-radius: 8px;
        padding: 0.75rem 1rem;
        display: inline-block;
        margin: 0.25rem;
        color: white;
        font-weight: 600;
        text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
    }
    
    .measurement-tool {
        background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
        border: 1px solid #ef4444;
        border-radius: 10px;
        padding: 1rem;
        margin: 0.5rem 0;
        transition: all 0.3s ease;
    }
    
    .measurement-tool:hover {
        transform: scale(1.02);
        box-shadow: 0 10px 25px rgba(220, 38, 38, 0.3);
    }
    
    /* Tarjetas de módulos */
    .module-card {
        background: linear-gradient(135deg, rgba(30, 58, 138, 0.8) 0%, rgba(55, 48, 163, 0.8) 100%);
        border: 2px solid rgba(96, 165, 250, 0.3);
        border-radius: 16px;
        padding: 2rem;
        margin: 1.5rem 0;
        position: relative;
        overflow: hidden;
        transition: all 0.4s ease;
    }
    
    .module-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(30, 58, 138, 0.4);
        border-color: rgba(96, 165, 250, 0.6);
    }
    
    .module-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #3b82f6, #8b5cf6, #ec4899, #f59e0b);
        border-radius: 16px 16px 0 0;
    }
    
    /* Efectos de partículas para física */
    .physics-particle {
        position: absolute;
        width: 6px;
        height: 6px;
        background: radial-gradient(circle, #60a5fa 0%, #3b82f6 100%);
        border-radius: 50%;
        animation: particle-float 8s linear infinite;
    }
    
    @keyframes particle-float {
        0% {
            transform: translateY(100vh) rotate(0deg);
            opacity: 0;
        }
        10% {
            opacity: 1;
        }
        90% {
            opacity: 1;
        }
        100% {
            transform: translateY(-100vh) rotate(360deg);
            opacity: 0;
        }
    }
    
    /* Estilos responsivos */
    @media (max-width: 768px) {
        .main-content-wrapper {
            padding: 1rem;
            margin: 1rem;
        }
        
        .module-card {
            padding: 1.5rem;
        }
        
        .physics-formula {
            padding: 1rem;
        }
    }
</style>
