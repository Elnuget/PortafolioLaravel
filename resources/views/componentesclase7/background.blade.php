<!-- Fondo decorativo con modo claro -->
<div class="absolute inset-0 overflow-hidden pointer-events-none">
    <!-- Formas geométricas suaves para modo claro -->
    <div class="absolute top-20 left-10 w-32 h-32 bg-blue-200/30 rounded-full animate-pulse-slow"></div>
    <div class="absolute top-40 right-20 w-24 h-24 bg-indigo-200/30 rounded-full animate-float"></div>
    <div class="absolute bottom-40 left-20 w-20 h-20 bg-purple-200/30 rounded-full animate-pulse-slow"></div>
    <div class="absolute bottom-20 right-40 w-28 h-28 bg-blue-300/20 rounded-full animate-float"></div>
    
    <!-- Patrones matemáticos sutiles -->
    <div class="absolute top-1/2 left-1/4 transform -translate-x-1/2 -translate-y-1/2 opacity-10">
        <svg width="200" height="200" viewBox="0 0 200 200" class="text-blue-300">
            <defs>
                <pattern id="dots" patternUnits="userSpaceOnUse" width="20" height="20">
                    <circle cx="10" cy="10" r="2" fill="currentColor"/>
                </pattern>
            </defs>
            <rect width="200" height="200" fill="url(#dots)"/>
        </svg>
    </div>
    
    <div class="absolute top-1/3 right-1/4 transform translate-x-1/2 -translate-y-1/2 opacity-10">
        <svg width="150" height="150" viewBox="0 0 150 150" class="text-indigo-300">
            <defs>
                <pattern id="grid" patternUnits="userSpaceOnUse" width="15" height="15">
                    <path d="M 15 0 L 0 0 0 15" fill="none" stroke="currentColor" stroke-width="1"/>
                </pattern>
            </defs>
            <rect width="150" height="150" fill="url(#grid)"/>
        </svg>
    </div>
</div>
