<!-- Componente de información lateral -->
<div class="space-y-8 font-['Poppins',sans-serif] relative">
    <!-- Efecto de fondo para el sidebar -->
    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-slate-900/10 to-transparent pointer-events-none rounded-2xl"></div>
    
    <div class="relative z-10 space-y-6">
        @include('componentesclase2.subsidebar.info')
        @include('componentesclase2.subsidebar.cronograma')
        @include('componentesclase2.subsidebar.aplicaciones')
        @include('componentesclase2.subsidebar.recursos')
        @include('componentesclase2.subsidebar.requisitos')
    </div>
</div>
