<!-- Header -->
<div class="text-center mb-16 relative">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="parallax-bg absolute top-10 left-10 w-20 h-20 bg-red-500/10 rounded-full animate-pulse"></div>
        <div class="parallax-bg absolute top-32 right-16 w-16 h-16 bg-red-400/10 rounded-full animate-bounce delay-300"></div>
        <div class="parallax-bg absolute bottom-20 left-20 w-24 h-24 bg-red-600/10 rounded-full animate-ping delay-500"></div>
    </div>
    
    <div class="mb-8 relative z-10">
        <!-- Improved Profile Image with Animation -->
        <div class="relative inline-block mb-6">
            <div class="w-40 h-40 rounded-full mx-auto shadow-2xl border-4 border-red-500/30 hover:scale-105 transition-all duration-300 overflow-hidden">
                <img src="{{ asset('perfil.jpg') }}" alt="Carlos Angulo Pizarro" class="w-full h-full object-cover">
            </div>
            <!-- Decorative Ring -->
            <div class="absolute inset-0 w-40 h-40 rounded-full border-2 border-red-400/20 animate-spin-slow mx-auto"></div>
        </div>
        
        <!-- Enhanced Name with Typewriter Effect -->
        <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold mb-2 text-white drop-shadow-lg">
            <span class="typewriter-name bg-gradient-to-r from-white via-red-100 to-red-200 bg-clip-text text-transparent animate-fade-in">
                Carlos Angulo Pizarro
            </span>
        </h1>
        
        <!-- Improved Subtitle with Icons -->
        <div class="text-2xl md:text-3xl font-semibold text-red-400 mb-6 drop-shadow-md space-y-2">
            <div class="flex items-center justify-center gap-3 flex-wrap">
                <span class="inline-flex items-center gap-2 bg-red-500/20 backdrop-blur-sm rounded-full px-4 py-2 border border-red-500/30">
                    💻 Desarrollador de Software
                </span>
                <span class="inline-flex items-center gap-2 bg-red-500/20 backdrop-blur-sm rounded-full px-4 py-2 border border-red-500/30">
                    🎓 Docente de Matemáticas y Física
                </span>
            </div>
        </div>
    </div>
    <!-- Enhanced Description -->
    <div class="max-w-5xl mx-auto mb-8">
        <p class="text-lg md:text-xl text-gray-200 leading-relaxed drop-shadow-sm mb-6">
            Desarrollador web versátil con experiencia en 
            <span class="inline-flex items-center gap-1 text-red-400 font-semibold bg-red-500/20 px-2 py-1 rounded-md">
                <span class="text-sm">🐘</span> PHP (Laravel y MySQL)
            </span> 
            y sólidos fundamentos en frontend y backend con 
            <span class="inline-flex items-center gap-1 text-red-400 font-semibold bg-red-500/20 px-2 py-1 rounded-md">
                <span class="text-sm">🅰️</span> Angular
            </span>.
        </p>
        <p class="text-base md:text-lg text-gray-300 leading-relaxed">
            Licenciado en Pedagogía mención Matemática y Física con Maestría en Pedagogía en Entornos Digitales.
        </p>
        
        <!-- Skills Tags -->
        <div class="flex flex-wrap justify-center gap-2 mt-6">
            <span class="skill-tag px-3 py-1 bg-gradient-to-r from-red-500/20 to-red-600/20 text-red-300 text-sm rounded-full border border-red-500/30 hover:bg-red-500/30 transition-all cursor-pointer">PHP</span>
            <span class="skill-tag px-3 py-1 bg-gradient-to-r from-red-500/20 to-red-600/20 text-red-300 text-sm rounded-full border border-red-500/30 hover:bg-red-500/30 transition-all cursor-pointer">Laravel</span>
            <span class="skill-tag px-3 py-1 bg-gradient-to-r from-red-500/20 to-red-600/20 text-red-300 text-sm rounded-full border border-red-500/30 hover:bg-red-500/30 transition-all cursor-pointer">MySQL</span>
            <span class="skill-tag px-3 py-1 bg-gradient-to-r from-red-500/20 to-red-600/20 text-red-300 text-sm rounded-full border border-red-500/30 hover:bg-red-500/30 transition-all cursor-pointer">Angular</span>
            <span class="skill-tag px-3 py-1 bg-gradient-to-r from-red-500/20 to-red-600/20 text-red-300 text-sm rounded-full border border-red-500/30 hover:bg-red-500/30 transition-all cursor-pointer">JavaScript</span>
            <span class="skill-tag px-3 py-1 bg-gradient-to-r from-red-500/20 to-red-600/20 text-red-300 text-sm rounded-full border border-red-500/30 hover:bg-red-500/30 transition-all cursor-pointer">Docencia</span>
        </div>
    </div>
    
    <!-- Enhanced Contact Info -->
    <div class="flex flex-wrap justify-center gap-4 text-gray-300">
        <div class="contact-card group flex items-center gap-3 bg-white/10 backdrop-blur-sm rounded-xl px-4 py-3 hover:bg-white/20 hover:scale-105 transition-all duration-300 border border-white/10 hover:border-red-400/50">
            <span class="text-2xl group-hover:animate-bounce">📧</span>
            <div class="text-left">
                <div class="text-xs text-gray-400 uppercase tracking-wide">Email</div>
                <a href="mailto:cangulo009@outlook.es" class="text-sm font-medium hover:text-red-400 transition-colors">cangulo009@outlook.es</a>
            </div>
        </div>
        
        <div class="contact-card group flex items-center gap-3 bg-white/10 backdrop-blur-sm rounded-xl px-4 py-3 hover:bg-white/20 hover:scale-105 transition-all duration-300 border border-white/10">
            <span class="text-2xl group-hover:animate-pulse">📱</span>
            <div class="text-left">
                <div class="text-xs text-gray-400 uppercase tracking-wide">Teléfono</div>
                <span class="text-sm font-medium">+593 98 346 8115</span>
            </div>
        </div>
        
        <div class="contact-card group flex items-center gap-3 bg-white/10 backdrop-blur-sm rounded-xl px-4 py-3 hover:bg-white/20 hover:scale-105 transition-all duration-300 border border-white/10">
            <span class="text-2xl group-hover:animate-pulse">📍</span>
            <div class="text-left">
                <div class="text-xs text-gray-400 uppercase tracking-wide">Ubicación</div>
                <span class="text-sm font-medium">Quito, Ecuador</span>
            </div>
        </div>
        
        <div class="contact-card group flex items-center gap-3 bg-white/10 backdrop-blur-sm rounded-xl px-4 py-3 hover:bg-white/20 hover:scale-105 transition-all duration-300 border border-white/10 hover:border-blue-400/50">
            <span class="text-2xl group-hover:animate-bounce">💼</span>
            <div class="text-left">
                <div class="text-xs text-gray-400 uppercase tracking-wide">LinkedIn</div>
                <a href="https://linkedin.com/in/carlos-angulo" target="_blank" rel="noopener noreferrer" class="text-sm font-medium hover:text-blue-400 transition-colors">Carlos Angulo</a>
            </div>
        </div>
    </div>
    
    <!-- Call to Action Buttons -->
    <div class="flex flex-wrap justify-center gap-4 mt-8">
        <a href="#portfolio" class="group inline-flex items-center gap-2 bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white font-semibold px-6 py-3 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
            <span class="group-hover:animate-pulse">🚀</span>
            Ver Portfolio
        </a>
        <a href="#contact" class="group inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm border border-white/20 hover:bg-white/20 text-white font-semibold px-6 py-3 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
            <span class="group-hover:animate-bounce">📞</span>
            Contactar
        </a>
        <a href="/cv.pdf" target="_blank" class="group inline-flex items-center gap-2 bg-gradient-to-r from-gray-600 to-gray-700 hover:from-gray-700 hover:to-gray-800 text-white font-semibold px-6 py-3 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
            <span class="group-hover:animate-pulse">📄</span>
            Descargar CV
        </a>
    </div>
</div>
