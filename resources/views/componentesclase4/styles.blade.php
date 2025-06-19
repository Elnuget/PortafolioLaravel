<style>
    .presentation-container {
        background-color: #1a1a2e;
        overflow: hidden;
    }
    
    .elegant-divider {
        height: 2px;
        background: linear-gradient(90deg, rgba(94, 234, 212, 0), rgba(94, 234, 212, 0.5), rgba(94, 234, 212, 0));
        margin: 1.5rem 0;
    }
    
    .main-content-wrapper {
        background: rgba(20, 30, 70, 0.6);
        backdrop-filter: blur(10px);
        border-radius: 12px;
        border: 1px solid rgba(255, 255, 255, 0.1);
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
    }
    
    .content-area {
        background: rgba(30, 41, 59, 0.4);
        border-radius: 8px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        padding: 1.5rem;
        transition: all 0.3s ease;
    }
    
    .hover-lift:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.2);
    }
    
    .animate-fade-in {
        animation: fadeIn 0.8s ease-out forwards;
    }
    
    .animate-slide-in {
        opacity: 0;
        transform: translateY(20px);
        animation: slideIn 0.6s ease-out forwards;
    }
    
    .interactive-element {
        position: relative;
        overflow: hidden;
    }
    
    .interactive-element::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(45deg, transparent 98%, rgba(94, 234, 212, 0.6) 100%);
        pointer-events: none;
    }
    
    .module-button {
        background-color: rgba(8, 145, 178, 0.6);
        border: 1px solid rgba(8, 145, 178, 0.2);
        transition: all 0.3s ease;
    }
    
    .module-button:hover {
        background-color: rgba(8, 145, 178, 0.8);
        transform: translateY(-2px);
    }
    
    .module-button.active {
        background-color: rgba(14, 165, 233, 0.8);
        border-color: rgba(94, 234, 212, 0.5);
        box-shadow: 0 0 15px rgba(94, 234, 212, 0.3);
    }
    
    .module-content {
        display: none;
    }
    
    .module-content.active {
        display: block;
        animation: fadeIn 0.5s ease forwards;
    }
    
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
</style>

<script defer>
    document.addEventListener('DOMContentLoaded', function() {
        const moduleButtons = document.querySelectorAll('.module-button');
        const moduleContents = document.querySelectorAll('.module-content');
        
        // Inicialmente activar el primer módulo
        if(moduleButtons.length > 0) {
            moduleButtons[0].classList.add('active');
            moduleContents[0].classList.add('active');
        }
        
        moduleButtons.forEach(button => {
            button.addEventListener('click', function() {
                const moduleId = this.getAttribute('data-module');
                
                // Desactivar todos los botones y contenidos
                moduleButtons.forEach(btn => btn.classList.remove('active'));
                moduleContents.forEach(content => content.classList.remove('active'));
                
                // Activar el módulo seleccionado
                this.classList.add('active');
                document.getElementById(moduleId).classList.add('active');
            });
        });
    });
</script>
