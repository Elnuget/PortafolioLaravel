@extends('layouts.app')

@section('title', 'Mi Portafolio Académico - Laravel')

@section('content')
<!-- Hero Section -->
<div class="min-h-screen bg-gradient-to-br from-red-600 via-red-800 to-black text-white">
    <div class="container mx-auto px-6 py-20">
        <!-- Header -->
        <div class="text-center mb-16">
            <h1 class="text-6xl font-bold mb-6 animate-fade-in">
                🎓 Mi Portafolio de Matemáticas y Física
            </h1>
            <p class="text-xl text-red-100 max-w-3xl mx-auto leading-relaxed">
                Bienvenido a mi portafolio académico especializado en Matemáticas y Física, construido con Laravel y Tailwind CSS. 
                Aquí encontrarás una colección completa de mis trabajos en razonamiento numérico, ecuaciones, y física fundamental.
            </p>
        </div>

        <!-- Classes Grid -->
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12 text-white">📚 Mis Clases de Matemáticas y Física</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Clase 1 -->
                <div class="bg-black/20 backdrop-blur-lg rounded-2xl p-8 border border-red-500/30 hover:bg-red-900/30 transition-all duration-300 hover:scale-105 hover:shadow-2xl hover:shadow-red-500/20 group">
                    <div class="flex items-center justify-center w-16 h-16 bg-gradient-to-r from-red-500 to-red-700 rounded-full mb-6 mx-auto group-hover:from-red-400 group-hover:to-red-600 transition-all duration-300">
                        <span class="text-2xl">🔢</span>
                    </div>
                    <h3 class="text-2xl font-bold text-center mb-4">Clase 1</h3>
                    <p class="text-red-100 text-center mb-6 leading-relaxed">
                        <strong>MCD y MCM</strong><br>
                        Máximo Común Divisor y Mínimo Común Múltiplo - Razonamiento Numérico para Admisiones Universitarias.
                    </p>
                    <div class="text-center">
                        <a href="{{ route('clase1.index') }}" class="inline-flex items-center justify-center bg-red-600 hover:bg-red-700 text-white font-semibold py-3 px-6 rounded-xl transition-colors duration-200 shadow-lg hover:shadow-xl">
                            <span class="mr-2">🧮</span>
                            Explorar Clase 1
                        </a>
                    </div>
                </div>

                <!-- Clase 2 -->
                <div class="bg-black/20 backdrop-blur-lg rounded-2xl p-8 border border-red-500/30 hover:bg-red-900/30 transition-all duration-300 hover:scale-105 hover:shadow-2xl hover:shadow-red-500/20 group">
                    <div class="flex items-center justify-center w-16 h-16 bg-gradient-to-r from-red-500 to-red-700 rounded-full mb-6 mx-auto group-hover:from-red-400 group-hover:to-red-600 transition-all duration-300">
                        <span class="text-2xl">📐</span>
                    </div>
                    <h3 class="text-2xl font-bold text-center mb-4">Clase 2</h3>
                    <p class="text-red-100 text-center mb-6 leading-relaxed">
                        <strong>Planteo de Ecuaciones</strong><br>
                        Resolución de problemas mediante ecuaciones - Preparación para Examen de Admisión EPN.
                    </p>
                    <div class="text-center">
                        <a href="{{ route('clase2.index') }}" class="inline-flex items-center justify-center bg-red-600 hover:bg-red-700 text-white font-semibold py-3 px-6 rounded-xl transition-colors duration-200 shadow-lg hover:shadow-xl">
                            <span class="mr-2">📊</span>
                            Explorar Clase 2
                        </a>
                    </div>
                </div>

                <!-- Clase 3 -->
                <div class="bg-black/20 backdrop-blur-lg rounded-2xl p-8 border border-red-500/30 hover:bg-red-900/30 transition-all duration-300 hover:scale-105 hover:shadow-2xl hover:shadow-red-500/20 group">
                    <div class="flex items-center justify-center w-16 h-16 bg-gradient-to-r from-red-500 to-red-700 rounded-full mb-6 mx-auto group-hover:from-red-400 group-hover:to-red-600 transition-all duration-300">
                        <span class="text-2xl">🔀</span>
                    </div>
                    <h3 class="text-2xl font-bold text-center mb-4">Clase 3</h3>
                    <p class="text-red-100 text-center mb-6 leading-relaxed">
                        <strong>Jerarquía de Operaciones</strong><br>
                        Orden de las operaciones matemáticas y razonamiento numérico sistemático.
                    </p>
                    <div class="text-center">
                        <a href="{{ route('clase3.index') }}" class="inline-flex items-center justify-center bg-red-600 hover:bg-red-700 text-white font-semibold py-3 px-6 rounded-xl transition-colors duration-200 shadow-lg hover:shadow-xl">
                            <span class="mr-2">🎯</span>
                            Explorar Clase 3
                        </a>
                    </div>
                </div>

                <!-- Clase 4 -->
                <div class="bg-black/20 backdrop-blur-lg rounded-2xl p-8 border border-red-500/30 hover:bg-red-900/30 transition-all duration-300 hover:scale-105 hover:shadow-2xl hover:shadow-red-500/20 group">
                    <div class="flex items-center justify-center w-16 h-16 bg-gradient-to-r from-red-500 to-red-700 rounded-full mb-6 mx-auto group-hover:from-red-400 group-hover:to-red-600 transition-all duration-300">
                        <span class="text-2xl">⚖️</span>
                    </div>
                    <h3 class="text-2xl font-bold text-center mb-4">Clase 4</h3>
                    <p class="text-red-100 text-center mb-6 leading-relaxed">
                        <strong>Ecuaciones Lineales</strong><br>
                        Fundamentos y aplicaciones de las ecuaciones lineales - Resolución sistemática.
                    </p>
                    <div class="text-center">
                        <a href="{{ route('clase4.index') }}" class="inline-flex items-center justify-center bg-red-600 hover:bg-red-700 text-white font-semibold py-3 px-6 rounded-xl transition-colors duration-200 shadow-lg hover:shadow-xl">
                            <span class="mr-2">📏</span>
                            Explorar Clase 4
                        </a>
                    </div>
                </div>

                <!-- Clase 5 -->
                <div class="bg-black/20 backdrop-blur-lg rounded-2xl p-8 border border-red-500/30 hover:bg-red-900/30 transition-all duration-300 hover:scale-105 hover:shadow-2xl hover:shadow-red-500/20 group">
                    <div class="flex items-center justify-center w-16 h-16 bg-gradient-to-r from-red-500 to-red-700 rounded-full mb-6 mx-auto group-hover:from-red-400 group-hover:to-red-600 transition-all duration-300">
                        <span class="text-2xl">⚛️</span>
                    </div>
                    <h3 class="text-2xl font-bold text-center mb-4">Clase 5</h3>
                    <p class="text-red-100 text-center mb-6 leading-relaxed">
                        <strong>Física: Cantidades Físicas</strong><br>
                        Fundamentos y aplicaciones de las cantidades físicas - Sistema Internacional de Unidades.
                    </p>
                    <div class="text-center">
                        <a href="{{ route('clase5.index') }}" class="inline-flex items-center justify-center bg-red-600 hover:bg-red-700 text-white font-semibold py-3 px-6 rounded-xl transition-colors duration-200 shadow-lg hover:shadow-xl">
                            <span class="mr-2">🔬</span>
                            Explorar Clase 5
                        </a>
                    </div>
                </div>

                <!-- Formato de Clase -->
                <div class="bg-black/20 backdrop-blur-lg rounded-2xl p-8 border border-red-500/30 hover:bg-red-900/30 transition-all duration-300 hover:scale-105 hover:shadow-2xl hover:shadow-red-500/20 group">
                    <div class="flex items-center justify-center w-16 h-16 bg-gradient-to-r from-red-500 to-red-700 rounded-full mb-6 mx-auto group-hover:from-red-400 group-hover:to-red-600 transition-all duration-300">
                        <span class="text-2xl">📄</span>
                    </div>
                    <h3 class="text-2xl font-bold text-center mb-4">Formato</h3>
                    <p class="text-red-100 text-center mb-6 leading-relaxed">
                        <strong>Plantilla de Clase</strong><br>
                        Formato estándar y estructura base para todas las clases del portafolio académico.
                    </p>
                    <div class="text-center">
                        <a href="{{ route('claseformato.index') }}" class="inline-flex items-center justify-center bg-red-600 hover:bg-red-700 text-white font-semibold py-3 px-6 rounded-xl transition-colors duration-200 shadow-lg hover:shadow-xl">
                            <span class="mr-2">📋</span>
                            Ver Formato
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Section -->
        <div class="mt-20 text-center">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 max-w-4xl mx-auto">
                <div class="bg-black/20 backdrop-blur-lg rounded-xl p-6 border border-red-500/30">
                    <div class="text-3xl font-bold text-white mb-2">5</div>
                    <div class="text-red-100">Temas Matemáticos</div>
                </div>
                <div class="bg-black/20 backdrop-blur-lg rounded-xl p-6 border border-red-500/30">
                    <div class="text-3xl font-bold text-white mb-2">1</div>
                    <div class="text-red-100">Tema de Física</div>
                </div>
                <div class="bg-black/20 backdrop-blur-lg rounded-xl p-6 border border-red-500/30">
                    <div class="text-3xl font-bold text-white mb-2">100%</div>
                    <div class="text-red-100">Preparación EPN</div>
                </div>
                <div class="bg-black/20 backdrop-blur-lg rounded-xl p-6 border border-red-500/30">
                    <div class="text-3xl font-bold text-white mb-2">Laravel</div>
                    <div class="text-red-100">Framework Web</div>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="text-center mt-16">
            <div class="bg-black/20 backdrop-blur-lg rounded-2xl p-8 border border-red-500/30 max-w-2xl mx-auto">
                <h3 class="text-2xl font-bold mb-4">¿Listo para estudiar?</h3>
                <p class="text-red-100 mb-6">
                    Cada clase contiene conceptos fundamentales de matemáticas y física con ejemplos prácticos y ejercicios resueltos. ¡Comienza tu preparación académica!
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('clase1.index') }}" class="bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white font-semibold py-3 px-8 rounded-xl transition-all duration-200 shadow-lg hover:shadow-xl">
                        🧮 Comenzar con MCD y MCM
                    </a>
                    <button onclick="scrollToClasses()" class="bg-black/30 hover:bg-black/50 text-white font-semibold py-3 px-8 rounded-xl transition-all duration-200 border border-red-500/30">
                        📚 Ver todas las clases
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function scrollToClasses() {
    document.querySelector('.grid').scrollIntoView({ 
        behavior: 'smooth' 
    });
}
</script>

<style>
@keyframes fade-in {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-fade-in {
    animation: fade-in 1s ease-out;
}

/* Hover effects */
.group:hover .transition-all {
    transform: translateY(-2px);
}
</style>
@endsection