@extends('layouts.app')

@section('title', 'MCD y MCM - Matemáticas para Programación')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-900 to-red-900 py-12">
    <div class="max-w-6xl mx-auto px-6">
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
