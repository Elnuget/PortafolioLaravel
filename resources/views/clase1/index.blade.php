@extends('layouts.app')

@section('title', 'MCD y MCM - Razonamiento Numérico para Admisiones Universitarias')

@section('content')
<!-- Importamos la fuente Poppins desde Google Fonts -->
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
    
    body {
        font-family: 'Poppins', sans-serif;
        overflow-x: hidden;
    }
    
    /* Animaciones para presentación */
    .animate-pulse-slow {
        animation: pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }
    
    .animate-float {
        animation: float 6s ease-in-out infinite;
    }
    
    .animate-slide-in {
        animation: slideIn 1s ease-out forwards;
    }
    
    .animate-fade-in {
        animation: fadeIn 1.5s ease-out forwards;
    }
    
    @keyframes pulse {
        0%, 100% {
            opacity: 1;
            transform: scale(1);
        }
        50% {
            opacity: 0.6;
            transform: scale(1.05);
        }
    }
    
    @keyframes float {
        0%, 100% {
            transform: translateY(0px) rotate(0deg);
        }
        50% {
            transform: translateY(-20px) rotate(2deg);
        }
    }
    
    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }
    
    /* Estilos para presentación de clase */
    .presentation-container {
        background: linear-gradient(135deg, #0f0f23 0%, #1a1a2e 25%, #16213e 50%, #0f0f23 100%);
        position: relative;
        overflow: hidden;
    }
    
    .presentation-container::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: 
            radial-gradient(circle at 20% 80%, rgba(120, 119, 198, 0.1) 0%, transparent 50%),
            radial-gradient(circle at 80% 20%, rgba(255, 119, 119, 0.1) 0%, transparent 50%),
            radial-gradient(circle at 40% 40%, rgba(120, 119, 198, 0.05) 0%, transparent 50%);
        pointer-events: none;
    }
    
    /* Elementos decorativos mejorados */
    .bg-decoration {
        position: absolute;
        pointer-events: none;
        z-index: 1;
    }
    
    .bg-decoration-1 {
        top: 10%;
        left: 15%;
        width: 300px;
        height: 300px;
        background: radial-gradient(circle, rgba(239, 68, 68, 0.15) 0%, transparent 70%);
        border-radius: 50%;
        filter: blur(40px);
    }
    
    .bg-decoration-2 {
        bottom: 20%;
        right: 10%;
        width: 250px;
        height: 250px;
        background: radial-gradient(circle, rgba(147, 51, 234, 0.12) 0%, transparent 70%);
        border-radius: 50%;
        filter: blur(35px);
    }
    
    .bg-decoration-3 {
        top: 50%;
        left: 5%;
        width: 180px;
        height: 180px;
        background: radial-gradient(circle, rgba(59, 130, 246, 0.1) 0%, transparent 70%);
        border-radius: 50%;
        filter: blur(30px);
    }
    
    /* Contenedor principal con efecto de profundidad */
    .main-content-wrapper {
        backdrop-filter: blur(10px);
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 20px;
        box-shadow: 
            0 20px 40px rgba(0, 0, 0, 0.3),
            inset 0 1px 0 rgba(255, 255, 255, 0.1);
        position: relative;
        z-index: 10;
    }
    
    /* Efectos de texto para presentación */
    .presentation-title {
        background: linear-gradient(135deg, #fff 0%, #e5e7eb 100%);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        text-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        letter-spacing: -0.02em;
    }
    
    .presentation-subtitle {
        color: #d1d5db;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
    }
    
    /* Separadores elegantes */
    .elegant-divider {
        height: 1px;
        background: linear-gradient(90deg, transparent 0%, rgba(255, 255, 255, 0.2) 50%, transparent 100%);
        margin: 2rem 0;
    }
    
    /* Efectos hover mejorados */
    .hover-lift {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .hover-lift:hover {
        transform: translateY(-5px);
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.4);
    }
    
    /* Grid mejorado para presentación */
    .presentation-grid {
        display: grid;
        gap: 2rem;
        grid-template-columns: 1fr;
    }
    
    @media (min-width: 1024px) {
        .presentation-grid {
            grid-template-columns: 2fr 1fr;
        }
    }
    
    /* Scrollbar personalizado */
    ::-webkit-scrollbar {
        width: 8px;
    }
    
    ::-webkit-scrollbar-track {
        background: rgba(0, 0, 0, 0.2);
    }
    
    ::-webkit-scrollbar-thumb {
        background: linear-gradient(135deg, #ef4444, #dc2626);
        border-radius: 4px;
    }
    
    ::-webkit-scrollbar-thumb:hover {
        background: linear-gradient(135deg, #dc2626, #b91c1c);
    }
</style>

<div class="min-h-screen presentation-container py-12 text-gray-100 relative">
    <!-- Elementos decorativos de fondo mejorados -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="bg-decoration bg-decoration-1 animate-pulse-slow animate-float"></div>
        <div class="bg-decoration bg-decoration-2 animate-pulse-slow animate-float" style="animation-delay: 2s;"></div>
        <div class="bg-decoration bg-decoration-3 animate-pulse-slow animate-float" style="animation-delay: 4s;"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="main-content-wrapper p-8 animate-fade-in">
            <!-- Header Component -->
            <div class="animate-slide-in" style="animation-delay: 0.2s;">
                @include('componentesclase1.header')
            </div>

            <div class="elegant-divider"></div>

            <!-- Navigation Breadcrumb Component -->
            <div class="animate-slide-in" style="animation-delay: 0.4s;">
                @include('componentesclase1.breadcrumb')
            </div>

            <div class="elegant-divider"></div>

            <!-- Main Content -->
            <div class="presentation-grid animate-slide-in" style="animation-delay: 0.6s;">
                <!-- Content Area -->
                <div class="hover-lift">
                    @include('componentesclase1.contenido')
                </div>

                <!-- Sidebar -->
                <div class="hover-lift" style="animation-delay: 0.8s;">
                    @include('componentesclase1.sidebar')
                </div>
            </div>

            <div class="elegant-divider"></div>

            <!-- Action Buttons Component -->
            <div class="animate-slide-in" style="animation-delay: 1s;">
                @include('componentesclase1.action-buttons')
            </div>
        </div>
    </div>
</div>
@endsection
