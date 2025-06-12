<!-- Componente de contenido principal -->
<div class="bg-gray-900 backdrop-blur-lg bg-opacity-80 rounded-xl shadow-2xl p-8 border-l-4 border-red-600 font-['Poppins',sans-serif] overflow-hidden relative">
    <div class="absolute top-0 right-0 w-64 h-64 bg-red-600 opacity-5 rounded-full -mt-12 -mr-12"></div>
    
    <h2 class="text-3xl font-bold text-white mb-8 flex items-center">
        <span class="bg-red-600 w-10 h-10 rounded-lg flex items-center justify-center mr-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
            </svg>
        </span>
        Contenido de la Clase
    </h2>
    
    <div class="prose max-w-none text-gray-300">
        @include('componentesclase1.subcontent.objetivos')
        @include('componentesclase1.subcontent.temas')
        @include('componentesclase1.subcontent.formulas')
        @include('componentesclase1.subcontent.ejemplos')
    </div>
</div>
