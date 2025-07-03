<!-- Componente de botones de acción -->
<div class="mt-12 flex flex-col sm:flex-row gap-6 justify-center font-['Poppins',sans-serif]">
    <!-- Botón principal -->
    <button class="group bg-gradient-to-r from-indigo-600 to-indigo-800 hover:from-indigo-700 hover:to-indigo-900 text-white font-bold py-4 px-8 rounded-xl transition-all duration-300 shadow-lg hover:shadow-indigo-500/30 hover:shadow-xl flex items-center relative overflow-hidden">
        <span class="absolute inset-0 w-full h-full transition-all duration-300 ease-out transform translate-x-0 -skew-x-12 bg-indigo-800 group-hover:skew-x-12 group-hover:translate-x-full"></span>
        <span class="absolute inset-0 w-full h-full transition-all duration-300 ease-out transform skew-x-12 translate-x-full bg-indigo-700 group-hover:-skew-x-12 group-hover:translate-x-0"></span>
        <span class="relative flex items-center">
            <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
            </svg>
            Descargar Material
        </span>
    </button>
    
    <!-- Botón secundario -->
    <button class="group bg-white border-2 border-indigo-600 hover:border-indigo-500 text-gray-800 font-bold py-4 px-8 rounded-xl transition-all duration-300 shadow-lg hover:shadow-indigo-500/20 flex items-center relative overflow-hidden">
        <span class="absolute bottom-0 left-0 w-full h-1 bg-gradient-to-r from-indigo-600 to-indigo-800 transform origin-left scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
        <span class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-indigo-800 to-indigo-600 transform origin-right scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
        <span class="relative flex items-center">
            <svg class="w-6 h-6 mr-3 text-indigo-600 group-hover:text-indigo-500 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"></path>
            </svg>
            Ejercicios Prácticos
        </span>
    </button>
    
    <!-- Botón terciario con etiqueta -->
    <button class="group bg-gradient-to-br from-white to-indigo-50 hover:from-indigo-50 hover:to-white text-gray-800 font-bold py-4 px-8 rounded-xl border border-gray-200 transition-all duration-300 shadow-md hover:shadow-lg flex items-center">
        <span class="relative flex items-center">
            <svg class="w-6 h-6 mr-3 text-indigo-600 group-hover:text-indigo-500 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
            </svg>
            Recursos Adicionales
            <span class="ml-2 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-indigo-100 bg-indigo-700 rounded-full">NUEVO</span>
        </span>
    </button>
</div>
