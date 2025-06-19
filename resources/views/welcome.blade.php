@extends('layouts.app')

@section('title', 'Bienvenido - Mi Portafolio')

@section('content')
<div class="min-h-screen flex items-center justify-center">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h1 class="text-5xl font-bold text-gray-900 mb-6">
            ¡Hola! 👋
        </h1>
        <p class="text-xl text-gray-600 mb-8 leading-relaxed">
            Bienvenido a mi portafolio construido con Laravel y Tailwind CSS
        </p>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-12">
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <div class="w-12 h-12 bg-blue-500 rounded-lg mb-4 mx-auto flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Desarrollo Web</h3>
                <p class="text-gray-600">Creando experiencias web modernas y responsivas</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <div class="w-12 h-12 bg-green-500 rounded-lg mb-4 mx-auto flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Innovación</h3>
                <p class="text-gray-600">Siempre buscando nuevas formas de resolver problemas</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <div class="w-12 h-12 bg-purple-500 rounded-lg mb-4 mx-auto flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Pasión</h3>
                <p class="text-gray-600">Amor por el código limpio y las buenas prácticas</p>
            </div>
        </div>
        
        <div class="mt-12">
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded-lg transition-colors duration-200 shadow-md hover:shadow-lg">
                    Ver mis proyectos
                </button>
                <a href="{{ route('clase1.index') }}" class="bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-8 rounded-lg transition-colors duration-200 shadow-md hover:shadow-lg text-center">
                    Ir a Clase 1
                </a>
                <a href="{{ route('clase2.index') }}" class="bg-red-600 hover:bg-red-700 text-white font-semibold py-3 px-8 rounded-lg transition-colors duration-200 shadow-md hover:shadow-lg text-center">
                    Ir a Clase 2
                </a>
                <a href="{{ route('clase3.index') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded-lg transition-colors duration-200 shadow-md hover:shadow-lg text-center">
                    Ir a Clase 3
                </a>
                <a href="{{ route('claseformato.index') }}" class="bg-purple-600 hover:bg-purple-700 text-white font-semibold py-3 px-8 rounded-lg transition-colors duration-200 shadow-md hover:shadow-lg text-center">
                    Ir a Formato de Clase
                </a>
            </div>
        </div>
    </div>
</div>
@endsection