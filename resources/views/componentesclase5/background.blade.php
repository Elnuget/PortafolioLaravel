<!-- Efectos de fondo para Clase 5: Física - Cantidades Físicas -->
<div class="background-effects">
    <!-- Partículas flotantes estilo física -->
    <div class="physics-particle" style="left: 10%; animation-delay: 0s;"></div>
    <div class="physics-particle" style="left: 20%; animation-delay: 1s;"></div>
    <div class="physics-particle" style="left: 30%; animation-delay: 2s;"></div>
    <div class="physics-particle" style="left: 40%; animation-delay: 3s;"></div>
    <div class="physics-particle" style="left: 50%; animation-delay: 4s;"></div>
    <div class="physics-particle" style="left: 60%; animation-delay: 5s;"></div>
    <div class="physics-particle" style="left: 70%; animation-delay: 6s;"></div>
    <div class="physics-particle" style="left: 80%; animation-delay: 7s;"></div>
    <div class="physics-particle" style="left: 90%; animation-delay: 8s;"></div>
    
    <!-- Formas geométricas abstractas -->
    <div class="absolute top-20 left-10 w-32 h-32 bg-gradient-to-br from-blue-500/10 to-purple-500/10 rounded-full blur-xl animate-pulse-slow"></div>
    <div class="absolute top-40 right-20 w-24 h-24 bg-gradient-to-br from-red-500/10 to-pink-500/10 rounded-lg blur-xl animate-float" style="animation-delay: 2s;"></div>
    <div class="absolute bottom-32 left-1/4 w-20 h-20 bg-gradient-to-br from-green-500/10 to-teal-500/10 rounded-full blur-xl animate-pulse-slow" style="animation-delay: 4s;"></div>
    <div class="absolute bottom-20 right-1/3 w-28 h-28 bg-gradient-to-br from-yellow-500/10 to-orange-500/10 rounded-lg blur-xl animate-float" style="animation-delay: 6s;"></div>
    
    <!-- Ondas de fondo -->
    <svg class="absolute inset-0 w-full h-full opacity-5" viewBox="0 0 1200 600" xmlns="http://www.w3.org/2000/svg">
        <defs>
            <linearGradient id="wave-gradient" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" style="stop-color:#3b82f6"/>
                <stop offset="50%" style="stop-color:#8b5cf6"/>
                <stop offset="100%" style="stop-color:#ec4899"/>
            </linearGradient>
        </defs>
        <path d="M0,300 Q300,100 600,300 T1200,300 L1200,600 L0,600 Z" fill="url(#wave-gradient)" opacity="0.1">
            <animate attributeName="d" dur="20s" repeatCount="indefinite" 
                values="M0,300 Q300,100 600,300 T1200,300 L1200,600 L0,600 Z;
                        M0,300 Q300,200 600,300 T1200,300 L1200,600 L0,600 Z;
                        M0,300 Q300,100 600,300 T1200,300 L1200,600 L0,600 Z"/>
        </path>
    </svg>
    
    <!-- Ecuaciones flotantes en el fondo -->
    <div class="absolute top-1/4 left-5 text-6xl text-white/5 font-bold animate-float">F=ma</div>
    <div class="absolute top-1/2 right-10 text-5xl text-white/5 font-bold animate-pulse-slow" style="animation-delay: 3s;">E=mc²</div>
    <div class="absolute bottom-1/3 left-1/3 text-4xl text-white/5 font-bold animate-float" style="animation-delay: 5s;">v=d/t</div>
    <div class="absolute top-1/3 right-1/4 text-3xl text-white/5 font-bold animate-pulse-slow" style="animation-delay: 7s;">P=F/A</div>
    
    <!-- Grid de fondo sutil -->
    <div class="absolute inset-0 opacity-5">
        <div class="w-full h-full" style="background-image: radial-gradient(circle, #ffffff 1px, transparent 1px); background-size: 40px 40px;"></div>
    </div>
</div>
