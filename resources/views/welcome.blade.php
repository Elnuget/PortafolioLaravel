@extends('layouts.app')

@section('title', 'Mi Portafolio Académico - Laravel')

@section('content')
<!-- Hero Section -->
<div class="min-h-screen bg-gradient-to-br from-slate-900 via-gray-900 to-black text-white relative overflow-hidden">
    <!-- Background pattern -->
    <div class="absolute inset-0 bg-gradient-to-br from-red-900/20 via-transparent to-red-900/10"></div>
    <div class="container mx-auto px-6 py-20 relative z-10">
        {{-- Header Component --}}
        @include('welcomecomponentes.header')

        {{-- Experience & Skills Component --}}
        @include('welcomecomponentes.experience-skills')

        {{-- Classes Grid Component --}}
        @include('welcomecomponentes.classes-grid')

        {{-- Stats Component --}}
        @include('welcomecomponentes.stats')

        {{-- Call to Action Component --}}
        @include('welcomecomponentes.call-to-action')
    </div>
</div>

{{-- Scripts and Styles Component --}}
@include('welcomecomponentes.scripts-styles')
@endsection