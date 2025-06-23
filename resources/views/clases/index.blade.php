@extends('layouts.app')

@section('title', 'Todas las Clases - Portafolio Académico')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-black via-red-900/40 to-black py-12 relative overflow-hidden" role="main" aria-label="Catálogo de clases">
    <!-- Efectos de fondo -->
    <div class="absolute inset-0 bg-grid-pattern opacity-5"></div>
    <div class="absolute -top-24 -right-24 w-96 h-96 bg-red-500/10 rounded-full filter blur-3xl"></div>
    <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-red-500/10 rounded-full filter blur-3xl"></div>

    <div class="container mx-auto px-4 relative">
        <!-- Header -->
        <div class="text-center mb-16 transform hover:scale-[1.01] transition-transform duration-300">
            <h1 class="relative text-6xl font-bold text-white mb-6 drop-shadow-lg animate-fade-in tracking-tight inline-flex items-center justify-center w-full">
                <span class="absolute -left-4 top-1/2 -translate-y-1/2 w-16 h-16 bg-gradient-to-br from-red-400 to-red-600 rounded-2xl transform -rotate-6 hover:rotate-0 transition-all duration-300 shadow-lg hover:shadow-red-500/50 flex items-center justify-center group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-white transform group-hover:scale-110 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </span>
                <span class="bg-gradient-to-r from-white via-gray-100 to-gray-300 bg-clip-text text-transparent pl-16">Mis Clases de Matemáticas y Física</span>
            </h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
                Explora mi colección completa de clases diseñadas para preparación universitaria y comprensión profunda de conceptos fundamentales
            </p>
            
            <!-- Search Bar -->
            <div class="mt-8 max-w-md mx-auto transform hover:scale-[1.02] transition-all duration-300">
                <div class="relative group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-red-500 to-red-800 rounded-xl blur opacity-30 group-hover:opacity-50 transition duration-300"></div>
                    <input 
                        type="search" 
                        id="search-classes" 
                        class="relative w-full px-6 py-4 bg-black/40 border border-red-800/40 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-red-500/50 focus:border-transparent backdrop-blur-xl transition-all duration-300"
                        placeholder="Buscar clases..."
                        aria-label="Buscar clases"
                    >
                    <span class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 group-hover:text-red-400 transition-colors duration-300">🔍</span>
                </div>
            </div>
        </div>

        <!-- Classes Grid -->
        <div class="max-w-7xl mx-auto" id="classes-grid" role="list" aria-label="Lista de clases disponibles">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($clases as $clase)
                    <div class="class-card relative group"
                         role="listitem" 
                         aria-label="{{ $clase['titulo'] }}"
                         data-class-name="{{ strtolower($clase['titulo']) }}"
                         data-class-topic="{{ strtolower($clase['tema']) }}">
                        <!-- Efecto de brillo en hover -->
                        <div class="absolute -inset-0.5 bg-gradient-to-r from-red-500 to-red-800 rounded-2xl blur opacity-0 group-hover:opacity-30 transition duration-300"></div>
                        
                        <div class="relative bg-gradient-to-b from-black/60 to-red-950/40 backdrop-blur-xl rounded-2xl p-8 border border-red-800/20 shadow-2xl transition-all duration-500 hover:shadow-red-500/30 group-hover:border-red-500/40">
                            <!-- Icon with Loading State -->
                            <div class="flex items-center justify-center w-20 h-20 bg-gradient-to-r from-red-700 to-red-900 rounded-full mb-6 mx-auto group-hover:from-red-600 group-hover:to-red-800 transition-all duration-300 shadow-lg shadow-red-500/20 transform group-hover:scale-110 group-hover:rotate-3">
                                <span class="text-3xl loading-icon">{{ $clase['icono'] }}</span>
                            </div>
                            
                            <!-- Title with Hover Effect -->
                            <h3 class="text-2xl font-bold text-center mb-4 text-white group-hover:text-red-400 transition-all duration-300 transform group-hover:-translate-y-1">
                                {{ $clase['titulo'] }}
                            </h3>
                            
                            <!-- Description with Gradient Text -->
                            <p class="text-gray-300 text-center mb-6 leading-relaxed">
                                <strong class="text-transparent bg-clip-text bg-gradient-to-r from-red-400 to-red-500 group-hover:from-red-300 group-hover:to-red-400 transition-colors duration-300">
                                    {{ $clase['tema'] }}
                                </strong><br>
                                <span class="group-hover:text-gray-200 transition-colors duration-300">{{ $clase['descripcion'] }}</span>
                            </p>
                            
                            <!-- Enhanced Button -->
                            <div class="text-center transform transition-all duration-300 group-hover:translate-y-1">
                                <a href="{{ route($clase['ruta']) }}" 
                                   class="inline-flex items-center justify-center bg-gradient-to-r from-red-700 to-red-900 hover:from-red-600 hover:to-red-800 text-white font-semibold py-3 px-6 rounded-xl transition-all duration-300 shadow-lg hover:shadow-red-500/30 transform hover:scale-105 focus:ring-2 focus:ring-red-500/50 focus:outline-none group-hover:shadow-xl"
                                   aria-label="Explorar {{ $clase['titulo'] }}"
                                >
                                    <span class="mr-2 animate-bounce">{{ $clase['icono_boton'] }}</span>
                                    @if($clase['id'] === 'formato')
                                        Ver Formato
                                    @else
                                        Explorar {{ $clase['titulo'] }}
                                    @endif
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Enhanced Back to Home Button -->
        <div class="text-center mt-16">
            <a href="{{ route('welcome') }}" 
               class="inline-flex items-center justify-center bg-gradient-to-r from-gray-600 to-gray-700 hover:from-gray-700 hover:to-gray-800 text-white font-semibold py-3 px-8 rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl focus:ring-2 focus:ring-gray-500/50 focus:outline-none"
               aria-label="Volver a la página de inicio"
            >
                <span class="mr-2 animate-pulse">🏠</span>
                Volver al Inicio
            </a>
        </div>

        <!-- Enhanced Statistics Section -->
        <div class="mt-20 grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto" role="complementary" aria-label="Estadísticas del curso">
            <div class="stat-card group relative">
                <div class="absolute -inset-0.5 bg-gradient-to-r from-red-500 to-red-800 rounded-2xl blur opacity-20 group-hover:opacity-30 transition duration-300"></div>
                <div class="relative text-center bg-gradient-to-b from-black/60 to-red-950/40 backdrop-blur-xl rounded-2xl p-8 border border-red-800/20 hover:border-red-500/40 transition-all duration-300 transform hover:scale-105 hover:shadow-xl hover:shadow-red-500/20">
                    <div class="text-5xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-400 to-red-500 mb-3 group-hover:from-red-300 group-hover:to-red-400">
                        {{ count($clases) - 1 }}
                    </div>
                    <div class="text-gray-300 font-medium text-lg group-hover:text-white transition-colors duration-300">Clases Disponibles</div>
                </div>
            </div>
            <div class="stat-card group relative">
                <div class="absolute -inset-0.5 bg-gradient-to-r from-red-500 to-red-800 rounded-2xl blur opacity-20 group-hover:opacity-30 transition duration-300"></div>
                <div class="relative text-center bg-gradient-to-b from-black/60 to-red-950/40 backdrop-blur-xl rounded-2xl p-8 border border-red-800/20 hover:border-red-500/40 transition-all duration-300 transform hover:scale-105 hover:shadow-xl hover:shadow-red-500/20">
                    <div class="text-5xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-400 to-red-500 mb-3 group-hover:from-red-300 group-hover:to-red-400">2</div>
                    <div class="text-gray-300 font-medium text-lg group-hover:text-white transition-colors duration-300">Áreas de Estudio</div>
                </div>
            </div>
            <div class="stat-card group relative">
                <div class="absolute -inset-0.5 bg-gradient-to-r from-red-500 to-red-800 rounded-2xl blur opacity-20 group-hover:opacity-30 transition duration-300"></div>
                <div class="relative text-center bg-gradient-to-b from-black/60 to-red-950/40 backdrop-blur-xl rounded-2xl p-8 border border-red-800/20 hover:border-red-500/40 transition-all duration-300 transform hover:scale-105 hover:shadow-xl hover:shadow-red-500/20">
                    <div class="text-5xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-400 to-red-500 mb-3 group-hover:from-red-300 group-hover:to-red-400">1</div>
                    <div class="text-gray-300 font-medium text-lg group-hover:text-white transition-colors duration-300">Formato Base</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add JavaScript for search functionality -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('search-classes');
    const classCards = document.querySelectorAll('.class-card');

    searchInput.addEventListener('input', function(e) {
        const searchTerm = e.target.value.toLowerCase();

        classCards.forEach(card => {
            const className = card.dataset.className;
            const classTopic = card.dataset.classTopic;
            const isVisible = 
                className.includes(searchTerm) || 
                classTopic.includes(searchTerm);

            card.style.display = isVisible ? 'block' : 'none';
            if (isVisible) {
                card.classList.add('animate-fade-in');
            }
        });
    });

    // Add loading animation
    document.querySelectorAll('.loading-icon').forEach(icon => {
        icon.classList.add('animate-pulse');
        setTimeout(() => {
            icon.classList.remove('animate-pulse');
        }, 1500);
    });
});
</script>

<style>
.bg-grid-pattern {
    background-image: radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px);
    background-size: 30px 30px;
}

@keyframes fadeIn {
    from { 
        opacity: 0; 
        transform: translateY(20px) scale(0.95); 
    }
    to { 
        opacity: 1; 
        transform: translateY(0) scale(1); 
    }
}

.animate-fade-in {
    animation: fadeIn 0.8s cubic-bezier(0.4, 0, 0.2, 1) forwards;
}

.class-card {
    opacity: 0;
    animation: fadeIn 0.8s cubic-bezier(0.4, 0, 0.2, 1) forwards;
    will-change: transform, opacity;
}

.class-card:nth-child(1) { animation-delay: 0.1s; }
.class-card:nth-child(2) { animation-delay: 0.2s; }
.class-card:nth-child(3) { animation-delay: 0.3s; }
.class-card:nth-child(4) { animation-delay: 0.4s; }
.class-card:nth-child(5) { animation-delay: 0.5s; }
.class-card:nth-child(6) { animation-delay: 0.6s; }

@media (prefers-reduced-motion: reduce) {
    .animate-fade-in,
    .class-card {
        animation: none;
        opacity: 1;
    }
}
</style>
@endsection
