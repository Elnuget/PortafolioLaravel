<!-- Botones de acción para Clase 5: Física - Cantidades Físicas -->
<div class="flex flex-wrap justify-center gap-6 mt-8">
    <!-- Botón principal de navegación de módulos -->
    <button class="bg-gradient-to-r from-red-600 to-pink-600 hover:from-red-700 hover:to-pink-700 text-white font-bold py-4 px-8 rounded-xl shadow-lg hover:shadow-red-900/30 transition-all duration-300 transform hover:scale-105 flex items-center group">
        <svg class="w-6 h-6 mr-3 group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
        </svg>
        Iniciar Presentación
    </button>
      <!-- Botón de descarga de material -->
    <a href="{{ route('clase5.material') }}" class="bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-bold py-4 px-8 rounded-xl shadow-lg hover:shadow-blue-900/30 transition-all duration-300 transform hover:scale-105 flex items-center group">
        <svg class="w-6 h-6 mr-3 group-hover:translate-y-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
        </svg>
        Descargar Material
    </a>
    
    <!-- Botón de calculadora científica -->
    <button class="bg-gradient-to-r from-green-600 to-emerald-600 hover:from-green-700 hover:to-emerald-700 text-white font-bold py-4 px-8 rounded-xl shadow-lg hover:shadow-green-900/30 transition-all duration-300 transform hover:scale-105 flex items-center group">
        <svg class="w-6 h-6 mr-3 group-hover:rotate-180 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
        </svg>
        Calculadora
    </button>
    
    <!-- Botón de simulaciones -->
    <button class="bg-gradient-to-r from-purple-600 to-violet-600 hover:from-purple-700 hover:to-violet-700 text-white font-bold py-4 px-8 rounded-xl shadow-lg hover:shadow-purple-900/30 transition-all duration-300 transform hover:scale-105 flex items-center group">
        <svg class="w-6 h-6 mr-3 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4V2a1 1 0 011-1h8a1 1 0 011 1v2m0 0V1a1 1 0 011-1h2a1 1 0 011 1v18a1 1 0 01-1 1H4a1 1 0 01-1-1V4a1 1 0 011-1h2a1 1 0 011 1v0"></path>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"></path>
        </svg>
        Simulaciones
    </button>
</div>

<!-- Enlaces de navegación adicionales -->
<div class="mt-8 text-center">
    <div class="flex flex-wrap justify-center gap-4 text-sm">
        <a href="{{ route('clase5.modulo', 1) }}" class="text-blue-400 hover:text-blue-300 transition-colors duration-200 flex items-center">
            <span class="mr-1">📐</span> Módulo 1: Fundamentos
        </a>
        <a href="{{ route('clase5.modulo', 2) }}" class="text-green-400 hover:text-green-300 transition-colors duration-200 flex items-center">
            <span class="mr-1">⚖️</span> Módulo 2: Magnitudes
        </a>
        <a href="{{ route('clase5.modulo', 3) }}" class="text-yellow-400 hover:text-yellow-300 transition-colors duration-200 flex items-center">
            <span class="mr-1">🔬</span> Módulo 3: Análisis Dimensional
        </a>
        <a href="{{ route('clase5.modulo', 4) }}" class="text-purple-400 hover:text-purple-300 transition-colors duration-200 flex items-center">
            <span class="mr-1">🎯</span> Módulo 4: Medición
        </a>
        <a href="{{ route('clase5.modulo', 5) }}" class="text-red-400 hover:text-red-300 transition-colors duration-200 flex items-center">
            <span class="mr-1">🔢</span> Módulo 5: Vectores
        </a>
    </div>
</div>

<!-- Información de contacto y recursos -->
<div class="mt-12 text-center">
    <div class="bg-gray-800/50 rounded-lg p-6 border border-gray-700">
        <h4 class="text-lg font-semibold text-white mb-4">Recursos Complementarios</h4>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm">
            <div class="flex items-center justify-center text-gray-300">
                <svg class="w-4 h-4 mr-2 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                </svg>
                Manual de Laboratorio
            </div>
            <div class="flex items-center justify-center text-gray-300">
                <svg class="w-4 h-4 mr-2 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                </svg>
                Videos Explicativos
            </div>
            <div class="flex items-center justify-center text-gray-300">
                <svg class="w-4 h-4 mr-2 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                Ejercicios Resueltos
            </div>
        </div>
    </div>
</div>
