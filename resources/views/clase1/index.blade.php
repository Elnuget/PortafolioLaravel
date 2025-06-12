@extends('layouts.app')

@section('title', 'MCD y MCM - Matemáticas Avanzadas para Programación')

@section('content')
<!-- Importamos la fuente Poppins desde Google Fonts -->
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');
    
    body {
        font-family: 'Poppins', sans-serif;
    }
    
    .animate-pulse-slow {
        animation: pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }
    
    @keyframes pulse {
        0%, 100% {
            opacity: 1;
        }
        50% {
            opacity: 0.7;
        }
    }
</style>

<div class="min-h-screen bg-gradient-to-br from-black via-red-950 to-black py-12 text-gray-100 relative">
    <!-- Elementos decorativos de fondo -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-red-600 rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-pulse-slow"></div>
        <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-red-900 rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-pulse-slow" style="animation-delay: 1s;"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <!-- Header Component -->
        @include('componentesclase1.header')

        <!-- Navigation Breadcrumb Component -->
        @include('componentesclase1.breadcrumb')

        <!-- Main Content -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Content Area -->
            <div class="lg:col-span-2">
                @include('componentesclase1.contenido')
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                @include('componentesclase1.sidebar')
            </div>
        </div>

        <!-- Action Buttons Component -->
        @include('componentesclase1.action-buttons')
    </div>
</div>
@endsection
