@extends('layouts.app')

@section('title', 'Todas las Clases - Portafolio Académico')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-slate-900 via-purple-900 to-slate-800 py-12">
    <div class="container mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-16">
            <h1 class="text-5xl font-bold text-white mb-6 drop-shadow-lg">
                <span class="bg-gradient-to-r from-red-400 to-red-600 bg-clip-text text-transparent">📚</span>
                Mis Clases de Matemáticas y Física
            </h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
                Explora mi colección completa de clases diseñadas para preparación universitaria y comprensión profunda de conceptos fundamentales
            </p>
        </div>

        <!-- Classes Grid -->
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($clases as $clase)
                    <div class="bg-white/5 backdrop-blur-xl rounded-2xl p-8 border border-white/10 shadow-2xl hover:bg-white/10 hover:shadow-red-500/20 transition-all duration-300 hover:scale-105 group">
                        <!-- Icon -->
                        <div class="flex items-center justify-center w-16 h-16 bg-gradient-to-r from-red-600 to-red-800 rounded-full mb-6 mx-auto group-hover:from-red-500 group-hover:to-red-700 transition-all duration-300 shadow-lg">
                            <span class="text-2xl">{{ $clase['icono'] }}</span>
                        </div>
                        
                        <!-- Title -->
                        <h3 class="text-2xl font-bold text-center mb-4 text-white">{{ $clase['titulo'] }}</h3>
                        
                        <!-- Description -->
                        <p class="text-gray-300 text-center mb-6 leading-relaxed">
                            <strong class="text-red-400">{{ $clase['tema'] }}</strong><br>
                            {{ $clase['descripcion'] }}
                        </p>
                        
                        <!-- Button -->
                        <div class="text-center">
                            <a href="{{ route($clase['ruta']) }}" class="inline-flex items-center justify-center bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white font-semibold py-3 px-6 rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                                <span class="mr-2">{{ $clase['icono_boton'] }}</span>
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

        <!-- Back to Home Button -->
        <div class="text-center mt-16">
            <a href="{{ route('welcome') }}" class="inline-flex items-center justify-center bg-gradient-to-r from-gray-600 to-gray-700 hover:from-gray-700 hover:to-gray-800 text-white font-semibold py-3 px-8 rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl">
                <span class="mr-2">🏠</span>
                Volver al Inicio
            </a>
        </div>

        <!-- Statistics Section -->
        <div class="mt-20 grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto">
            <div class="text-center bg-white/5 backdrop-blur-xl rounded-2xl p-6 border border-white/10">
                <div class="text-3xl font-bold text-red-400 mb-2">{{ count($clases) - 1 }}</div>
                <div class="text-gray-300">Clases Disponibles</div>
            </div>
            <div class="text-center bg-white/5 backdrop-blur-xl rounded-2xl p-6 border border-white/10">
                <div class="text-3xl font-bold text-red-400 mb-2">2</div>
                <div class="text-gray-300">Áreas de Estudio</div>
            </div>
            <div class="text-center bg-white/5 backdrop-blur-xl rounded-2xl p-6 border border-white/10">
                <div class="text-3xl font-bold text-red-400 mb-2">1</div>
                <div class="text-gray-300">Formato Base</div>
            </div>
        </div>
    </div>
</div>
@endsection
