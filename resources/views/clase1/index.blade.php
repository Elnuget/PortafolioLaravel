@extends('layouts.app')

@section('title', 'Clase 1 - Mi Portafolio')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100 py-12">
    <div class="max-w-6xl mx-auto px-6">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">
                📚 Clase 1
            </h1>
            <p class="text-xl text-gray-600 leading-relaxed">
                Contenido y recursos de la primera clase
            </p>
        </div>

        <!-- Navigation Breadcrumb -->
        <nav class="flex mb-8" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="{{ route('welcome') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                        </svg>
                        Inicio
                    </a>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Clase 1</span>
                    </div>
                </li>
            </ol>
        </nav>

        <!-- Main Content -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Content Area -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-lg shadow-md p-8">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-6">Contenido de la Clase</h2>
                    
                    <div class="prose max-w-none">
                        <h3 class="text-lg font-medium text-gray-900 mb-3">Objetivos de Aprendizaje</h3>
                        <ul class="list-disc list-inside text-gray-700 mb-6 space-y-2">
                            <li>Introducción a los conceptos fundamentales</li>
                            <li>Configuración del entorno de desarrollo</li>
                            <li>Primeros pasos con Laravel</li>
                            <li>Estructura de un proyecto web moderno</li>
                        </ul>

                        <h3 class="text-lg font-medium text-gray-900 mb-3">Temas Cubiertos</h3>
                        <div class="bg-gray-50 rounded-lg p-4 mb-6">
                            <ol class="list-decimal list-inside text-gray-700 space-y-2">
                                <li>Arquitectura MVC (Modelo-Vista-Controlador)</li>
                                <li>Rutas y controladores en Laravel</li>
                                <li>Blade: motor de plantillas</li>
                                <li>Integración con Tailwind CSS</li>
                            </ol>
                        </div>

                        <h3 class="text-lg font-medium text-gray-900 mb-3">Recursos Adicionales</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="border border-gray-200 rounded-lg p-4">
                                <h4 class="font-medium text-gray-900 mb-2">📖 Documentación</h4>
                                <p class="text-gray-600 text-sm">Enlaces a documentación oficial y recursos de aprendizaje</p>
                            </div>
                            <div class="border border-gray-200 rounded-lg p-4">
                                <h4 class="font-medium text-gray-900 mb-2">💻 Ejercicios</h4>
                                <p class="text-gray-600 text-sm">Actividades prácticas para reforzar el aprendizaje</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Información de la Clase</h3>
                    <div class="space-y-3">
                        <div class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <span>Duración: 2 horas</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>Nivel: Principiante</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                            <span>Módulo: Fundamentos</span>
                        </div>
                    </div>
                </div>

                <div class="bg-blue-50 rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-blue-900 mb-3">💡 Tip del Día</h3>
                    <p class="text-blue-800 text-sm">
                        Recuerda practicar regularmente y no dudes en experimentar con el código. 
                        La mejor forma de aprender a programar es... ¡programando!
                    </p>
                </div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="mt-12 flex flex-col sm:flex-row gap-4 justify-center">
            <button class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded-lg transition-colors duration-200 shadow-md hover:shadow-lg">
                Descargar Material
            </button>
            <button class="bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-8 rounded-lg transition-colors duration-200 shadow-md hover:shadow-lg">
                Ver Siguientes Clases
            </button>
        </div>
    </div>
</div>
@endsection
