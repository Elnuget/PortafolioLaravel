@extends('layouts.app')

@section('title', 'Todas las Clases - Portafolio Académico')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-black via-red-900 to-black py-12" role="main" aria-label="Catálogo de clases">
    <div class="container mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-16">
            <h1 class="text-5xl font-bold text-white mb-6 drop-shadow-lg animate-fade-in">
                <span class="bg-gradient-to-r from-red-400 to-red-600 bg-clip-text text-transparent">📚</span>
                Mis Clases de Matemáticas y Física
            </h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
                Explora mi colección completa de clases diseñadas para preparación universitaria y comprensión profunda de conceptos fundamentales
            </p>
            
            <!-- Search Bar -->
            <div class="mt-8 max-w-md mx-auto">
                <div class="relative">
                    <input 
                        type="search" 
                        id="search-classes" 
                        class="w-full px-4 py-3 bg-black/30 border border-red-800/30 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-red-500/50 focus:border-transparent backdrop-blur-xl"
                        placeholder="Buscar clases..."
                        aria-label="Buscar clases"
                    >
                    <span class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400">🔍</span>
                </div>
            </div>
        </div>

        <!-- Classes Grid -->
        <div class="max-w-7xl mx-auto" id="classes-grid" role="list" aria-label="Lista de clases disponibles">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($clases as $clase)
                    <div class="class-card bg-gradient-to-b from-black/40 to-red-950/30 backdrop-blur-xl rounded-2xl p-8 border border-red-800/20 shadow-2xl hover:bg-black/50 hover:shadow-red-500/30 transition-all duration-300 hover:scale-105 group hover:border-red-500/30" 
                         role="listitem" 
                         aria-label="{{ $clase['titulo'] }}"
                         data-class-name="{{ strtolower($clase['titulo']) }}"
                         data-class-topic="{{ strtolower($clase['tema']) }}">
                        <!-- Icon with Loading State -->
                        <div class="flex items-center justify-center w-16 h-16 bg-gradient-to-r from-red-700 to-red-900 rounded-full mb-6 mx-auto group-hover:from-red-600 group-hover:to-red-800 transition-all duration-300 shadow-red-500/20">
                            <span class="text-2xl loading-icon">{{ $clase['icono'] }}</span>
                        </div>
                        
                        <!-- Title with Hover Effect -->
                        <h3 class="text-2xl font-bold text-center mb-4 text-white group-hover:text-red-400 transition-colors duration-300">
                            {{ $clase['titulo'] }}
                        </h3>
                        
                        <!-- Description with Gradient Text -->
                        <p class="text-gray-300 text-center mb-6 leading-relaxed">
                            <strong class="text-transparent bg-clip-text bg-gradient-to-r from-red-400 to-red-500">
                                {{ $clase['tema'] }}
                            </strong><br>
                            {{ $clase['descripcion'] }}
                        </p>
                        
                        <!-- Enhanced Button -->
                        <div class="text-center">
                            <a href="{{ route($clase['ruta']) }}" 
                               class="inline-flex items-center justify-center bg-gradient-to-r from-red-700 to-red-900 hover:from-red-800 hover:to-black text-white font-semibold py-3 px-6 rounded-xl transition-all duration-300 shadow-lg hover:shadow-red-500/20 transform hover:scale-105 focus:ring-2 focus:ring-red-500/50 focus:outline-none"
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
            <div class="stat-card text-center bg-gradient-to-b from-black/40 to-red-950/30 backdrop-blur-xl rounded-2xl p-6 border border-red-800/20 hover:bg-black/50 hover:border-red-500/30 transition-all duration-300 transform hover:scale-105">
                <div class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-400 to-red-500 mb-2">
                    {{ count($clases) - 1 }}
                </div>
                <div class="text-gray-300 font-medium">Clases Disponibles</div>
            </div>
            <div class="stat-card text-center bg-gradient-to-b from-black/40 to-red-950/30 backdrop-blur-xl rounded-2xl p-6 border border-red-800/20 hover:bg-black/50 hover:border-red-500/30 transition-all duration-300 transform hover:scale-105">
                <div class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-400 to-red-500 mb-2">2</div>
                <div class="text-gray-300 font-medium">Áreas de Estudio</div>
            </div>
            <div class="stat-card text-center bg-gradient-to-b from-black/40 to-red-950/30 backdrop-blur-xl rounded-2xl p-6 border border-red-800/20 hover:bg-black/50 hover:border-red-500/30 transition-all duration-300 transform hover:scale-105">
                <div class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-400 to-red-500 mb-2">1</div>
                <div class="text-gray-300 font-medium">Formato Base</div>
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
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

.animate-fade-in {
    animation: fadeIn 0.5s ease-out forwards;
}

.class-card {
    opacity: 0;
    animation: fadeIn 0.5s ease-out forwards;
}

.class-card:nth-child(1) { animation-delay: 0.1s; }
.class-card:nth-child(2) { animation-delay: 0.2s; }
.class-card:nth-child(3) { animation-delay: 0.3s; }
.class-card:nth-child(4) { animation-delay: 0.4s; }
.class-card:nth-child(5) { animation-delay: 0.5s; }
.class-card:nth-child(6) { animation-delay: 0.6s; }
</style>
@endsection
