@extends('layouts.app')

@section('title', 'Clase 12: Exámenes Virtuales - Proctorizer UCE')

@section('content')
    @include('componentesclase12.styles')
    @include('componentesclase12.slide-styles')

    <div class="min-h-screen presentation-container py-12 text-gray-800 relative bg-gray-50">
        @include('componentesclase12.background')

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <div class="main-content-wrapper p-6 md:p-8 lg:p-10 animate-fade-in">
                <!-- Header Component - Fixed on all slides -->
                <div class="animate-slide-in" style="animation-delay: 0.2s;">
                    @include('componentesclase12.header')
                </div>

                <div class="elegant-divider"></div>

                <!-- Navigation Breadcrumb Component -->
                <div class="animate-slide-in" style="animation-delay: 0.4s;">
                    @include('componentesclase12.breadcrumb')
                </div>

                <div class="elegant-divider"></div>

                <!-- PowerPoint Style Slides Container -->
                <div class="slides-container animate-slide-in" style="animation-delay: 0.6s;">
                    <!-- Slide 1: Objetivos del Seminario -->
                    <div class="slide content-area hover-lift interactive-element">
                        <h2 class="section-title">
                            <span class="section-icon">🎯</span>
                            Principales Objetivos del Seminario
                        </h2>
                        
                        <div class="grid gap-4 mt-6">
                            <div class="objetivo-item">
                                <div class="flex items-start">
                                    <span class="objetivo-check">✓</span>
                                    <div>
                                        <h3 class="font-semibold text-gray-800">Dominar Proctorizer UCE</h3>
                                        <p class="text-gray-600 text-sm mt-1">Desde la instalación hasta la configuración avanzada</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="objetivo-item">
                                <div class="flex items-start">
                                    <span class="objetivo-check">✓</span>
                                    <div>
                                        <h3 class="font-semibold text-gray-800">Evitar calificaciones de 0</h3>
                                        <p class="text-gray-600 text-sm mt-1">Por problemas técnicos con el sistema de proctoring</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="objetivo-item">
                                <div class="flex items-start">
                                    <span class="objetivo-check">✓</span>
                                    <div>
                                        <h3 class="font-semibold text-gray-800">Procedimientos de reclamo</h3>
                                        <p class="text-gray-600 text-sm mt-1">Para solicitar nueva oportunidad de examen</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Slide 2: Más Objetivos -->
                    <div class="slide content-area hover-lift interactive-element">
                        <h2 class="section-title">
                            <span class="section-icon">🎯</span>
                            Más Objetivos del Seminario
                        </h2>
                        
                        <div class="grid gap-4 mt-6">
                            <div class="objetivo-item">
                                <div class="flex items-start">
                                    <span class="objetivo-check">✓</span>
                                    <div>
                                        <h3 class="font-semibold text-gray-800">Solución de problemas técnicos</h3>
                                        <p class="text-gray-600 text-sm mt-1">Problemas comunes de Proctorizer en tiempo real</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="objetivo-item">
                                <div class="flex items-start">
                                    <span class="objetivo-check">✓</span>
                                    <div>
                                        <h3 class="font-semibold text-gray-800">Complementar con IA</h3>
                                        <p class="text-gray-600 text-sm mt-1">ChatGPT, Gemini y Claude de manera estratégica</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="objetivo-item">
                                <div class="flex items-start">
                                    <span class="objetivo-check">✓</span>
                                    <div>
                                        <h3 class="font-semibold text-gray-800">Configurar VPN y virtualización</h3>
                                        <p class="text-gray-600 text-sm mt-1">Como herramientas de apoyo y seguridad</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="objetivo-item">
                                <div class="flex items-start">
                                    <span class="objetivo-check">✓</span>
                                    <div>
                                        <h3 class="font-semibold text-gray-800">Evitar errores fatales</h3>
                                        <p class="text-gray-600 text-sm mt-1">Que resultan en anulación de exámenes</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Slide 3: Información de la Clase -->
                    <div class="slide content-area hover-lift interactive-element">
                        <h2 class="section-title">
                            <span class="section-icon">📋</span>
                            Información de la Clase
                        </h2>
                        
                        <div class="bg-blue-50 border-l-4 border-blue-400 p-4 rounded-r-lg">
                            <p class="text-gray-700">
                                <strong>Modalidad:</strong> Seminario práctico tipo presentación<br>
                                <strong>Duración:</strong> Módulos cortos y concisos<br>
                                <strong>Enfoque:</strong> Guía paso a paso para estudiantes<br>
                                <strong>Objetivo:</strong> Exámenes virtuales sin complicaciones técnicas
                            </p>
                        </div>
                        
                        <div class="mt-4 p-4 bg-yellow-50 border border-yellow-200 rounded-lg">
                            <p class="text-yellow-800 font-semibold">
                                💡 <strong>Nota importante:</strong> Esta clase está dividida en módulos cortos para facilitar el aprendizaje y la práctica inmediata.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- PowerPoint Navigation Controls -->
                @include('componentesclase12.slide-navigation')

                <div class="elegant-divider"></div>

                <!-- Action Buttons Component -->
                <div class="animate-slide-in" style="animation-delay: 1s;">
                    @include('componentesclase12.action-buttons')
                </div>
            </div>
        </div>
    </div>

    <script>
        @include('componentesclase12.slide-script')
    </script>
@endsection
