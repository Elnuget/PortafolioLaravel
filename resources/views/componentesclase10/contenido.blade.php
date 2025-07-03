<!-- Componente de contenido principal -->
<div class="bg-gradient-to-br from-white via-gray-50 to-indigo-50 backdrop-blur-lg bg-opacity-90 rounded-2xl shadow-lg p-8 font-serif overflow-hidden relative transition-all duration-500 hover:shadow-xl">
    <!-- Efectos de fondo mejorados -->
    <div class="absolute top-0 right-0 w-72 h-72 bg-gradient-to-br from-indigo-500/10 to-purple-500/10 rounded-full -mt-16 -mr-16 blur-3xl animate-pulse"></div>
    <div class="absolute bottom-0 left-0 w-56 h-56 bg-gradient-to-tr from-blue-500/10 to-indigo-500/10 rounded-full -mb-12 -ml-12 blur-2xl animate-pulse delay-1000"></div>
    
    <div class="relative z-10">
        <!-- Header mejorado con animaciones y efectos -->
        <div class="mb-12">
            <h2 class="text-4xl font-black text-gray-800 mb-6 flex items-center group">
                <span class="bg-gradient-to-br from-indigo-600 via-indigo-700 to-purple-700 w-14 h-14 rounded-2xl flex items-center justify-center mr-6 shadow-md group-hover:shadow-indigo-500/25 transition-all duration-300 group-hover:scale-110 relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-white/20 to-transparent rounded-2xl"></div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white relative z-10 group-hover:rotate-12 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"/>
                    </svg>
                </span>
                <div class="flex flex-col">
                    <span class="block leading-tight text-3xl font-bold tracking-wide">Porcentajes</span>
                    <span class="text-lg text-indigo-700 font-semibold bg-indigo-100 px-4 py-2 rounded-xl mt-3 inline-flex items-center w-fit">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Matemáticas Básicas - 45 min
                    </span>
                </div>
            </h2>
            
            <!-- Línea divisoria elegante -->
            <div class="w-full h-px bg-gradient-to-r from-transparent via-indigo-500/50 to-transparent mb-6"></div>
            
            <!-- Indicador de progreso visual -->
            <div class="flex items-center space-x-3 mb-8">
                <div class="flex space-x-1">
                    <div class="w-3 h-3 bg-indigo-600 rounded-full animate-pulse"></div>
                    <div class="w-3 h-3 bg-indigo-500 rounded-full animate-pulse delay-150"></div>
                    <div class="w-3 h-3 bg-indigo-400 rounded-full animate-pulse delay-300"></div>
                </div>
                <span class="text-base text-gray-600 font-medium">3 secciones interactivas</span>
            </div>
        </div>
        
        <!-- Contenedor de contenido modular -->
        <div class="prose prose-xl font-sans leading-relaxed max-w-none text-gray-700 relative">
            <!-- Overlay sutil para mejor legibilidad -->
            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-white/10 to-transparent pointer-events-none rounded-xl"></div>
            
            <!-- Contenido principal con espaciado mejorado y estructura modular -->
            <div class="space-y-8 relative z-10">
                @include('componentesclase10.subcontent.seccion1')
                @include('componentesclase10.subcontent.seccion2')
                @include('componentesclase10.subcontent.seccion3')
                @include('componentesclase10.subcontent.seccion4')
            </div>
            
            <!-- Footer con información adicional -->
            <div class="mt-12 pt-8 border-t border-gray-200">
                <div class="flex items-center justify-between text-base text-gray-600">
                    <div class="flex items-center space-x-6">
                        <span class="flex items-center">
                            <svg class="w-5 h-5 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Matemáticas
                        </span>
                        <span class="flex items-center">
                            <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            Aritmética
                        </span>
                    </div>
                    <div class="text-right">
                        <p class="text-gray-500 text-lg">Diseñado para</p>
                        <p class="text-indigo-700 font-semibold text-lg">Estudiantes de secundaria</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
