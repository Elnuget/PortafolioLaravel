<!-- Subcomponente de cronograma de clase -->
<div class="bg-gradient-to-br from-emerald-950 via-teal-950 to-cyan-950 rounded-xl p-6 shadow-2xl border border-emerald-600/30 backdrop-blur-lg relative overflow-hidden">
    <div class="absolute top-0 right-0 w-32 h-32 bg-emerald-500/10 rounded-full blur-2xl"></div>
    <div class="absolute bottom-0 left-0 w-20 h-20 bg-teal-500/10 rounded-full blur-xl"></div>
    
    <h3 class="text-xl font-bold text-emerald-300 mb-5 flex items-center relative z-10">
        <svg class="w-6 h-6 mr-2 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
        Cronograma de 3 Horas
    </h3>
    
    <div class="space-y-4 relative z-10">
        <!-- Módulo 1 -->
        <div class="bg-gradient-to-r from-emerald-900/40 to-teal-900/40 rounded-lg p-4 border border-emerald-600/20 backdrop-blur-sm">
            <div class="flex items-center justify-between mb-2">
                <h4 class="font-semibold text-emerald-200">Módulo I: Fundamentos Avanzados</h4>
                <span class="text-xs bg-emerald-700/50 px-2 py-1 rounded-full text-emerald-300">60 min</span>
            </div>
            <ul class="text-sm text-emerald-100 space-y-1">
                <li class="flex items-center">
                    <div class="w-1.5 h-1.5 bg-emerald-400 rounded-full mr-2"></div>
                    Algoritmos de factorización prima
                </li>
                <li class="flex items-center">
                    <div class="w-1.5 h-1.5 bg-emerald-400 rounded-full mr-2"></div>
                    Propiedades distributivas del MCD
                </li>
                <li class="flex items-center">
                    <div class="w-1.5 h-1.5 bg-emerald-400 rounded-full mr-2"></div>
                    Identidad de Bézout
                </li>
            </ul>
        </div>
        
        <!-- Módulo 2 -->
        <div class="bg-gradient-to-r from-teal-900/40 to-cyan-900/40 rounded-lg p-4 border border-teal-600/20 backdrop-blur-sm">
            <div class="flex items-center justify-between mb-2">
                <h4 class="font-semibold text-teal-200">Módulo II: Aplicaciones Complejas</h4>
                <span class="text-xs bg-teal-700/50 px-2 py-1 rounded-full text-teal-300">75 min</span>
            </div>
            <ul class="text-sm text-teal-100 space-y-1">
                <li class="flex items-center">
                    <div class="w-1.5 h-1.5 bg-teal-400 rounded-full mr-2"></div>
                    Problemas de optimización con MCD/MCM
                </li>
                <li class="flex items-center">
                    <div class="w-1.5 h-1.5 bg-teal-400 rounded-full mr-2"></div>
                    Ecuaciones diofánticas lineales
                </li>
                <li class="flex items-center">
                    <div class="w-1.5 h-1.5 bg-teal-400 rounded-full mr-2"></div>
                    Congruencias y aritmética modular
                </li>
            </ul>
        </div>
        
        <!-- Descanso -->
        <div class="bg-gradient-to-r from-amber-900/30 to-orange-900/30 rounded-lg p-3 border border-amber-600/20 backdrop-blur-sm">
            <div class="flex items-center justify-center">
                <svg class="w-4 h-4 mr-2 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707"></path>
                </svg>
                <span class="text-amber-300 font-medium">Descanso</span>
                <span class="text-xs bg-amber-700/50 px-2 py-1 rounded-full text-amber-300 ml-2">15 min</span>
            </div>
        </div>
        
        <!-- Módulo 3 -->
        <div class="bg-gradient-to-r from-cyan-900/40 to-blue-900/40 rounded-lg p-4 border border-cyan-600/20 backdrop-blur-sm">
            <div class="flex items-center justify-between mb-2">
                <h4 class="font-semibold text-cyan-200">Módulo III: Olimpiadas & Competencias</h4>
                <span class="text-xs bg-cyan-700/50 px-2 py-1 rounded-full text-cyan-300">90 min</span>
            </div>
            <ul class="text-sm text-cyan-100 space-y-1">
                <li class="flex items-center">
                    <div class="w-1.5 h-1.5 bg-cyan-400 rounded-full mr-2"></div>
                    Problemas de competencias internacionales
                </li>
                <li class="flex items-center">
                    <div class="w-1.5 h-1.5 bg-cyan-400 rounded-full mr-2"></div>
                    Técnicas de resolución rápida
                </li>
                <li class="flex items-center">
                    <div class="w-1.5 h-1.5 bg-cyan-400 rounded-full mr-2"></div>
                    Simulacro de examen cronometrado
                </li>
            </ul>
        </div>
    </div>
</div>
