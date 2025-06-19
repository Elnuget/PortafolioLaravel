<div class="flex flex-wrap justify-center gap-4 mt-6">
    <a href="{{ route('welcome') }}" class="px-6 py-3 bg-gray-700 hover:bg-gray-600 text-white rounded-lg transition-all duration-200 flex items-center gap-2 shadow-md">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
        </svg>
        Volver al Inicio
    </a>
    
    <button id="descargaPDF" class="px-6 py-3 bg-teal-700 hover:bg-teal-600 text-white rounded-lg transition-all duration-200 flex items-center gap-2 shadow-md">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
        </svg>
        Descargar Material
    </button>
    
    <button id="compartirBtn" class="px-6 py-3 bg-sky-700 hover:bg-sky-600 text-white rounded-lg transition-all duration-200 flex items-center gap-2 shadow-md">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
        </svg>
        Compartir
    </button>
</div>

<script>
    document.getElementById('descargaPDF').addEventListener('click', function() {
        alert('Funcionalidad de descarga en desarrollo');
    });
    
    document.getElementById('compartirBtn').addEventListener('click', function() {
        if (navigator.share) {
            navigator.share({
                title: 'Planteamiento de Ecuaciones Lineales - Cálculo de Edades',
                text: 'Mira este material sobre ecuaciones lineales y cálculo de edades',
                url: window.location.href,
            })
            .catch((error) => console.log('Error al compartir', error));
        } else {
            alert('La API de compartir no está disponible en este navegador');
        }
    });
</script>
