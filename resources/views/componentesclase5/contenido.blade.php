<!-- Contenido principal para Clase 5: Física - Cantidades Físicas -->
<div class="bg-gradient-to-br from-gray-800 via-gray-900 to-black backdrop-blur-lg bg-opacity-90 rounded-2xl shadow-[0_10px_30px_rgba(0,0,0,0.5)] p-12 font-serif overflow-hidden relative transition-all duration-500 hover:shadow-[0_15px_40px_rgba(0,0,0,0.7)]">
    <!-- Efectos de fondo mejorados -->
    <div class="absolute top-0 right-0 w-72 h-72 bg-gradient-to-br from-red-500/10 to-pink-500/10 rounded-full -mt-16 -mr-16 blur-3xl animate-pulse"></div>
    <div class="absolute bottom-0 left-0 w-56 h-56 bg-gradient-to-tr from-purple-500/10 to-indigo-500/10 rounded-full -mb-12 -ml-12 blur-2xl animate-pulse delay-1000"></div>
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-gradient-radial from-blue-500/5 to-transparent rounded-full blur-3xl"></div>
    
    <div class="relative z-10">
        <!-- Header mejorado con animaciones y efectos -->
        <div class="mb-12">
            <h2 class="text-5xl font-black text-transparent bg-clip-text bg-gradient-to-r from-white via-gray-100 to-white mb-6 flex items-center group">
                <span class="bg-gradient-to-br from-red-600 via-red-500 to-pink-600 w-16 h-16 rounded-2xl flex items-center justify-center mr-6 shadow-xl group-hover:shadow-red-500/25 transition-all duration-300 group-hover:scale-110 relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-white/20 to-transparent rounded-2xl"></div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-9 w-9 text-white relative z-10 group-hover:rotate-12 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                </span>
                <div class="flex flex-col">
                    <span class="block leading-tight text-3xl font-bold tracking-wide">Física: Cantidades Físicas</span>
                    <span class="text-lg text-red-300 font-semibold bg-red-900/20 px-4 py-2 rounded-xl mt-3 inline-flex items-center w-fit">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Fundamentos y Sistema Internacional (5 módulos - 120 min)
                    </span>
                </div>
            </h2>
            
            <!-- Línea divisoria elegante -->
            <div class="w-full h-px bg-gradient-to-r from-transparent via-red-500/50 to-transparent mb-6"></div>
            
            <!-- Indicador de progreso visual -->
            <div class="flex items-center space-x-3 mb-8">
                <div class="flex space-x-1">
                    <div class="w-3 h-3 bg-red-500 rounded-full animate-pulse"></div>
                    <div class="w-3 h-3 bg-red-400 rounded-full animate-pulse delay-150"></div>
                    <div class="w-3 h-3 bg-red-300 rounded-full animate-pulse delay-300"></div>
                </div>
                <span class="text-base text-gray-300 font-medium">5 módulos interactivos</span>
            </div>
        </div>
        
        <!-- Contenedor de contenido modular -->
        <div class="prose prose-xl font-sans leading-relaxed max-w-none text-gray-200 relative">
            <!-- Overlay sutil para mejor legibilidad -->
            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-gray-900/10 to-transparent pointer-events-none rounded-xl"></div>
            
            <!-- Contenido principal con espaciado mejorado y estructura modular -->
            <div class="space-y-8 relative z-10">
                @include('componentesclase5.subcontent.modulo1')
                @include('componentesclase5.subcontent.modulo2')
                @include('componentesclase5.subcontent.modulo3')
                @include('componentesclase5.subcontent.modulo4')
                @include('componentesclase5.subcontent.modulo5')
            </div>
            
            <!-- Footer con información adicional -->
            <div class="mt-12 pt-8 border-t border-gray-700/50">
                <div class="flex items-center justify-between text-base text-gray-400">
                    <div class="flex items-center space-x-6">
                        <span class="flex items-center">
                            <svg class="w-5 h-5 mr-2 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Sistema Internacional
                        </span>
                        <span class="flex items-center">
                            <svg class="w-5 h-5 mr-2 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            Análisis Dimensional
                        </span>
                    </div>
                    <div class="text-right">
                        <p class="text-gray-500 text-lg">Diseñado para</p>
                        <p class="text-red-300 font-semibold text-lg">Estudiantes de Física</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
