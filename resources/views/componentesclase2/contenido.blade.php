<!-- Componente de contenido principal -->
<div class="bg-gradient-to-br from-gray-800 via-gray-900 to-black backdrop-blur-lg bg-opacity-90 rounded-2xl shadow-[0_10px_30px_rgba(0,0,0,0.5)] p-12 font-serif overflow-hidden relative transition-all duration-500 hover:shadow-[0_15px_40px_rgba(0,0,0,0.7)]">
    <!-- Efectos de fondo mejorados -->
    <div class="absolute top-0 right-0 w-72 h-72 bg-gradient-to-br from-red-500/10 to-pink-500/10 rounded-full -mt-16 -mr-16 blur-3xl animate-pulse"></div>
    <div class="absolute bottom-0 left-0 w-56 h-56 bg-gradient-to-tr from-purple-500/10 to-indigo-500/10 rounded-full -mb-12 -ml-12 blur-2xl animate-pulse delay-1000"></div>
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-gradient-radial from-blue-500/5 to-transparent rounded-full blur-3xl"></div>
    
    <div class="relative z-10">
        <!-- Header mejorado con animaciones y efectos -->
        <div class="mb-12">
            <h2 class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-white via-gray-100 to-white mb-4 flex items-center group">
                <span class="bg-gradient-to-br from-red-600 via-red-500 to-pink-600 w-14 h-14 rounded-xl flex items-center justify-center mr-5 shadow-xl group-hover:shadow-red-500/25 transition-all duration-300 group-hover:scale-110 relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-white/20 to-transparent rounded-xl"></div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white relative z-10 group-hover:rotate-12 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                    </svg>
                </span>
                <div class="flex flex-col">
                    <span class="block leading-tight">Contenido de la Clase Magistral</span>
                    <span class="text-sm text-red-300 font-medium bg-red-900/20 px-3 py-1 rounded-full mt-2 inline-flex items-center w-fit">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Planteo de Ecuaciones - Nivel EPN (3 horas - 180 min)
                    </span>
                </div>
            </h2>
            
            <!-- Línea divisoria elegante -->
            <div class="w-full h-px bg-gradient-to-r from-transparent via-red-500/50 to-transparent mb-6"></div>
            
            <!-- Indicador de progreso visual -->
            <div class="flex items-center space-x-2 mb-6">
                <div class="flex space-x-1">
                    <div class="w-2 h-2 bg-red-500 rounded-full animate-pulse"></div>
                    <div class="w-2 h-2 bg-red-400 rounded-full animate-pulse delay-150"></div>
                    <div class="w-2 h-2 bg-red-300 rounded-full animate-pulse delay-300"></div>
                </div>
                <span class="text-xs text-gray-400 font-medium">10 secciones interactivas</span>
            </div>
        </div>
        
        <!-- Contenedor de contenido mejorado -->
        <div class="prose prose-lg font-serif leading-relaxed max-w-none text-gray-200 relative">
            <!-- Overlay sutil para mejor legibilidad -->
            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-gray-900/10 to-transparent pointer-events-none rounded-xl"></div>
            
            <!-- Contenido principal con espaciado mejorado -->
            <div class="space-y-8 relative z-10">
                @include('componentesclase2.subcontent.introduccion')
                @include('componentesclase2.subcontent.fundamentos_algebraicos')
                @include('componentesclase2.subcontent.ecuaciones_lineales')
                @include('componentesclase2.subcontent.sistemas_ecuaciones')
                @include('componentesclase2.subcontent.ejercicios_practicos')
                @include('componentesclase2.subcontent.descanso')
                @include('componentesclase2.subcontent.problemas_epn')
                @include('componentesclase2.subcontent.ejemplos')
                @include('componentesclase2.subcontent.aplicaciones_ingenieria')
                @include('componentesclase2.subcontent.resumen')
            </div>
            
            <!-- Footer con información adicional -->
            <div class="mt-12 pt-8 border-t border-gray-700/50">
                <div class="flex items-center justify-between text-sm text-gray-400">
                    <div class="flex items-center space-x-4">
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-1 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Contenido completo
                        </span>
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-1 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            Nivel avanzado
                        </span>
                    </div>
                    <div class="text-right">
                        <p class="text-gray-500">Clase magistral diseñada para</p>
                        <p class="text-red-300 font-medium">Estudiantes de matemáticas</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
