@extends('layouts.app')

@section('title', 'Mi Portafolio Académico - Laravel')

@section('content')
<!-- Hero Section -->
<div class="min-h-screen bg-gradient-to-br from-red-600 via-red-800 to-black text-white">
    <div class="container mx-auto px-6 py-20">
        <!-- Header -->
        <div class="text-center mb-16">
            <div class="mb-8">
                <div class="w-32 h-32 bg-gradient-to-r from-red-500 to-red-700 rounded-full mx-auto mb-6 flex items-center justify-center text-5xl">
                    👨‍💻
                </div>
                <h1 class="text-6xl font-bold mb-2 animate-fade-in">
                    Carlos Angulo Pizarro
                </h1>
                <h2 class="text-3xl font-semibold text-red-300 mb-6">
                    🎓 Desarrollador de Software & Docente de Matemáticas y Física
                </h2>
            </div>
            <p class="text-xl text-red-100 max-w-4xl mx-auto leading-relaxed mb-8">
                Desarrollador web versátil con experiencia en <strong>PHP (Laravel y MySQL)</strong> y sólidos fundamentos en frontend y backend con <strong>Angular</strong>. 
                Licenciado en Pedagogía mención Matemática y Física con Maestría en Pedagogía en Entornos Digitales.
            </p>
            
            <!-- Contact Info -->
            <div class="flex flex-wrap justify-center gap-6 text-red-100">
                <div class="flex items-center gap-2">
                    <span class="text-lg">📧</span>
                    <a href="mailto:cangulo009@outlook.es" class="hover:text-white transition-colors">cangulo009@outlook.es</a>
                </div>
                <div class="flex items-center gap-2">
                    <span class="text-lg">📱</span>
                    <span>0983468115</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="text-lg">📍</span>
                    <span>Quito, Ecuador</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="text-lg">💼</span>
                    <a href="#" class="hover:text-white transition-colors">LinkedIn: Carlos Angulo</a>
                </div>
            </div>
        </div>

        <!-- Experience & Skills Section -->
        <div class="mb-20">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl font-bold text-center mb-12 text-white">💼 Experiencia Profesional</h2>
                
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-16">
                    <!-- Current Projects -->
                    <div class="bg-black/20 backdrop-blur-lg rounded-2xl p-8 border border-red-500/30">
                        <h3 class="text-2xl font-bold mb-6 text-red-300">🚀 Proyectos Actuales (2024 - Presente)</h3>
                        <div class="space-y-4">
                            <div class="border-l-4 border-red-500 pl-4">
                                <h4 class="font-bold text-white">Eteria - Portafolio Personal</h4>
                                <p class="text-red-100 text-sm">Marca personal con chatbots integrados</p>
                            </div>
                            <div class="border-l-4 border-red-500 pl-4">
                                <h4 class="font-bold text-white">FEUE - Plataforma Educativa</h4>
                                <p class="text-red-100 text-sm">Moodle en AWS Linux • <a href="https://capu.site/" class="text-red-300 hover:text-white">capu.site</a></p>
                            </div>
                            <div class="border-l-4 border-red-500 pl-4">
                                <h4 class="font-bold text-white">Escleróptica - Sistema de Inventarios</h4>
                                <p class="text-red-100 text-sm">3 sucursales en AWS • <a href="https://escleroptica.com/" class="text-red-300 hover:text-white">escleroptica.com</a></p>
                            </div>
                        </div>
                    </div>

                    <!-- Technical Skills -->
                    <div class="bg-black/20 backdrop-blur-lg rounded-2xl p-8 border border-red-500/30">
                        <h3 class="text-2xl font-bold mb-6 text-red-300">⚡ Habilidades Técnicas</h3>
                        <div class="space-y-4">
                            <div>
                                <h4 class="font-bold text-white mb-2">Backend</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-red-600/30 text-red-100 px-3 py-1 rounded-full text-sm">PHP Avanzado</span>
                                    <span class="bg-red-600/30 text-red-100 px-3 py-1 rounded-full text-sm">Laravel</span>
                                    <span class="bg-red-600/30 text-red-100 px-3 py-1 rounded-full text-sm">Python Avanzado</span>
                                    <span class="bg-red-600/30 text-red-100 px-3 py-1 rounded-full text-sm">MySQL</span>
                                </div>
                            </div>
                            <div>
                                <h4 class="font-bold text-white mb-2">Frontend</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-red-600/30 text-red-100 px-3 py-1 rounded-full text-sm">HTML5 Avanzado</span>
                                    <span class="bg-red-600/30 text-red-100 px-3 py-1 rounded-full text-sm">CSS3 Avanzado</span>
                                    <span class="bg-red-600/30 text-red-100 px-3 py-1 rounded-full text-sm">Angular Intermedio</span>
                                </div>
                            </div>
                            <div>
                                <h4 class="font-bold text-white mb-2">Otros</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-red-600/30 text-red-100 px-3 py-1 rounded-full text-sm">AWS</span>
                                    <span class="bg-red-600/30 text-red-100 px-3 py-1 rounded-full text-sm">Linux</span>
                                    <span class="bg-red-600/30 text-red-100 px-3 py-1 rounded-full text-sm">Moodle</span>
                                    <span class="bg-red-600/30 text-red-100 px-3 py-1 rounded-full text-sm">Excel Avanzado</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Education -->
                <div class="bg-black/20 backdrop-blur-lg rounded-2xl p-8 border border-red-500/30 mb-16">
                    <h3 class="text-2xl font-bold mb-6 text-red-300 text-center">🎓 Formación Académica</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-gradient-to-r from-red-500 to-red-700 rounded-full mx-auto mb-4 flex items-center justify-center">
                                <span class="text-2xl">💻</span>
                            </div>
                            <h4 class="font-bold text-white mb-2">Tecnología Superior</h4>
                            <p class="text-red-100 text-sm">Desarrollo de Software</p>
                            <p class="text-red-300 text-xs">ITS "VIDA NUEVA"</p>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-gradient-to-r from-red-500 to-red-700 rounded-full mx-auto mb-4 flex items-center justify-center">
                                <span class="text-2xl">📚</span>
                            </div>
                            <h4 class="font-bold text-white mb-2">Licenciatura</h4>
                            <p class="text-red-100 text-sm">Pedagogía - Matemática y Física</p>
                            <p class="text-red-300 text-xs">Universidad Central Del Ecuador</p>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-gradient-to-r from-red-500 to-red-700 rounded-full mx-auto mb-4 flex items-center justify-center">
                                <span class="text-2xl">🎯</span>
                            </div>
                            <h4 class="font-bold text-white mb-2">Maestría</h4>
                            <p class="text-red-100 text-sm">Pedagogía en Entornos Digitales</p>
                            <p class="text-red-300 text-xs">UBE</p>
                        </div>
                    </div>
                </div>
            </div>
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

                <!-- Clase 6 -->
                <div class="bg-black/20 backdrop-blur-lg rounded-2xl p-8 border border-red-500/30 hover:bg-red-900/30 transition-all duration-300 hover:scale-105 hover:shadow-2xl hover:shadow-red-500/20 group">
                    <div class="flex items-center justify-center w-16 h-16 bg-gradient-to-r from-red-500 to-red-700 rounded-full mb-6 mx-auto group-hover:from-red-400 group-hover:to-red-600 transition-all duration-300">
                        <span class="text-2xl">➗</span>
                    </div>
                    <h3 class="text-2xl font-bold text-center mb-4">Clase 6</h3>
                    <p class="text-red-100 text-center mb-6 leading-relaxed">
                        <strong>Razones y Proporciones</strong><br>
                        Comprendiendo las relaciones entre cantidades y sus aplicaciones en el mundo real.
                    </p>
                    <div class="text-center">
                        <a href="{{ route('clase6.index') }}" class="inline-flex items-center justify-center bg-red-600 hover:bg-red-700 text-white font-semibold py-3 px-6 rounded-xl transition-colors duration-200 shadow-lg hover:shadow-xl">
                            <span class="mr-2">⚖️</span>
                            Explorar Clase 6
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
            <div class="grid grid-cols-1 md:grid-cols-5 gap-8 max-w-5xl mx-auto">
                <div class="bg-black/20 backdrop-blur-lg rounded-xl p-6 border border-red-500/30">
                    <div class="text-3xl font-bold text-white mb-2">6+</div>
                    <div class="text-red-100">Proyectos Activos</div>
                </div>
                <div class="bg-black/20 backdrop-blur-lg rounded-xl p-6 border border-red-500/30">
                    <div class="text-3xl font-bold text-white mb-2">3</div>
                    <div class="text-red-100">Títulos Académicos</div>
                </div>
                <div class="bg-black/20 backdrop-blur-lg rounded-xl p-6 border border-red-500/30">
                    <div class="text-3xl font-bold text-white mb-2">2+</div>
                    <div class="text-red-100">Años de Experiencia</div>
                </div>
                <div class="bg-black/20 backdrop-blur-lg rounded-xl p-6 border border-red-500/30">
                    <div class="text-3xl font-bold text-white mb-2">AWS</div>
                    <div class="text-red-100">Cloud Specialist</div>
                </div>
                <div class="bg-black/20 backdrop-blur-lg rounded-xl p-6 border border-red-500/30">
                    <div class="text-3xl font-bold text-white mb-2">Laravel</div>
                    <div class="text-red-100">PHP Framework</div>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="text-center mt-16">
            <div class="bg-black/20 backdrop-blur-lg rounded-2xl p-8 border border-red-500/30 max-w-3xl mx-auto">
                <h3 class="text-2xl font-bold mb-4">¿Interesado en colaborar o aprender?</h3>
                <p class="text-red-100 mb-6">
                    Como desarrollador de software con experiencia en educación, combino la tecnología con la pedagogía para crear soluciones innovadoras. 
                    Cada clase contiene conceptos fundamentales respaldados por mi experiencia docente y técnica.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="mailto:cangulo009@outlook.es" class="bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white font-semibold py-3 px-8 rounded-xl transition-all duration-200 shadow-lg hover:shadow-xl">
                        📧 Contactar por Email
                    </a>
                    <a href="{{ route('clase1.index') }}" class="bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white font-semibold py-3 px-8 rounded-xl transition-all duration-200 shadow-lg hover:shadow-xl">
                        🧮 Comenzar con MCD y MCM
                    </a>
                    <button onclick="scrollToClasses()" class="bg-black/30 hover:bg-black/50 text-white font-semibold py-3 px-8 rounded-xl transition-all duration-200 border border-red-500/30">
                        📚 Ver todas las clases
                    </button>
                </div>
                
                <!-- Additional Info -->
                <div class="mt-8 pt-6 border-t border-red-500/30">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm text-red-200">
                        <div class="flex items-center justify-center gap-2">
                            <span>🌍</span>
                            <span>Disponibilidad para viajar</span>
                        </div>
                        <div class="flex items-center justify-center gap-2">
                            <span>🚗</span>
                            <span>Vehículo propio • Licencia A y B</span>
                        </div>
                        <div class="flex items-center justify-center gap-2">
                            <span>🇺🇸</span>
                            <span>Inglés Intermedio B1</span>
                        </div>
                    </div>
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