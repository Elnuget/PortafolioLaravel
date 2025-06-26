@extends('layouts.app')

@section('title', 'Clase 8: Caída Libre - Física')

@section('content')
    @include('componentesclase8.styles')

    <div class="min-h-screen presentation-container py-12 text-gray-800 relative">
        @include('componentesclase8.background')

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <div class="main-content-wrapper p-6 md:p-8 lg:p-10 animate-fade-in">
                <!-- Header Component -->
                <div class="animate-slide-in" style="animation-delay: 0.2s;">
                    @include('componentesclase8.header')
                </div>

                <div class="elegant-divider"></div>

                <!-- Navigation Breadcrumb Component -->
                <div class="animate-slide-in" style="animation-delay: 0.4s;">
                    @include('componentesclase8.breadcrumb')
                </div>

                <div class="elegant-divider"></div>

                <!-- Main Content -->
                <div class="presentation-grid animate-slide-in" style="animation-delay: 0.6s;">
                    <!-- Content Area -->
                    <div class="content-area hover-lift interactive-element">
                        @include('componentesclase8.contenido')
                    </div>
                </div>                <div class="elegant-divider"></div>

                <!-- Action Buttons Component -->
                <div class="animate-slide-in" style="animation-delay: 1s;">
                    @include('componentesclase8.action-buttons')
                </div>

                <div class="elegant-divider"></div>

                <!-- Ejercicios Miscelánea Component -->
                <div class="animate-slide-in" style="animation-delay: 1.2s;">
                    @include('componentesclase8.ejercicios-miselanea')
                </div>
            </div>
        </div>
    </div>
@endsection
