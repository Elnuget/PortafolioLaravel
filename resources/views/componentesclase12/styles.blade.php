<!-- Estilos para Clase 12: Exámenes Virtuales - Modo Claro -->
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
    
    body {
        font-family: 'Poppins', sans-serif;
        overflow-x: hidden;
        background-color: #f8fafc;
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
        opacity: 0;
        transform: translateY(30px);
    }
    
    .animate-fade-in {
        animation: fadeIn 1.5s ease-out forwards;
    }
    
    .hover-lift {
        transition: all 0.3s ease;
    }
    
    .hover-lift:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    }
    
    /* Contenedor principal */
    .presentation-container {
        min-height: 100vh;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        position: relative;
    }
    
    .main-content-wrapper {
        background: rgba(255, 255, 255, 0.95);
        border-radius: 20px;
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }
    
    /* Grid de presentación */
    .presentation-grid {
        display: grid;
        gap: 2rem;
        margin: 2rem 0;
    }
    
    .content-area {
        background: rgba(255, 255, 255, 0.9);
        border-radius: 15px;
        padding: 2rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        border: 1px solid rgba(102, 126, 234, 0.1);
    }
    
    /* Divisores elegantes */
    .elegant-divider {
        height: 2px;
        background: linear-gradient(90deg, transparent, #667eea, transparent);
        margin: 2rem 0;
        border-radius: 1px;
    }
    
    /* Elementos interactivos */
    .interactive-element {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    /* Botones de acción */
    .action-btn {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 12px 24px;
        border-radius: 10px;
        border: none;
        font-weight: 600;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
        margin: 0.5rem;
    }
    
    .action-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
        color: white;
        text-decoration: none;
    }
    
    /* Objetivo items */
    .objetivo-item {
        background: rgba(102, 126, 234, 0.1);
        border: 2px solid rgba(102, 126, 234, 0.2);
        border-radius: 12px;
        padding: 1.5rem;
        margin: 1rem 0;
        transition: all 0.3s ease;
    }
    
    .objetivo-item:hover {
        background: rgba(102, 126, 234, 0.15);
        border-color: rgba(102, 126, 234, 0.3);
        transform: translateX(10px);
    }
    
    .objetivo-check {
        color: #10b981;
        font-size: 1.5rem;
        margin-right: 1rem;
    }
    
    /* Sección de contenido */
    .content-section {
        background: rgba(255, 255, 255, 0.8);
        border-radius: 12px;
        padding: 2rem;
        margin: 1.5rem 0;
        border-left: 4px solid #667eea;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }
    
    .section-title {
        color: #374151;
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    
    .section-icon {
        font-size: 1.8rem;
    }
    
    /* Animaciones keyframes */
    @keyframes slideIn {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    @keyframes fadeIn {
        to {
            opacity: 1;
        }
    }
    
    @keyframes float {
        0%, 100% {
            transform: translateY(0px);
        }
        50% {
            transform: translateY(-20px);
        }
    }
    
    @keyframes pulse {
        0%, 100% {
            opacity: 1;
        }
        50% {
            opacity: .5;
        }
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .main-content-wrapper {
            margin: 1rem;
            padding: 1.5rem;
        }
        
        .presentation-grid {
            grid-template-columns: 1fr;
            gap: 1rem;
        }
        
        .content-area {
            padding: 1.5rem;
        }
    }
</style>
