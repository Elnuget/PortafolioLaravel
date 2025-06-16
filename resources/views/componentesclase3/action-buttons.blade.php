<!-- Componente de botones de acción para la clase de Jerarquía de operaciones -->
<div class="mt-12 flex flex-col sm:flex-row gap-6 justify-center font-['Poppins',sans-serif]">
    <!-- Botón de material de práctica -->
    <button class="group bg-gradient-to-r from-blue-700 to-blue-900 hover:from-blue-800 hover:to-blue-950 text-white font-bold py-4 px-8 rounded-xl transition-all duration-300 shadow-lg hover:shadow-blue-700/30 hover:shadow-xl flex items-center relative overflow-hidden">
        <span class="absolute inset-0 w-full h-full transition-all duration-300 ease-out transform translate-x-0 -skew-x-12 bg-blue-900 group-hover:skew-x-12 group-hover:translate-x-full"></span>
        <span class="absolute inset-0 w-full h-full transition-all duration-300 ease-out transform skew-x-12 translate-x-full bg-blue-800 group-hover:-skew-x-12 group-hover:translate-x-0"></span>
        <span class="relative flex items-center">
            <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
            </svg>
            Ejercicios de Práctica
        </span>
    </button>
    
    <!-- Botón de calculadora interactiva -->
    <button class="group bg-black border-2 border-blue-600 hover:border-blue-500 text-white font-bold py-4 px-8 rounded-xl transition-all duration-300 shadow-lg hover:shadow-blue-600/20 flex items-center relative overflow-hidden">
        <span class="absolute bottom-0 left-0 w-full h-1 bg-gradient-to-r from-blue-600 to-blue-800 transform origin-left scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
        <span class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-blue-800 to-blue-600 transform origin-right scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
        <span class="relative flex items-center">
            <svg class="w-6 h-6 mr-3 text-blue-500 group-hover:text-blue-400 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
            </svg>
            Calculadora Interactiva
        </span>
    </button>
    
    <!-- Botón de examen de práctica -->
    <button class="group bg-gradient-to-br from-black to-blue-950 hover:from-blue-950 hover:to-black text-white font-bold py-4 px-8 rounded-xl transition-all duration-300 shadow-lg hover:shadow-blue-900/20 flex items-center">
        <span class="relative flex items-center">
            <svg class="w-6 h-6 mr-3 text-blue-500 group-hover:text-blue-400 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
            </svg>
            Examen de Práctica EPN
            <span class="ml-2 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-blue-100 bg-blue-800 rounded-full">NUEVO</span>
        </span>
    </button>
</div>
