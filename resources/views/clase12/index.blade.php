@extends('layouts.app')

@section('title', 'Clase 12: Exámenes Virtuales - Proctorizer UCE')

@section('content')
    @include('componentesclase12.styles')
    @include('componentesclase12.slide-styles')
    @include('componentesclase12.bloque1-styles')

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
                    <!-- Slide 1: Título del Bloque 1 -->
                    <div class="slide content-area hover-lift interactive-element">
                        <div class="flex flex-col items-center justify-center text-center py-8">
                            <h2 class="text-3xl font-bold text-indigo-700 mb-4">BLOQUE 1: DOMINIO TOTAL DE PROCTORIZER UCE</h2>
                            <p class="text-xl text-gray-600 mb-6">2:00pm - 3:15pm</p>
                            
                            <div class="w-24 h-1 bg-gradient-to-r from-indigo-500 to-purple-600 rounded mb-8"></div>
                            
                            <div class="grid grid-cols-2 gap-8 max-w-2xl mx-auto">
                                <div class="text-center">
                                    <div class="w-20 h-20 mx-auto bg-indigo-100 rounded-full flex items-center justify-center mb-4">
                                        <svg class="w-10 h-10 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                        </svg>
                                    </div>
                                    <h3 class="text-lg font-semibold text-gray-800">Preparación técnica</h3>
                                    <p class="text-gray-600 mt-2">Instalación y configuración optimizada</p>
                                </div>
                                
                                <div class="text-center">
                                    <div class="w-20 h-20 mx-auto bg-indigo-100 rounded-full flex items-center justify-center mb-4">
                                        <svg class="w-10 h-10 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                        </svg>
                                    </div>
                                    <h3 class="text-lg font-semibold text-gray-800">Prevención de problemas</h3>
                                    <p class="text-gray-600 mt-2">Evita calificaciones de 0 por errores</p>
                                </div>
                            </div>
                            
                            <p class="text-gray-500 mt-10 italic">Navega con las flechas para explorar el contenido detallado →</p>
                        </div>
                    </div>
                    
                    <!-- Slide 2: Información general y requisitos de Proctorizer -->
                    <div class="slide content-area hover-lift interactive-element">
                        @include('componentesclase12.bloque1-proctorizer-parte1')
                    </div>
                    
                    <!-- Slide 3: Funcionalidades y restricciones de Proctorizer -->
                    <div class="slide content-area hover-lift interactive-element">
                        @include('componentesclase12.bloque1-proctorizer-parte2')
                    </div>
                    
                    <!-- Slide 4: Solución de problemas de Proctorizer -->
                    <div class="slide content-area hover-lift interactive-element">
                        @include('componentesclase12.bloque1-proctorizer-parte3')
                    </div>
                    
                    <!-- Slide 5: Procedimientos de reclamo -->
                    <div class="slide content-area hover-lift interactive-element">
                        @include('componentesclase12.bloque1-reclamos')
                    </div>
                    
                    <!-- Slide 6: Descanso -->
                    <div class="slide content-area hover-lift interactive-element">
                        <div class="flex flex-col items-center justify-center text-center py-16">
                            <h2 class="text-3xl font-bold text-gray-700 mb-4">DESCANSO</h2>
                            <p class="text-xl text-gray-600 mb-10">3:15pm - 3:30pm</p>
                            
                            <div class="w-32 h-32 mb-8">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-full h-full text-indigo-500">
                                    <path fill="currentColor" d="M12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22C6.47,22 2,17.5 2,12A10,10 0 0,1 12,2M12.5,7V12.25L17,14.92L16.25,16.15L11,13V7H12.5Z"></path>
                                </svg>
                            </div>
                            
                            <p class="text-xl text-gray-700 mb-6">¡Tómate un descanso!</p>
                            <p class="text-gray-600 max-w-md mx-auto">
                                Aprovecha estos minutos para estirar las piernas, hidratarte y prepararte para el siguiente bloque de contenido.
                            </p>
                            
                            <div class="mt-10 p-4 bg-yellow-50 border border-yellow-200 rounded-lg max-w-lg">
                                <p class="text-yellow-800">
                                    <strong>Nota:</strong> Volveremos puntualmente a las 3:30pm para continuar con el siguiente módulo.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 7: Título del Bloque 2 -->
                    <div class="slide content-area hover-lift interactive-element">
                        @include('componentesclase12.bloque2-introduccion')
                    </div>
                    
                    <!-- Slide 8: Integración de IA con Proctorizer -->
                    <div class="slide content-area hover-lift interactive-element">
                        @include('componentesclase12.bloque2-ia-integracion')
                    </div>
                    
                    <!-- Slide 9: Configuración de VPN -->
                    <div class="slide content-area hover-lift interactive-element">
                        @include('componentesclase12.bloque2-vpn-configuracion')
                    </div>
                    
                    <!-- Slide 10: Planes gratuitos vs. pagos -->
                    <div class="slide content-area hover-lift interactive-element">
                        @include('componentesclase12.bloque2-planes-comparacion')
                    </div>
                    
                    <!-- Slide 11: Segundo descanso -->
                    <div class="slide content-area hover-lift interactive-element">
                        @include('componentesclase12.bloque2-descanso')
                    </div>

                    <!-- Slide 12: Cierre final -->
                    <div class="slide content-area hover-lift interactive-element">
                        @include('componentesclase12.cierre-final')
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
