@extends('layouts.app')

@section('title', 'Clase 9: FRACCIONES - Fundamentos y Conversiones')

@section('content')
    @include('componentesclase9.styles')

    <div class="min-h-screen presentation-container py-12 text-gray-800 relative bg-gray-50">
        @include('componentesclase9.background')

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <div class="main-content-wrapper p-6 md:p-8 lg:p-10 animate-fade-in bg-white rounded-xl shadow-lg">
                <!-- Header Component -->
                <div class="animate-slide-in" style="animation-delay: 0.2s;">
                    @include('componentesclase9.header')
                </div>

                <div class="elegant-divider"></div>

                <!-- Navigation Breadcrumb Component -->
                <div class="animate-slide-in" style="animation-delay: 0.4s;">
                    @include('componentesclase9.breadcrumb')
                </div>

                <div class="elegant-divider"></div>

                <!-- Main Content -->
                <div class="presentation-grid animate-slide-in" style="animation-delay: 0.6s;">
                    <!-- Content Area -->
                    <div class="content-area hover-lift interactive-element">
                        @include('componentesclase9.contenido')
                    </div>
                </div>

                <div class="elegant-divider"></div>

                <!-- Action Buttons Component -->
                <div class="animate-slide-in" style="animation-delay: 1s;">
                    @include('componentesclase9.action-buttons')
                </div>
            </div>
        </div>
    </div>
@endsection
