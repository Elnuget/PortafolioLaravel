<!-- Sección 1: Introducción -->
<section id="seccion1" class="mb-12">
    <div class="section-header flex items-center mb-6">
        <div class="w-10 h-10 bg-red-600 rounded-lg flex items-center justify-center mr-4 shadow-lg">
            <span class="text-white font-bold">1</span>
        </div>
        <h3 class="text-2xl font-bold text-white">Título de Sección 1</h3>
    </div>
    
    <div class="bg-black bg-opacity-30 p-6 rounded-xl border border-gray-800 mb-6">
        <p class="text-gray-300 mb-4">
            Este es un párrafo introductorio que explica el propósito de esta sección. Aquí puedes proporcionar 
            una descripción general del tema que se va a tratar.
        </p>
        
        <ul class="list-disc pl-6 text-gray-300 space-y-2 mb-4">
            <li>Primer punto importante sobre el tema</li>
            <li>Segundo punto importante sobre el tema</li>
            <li>Tercer punto importante sobre el tema</li>
        </ul>
        
        <div class="flex items-center p-4 bg-gray-800 bg-opacity-50 rounded-lg border-l-4 border-red-500 mt-6">
            <svg class="w-6 h-6 text-red-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <p class="text-gray-300 text-sm font-medium">
                Información importante o consejo que debe destacarse dentro de esta sección.
            </p>
        </div>
    </div>
    
    <!-- Ejemplo de bloque de código -->
    <div class="mb-6">
        <div class="code-header flex justify-between items-center bg-gray-800 rounded-t-lg px-4 py-2">
            <span class="text-sm text-gray-400">Ejemplo de código</span>
            <div class="flex space-x-2">
                <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                <div class="w-3 h-3 bg-green-500 rounded-full"></div>
            </div>
        </div>
        <pre class="bg-gray-900 rounded-b-lg p-4 overflow-x-auto text-sm text-gray-300">
<code>// Código de ejemplo
function ejemplo() {
    console.log("Este es un ejemplo de código");
    return true;
}</code></pre>
    </div>
    
    <!-- Ejemplo de tarjeta de información -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
        <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-lg p-6 border border-gray-700 shadow-lg transition-all duration-300 hover:shadow-red-900/10 hover:-translate-y-1">
            <h4 class="text-xl font-bold text-white mb-3 flex items-center">
                <svg class="w-5 h-5 mr-2 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                </svg>
                Subtema 1
            </h4>
            <p class="text-gray-300">Información detallada sobre el subtema 1.</p>
        </div>
        
        <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-lg p-6 border border-gray-700 shadow-lg transition-all duration-300 hover:shadow-red-900/10 hover:-translate-y-1">
            <h4 class="text-xl font-bold text-white mb-3 flex items-center">
                <svg class="w-5 h-5 mr-2 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                </svg>
                Subtema 2
            </h4>
            <p class="text-gray-300">Información detallada sobre el subtema 2.</p>
        </div>
    </div>
</section>
