<!-- Estilos específicos para la clase 2 -->
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
      /* Estilos para presentación de clase mejorados */
    .presentation-container {
        background: linear-gradient(135deg, #0f0f35 0%, #1a1a3e 25%, #16213e 50%, #0f0f35 100%);
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
            radial-gradient(circle at 85% 15%, rgba(239, 68, 68, 0.08) 0%, transparent 50%),
            radial-gradient(circle at 50% 50%, rgba(147, 51, 234, 0.06) 0%, transparent 50%),
            radial-gradient(circle at 25% 25%, rgba(59, 130, 246, 0.04) 0%, transparent 50%);
        pointer-events: none;
        animation: backgroundShift 20s ease-in-out infinite;
    }
    
    /* ...resto de las reglas CSS de clase2 index blade... */
</style>
