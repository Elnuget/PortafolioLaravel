<!-- Componente Breadcrumb para la navegación -->
<nav class="flex mb-10 bg-black bg-opacity-50 p-4 rounded-lg backdrop-blur-sm" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-3 w-full">
        <li class="inline-flex items-center">
            <a href="{{ route('welcome') }}" class="inline-flex items-center text-sm font-medium text-gray-300 hover:text-red-400 transition duration-300 font-['Poppins',sans-serif]">
                <svg class="w-5 h-5 mr-2 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                </svg>
                Inicio
            </a>
        </li>
        <li class="inline-flex items-center">
            <div class="flex items-center">
                <svg class="w-6 h-6 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
                <a href="#" class="ml-1 text-sm font-medium text-gray-300 hover:text-red-400 md:ml-2 transition duration-300 font-['Poppins',sans-serif]">Categoría</a>
            </div>
        </li>
        <li aria-current="page">
            <div class="flex items-center">
                <svg class="w-6 h-6 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
                <span class="ml-1 text-sm font-medium text-red-400 md:ml-2 font-['Poppins',sans-serif]">Nombre de la Clase</span>
            </div>
        </li>
        <li class="ml-auto">
            <span class="bg-red-800 text-white px-3 py-1 rounded-full text-xs font-bold font-['Poppins',sans-serif] tracking-wide">ETIQUETA</span>
        </li>
    </ol>
</nav>
