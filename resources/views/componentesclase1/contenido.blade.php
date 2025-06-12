<!-- Componente de contenido principal -->
<div class="bg-gradient-to-br from-gray-900 via-slate-900 to-gray-900 backdrop-blur-lg bg-opacity-90 rounded-xl shadow-2xl p-8 border-l-4 border-red-600 font-['Poppins',sans-serif] overflow-hidden relative">
    <div class="absolute top-0 right-0 w-64 h-64 bg-red-600 opacity-5 rounded-full -mt-12 -mr-12"></div>
    <div class="absolute bottom-0 left-0 w-48 h-48 bg-purple-600 opacity-5 rounded-full -mb-8 -ml-8"></div>
    
    <div class="relative z-10">
        <h2 class="text-3xl font-bold text-white mb-8 flex items-center">
            <span class="bg-gradient-to-r from-red-600 to-red-500 w-12 h-12 rounded-lg flex items-center justify-center mr-4 shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                </svg>
            </span>
            <div>
                <span class="block">Contenido de la Clase Magistral</span>
                <span class="text-sm text-red-300 font-normal">MCD y MCM - Nivel Avanzado (3 horas)</span>
            </div>
        </h2>
        
        <div class="prose max-w-none text-gray-300">
            @include('componentesclase1.subcontent.numeros_primos_compuestos')
            @include('componentesclase1.subcontent.descomposicion_numeros_primos')
            @include('componentesclase1.subcontent.ejercicios_descomposicion')
            @include('componentesclase1.subcontent.mcd_mcm_descomposicion')
            @include('componentesclase1.subcontent.pausa_activa_mcd_mcm')
            @include('componentesclase1.subcontent.ejercicios_mcd_mcm')
            @include('componentesclase1.subcontent.problemas_mcd_mcm')
            @include('componentesclase1.subcontent.aplicaciones_mcd_mcm')
        </div>
    </div>
</div>
