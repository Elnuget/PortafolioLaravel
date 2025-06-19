<!-- Módulo 3: Análisis Dimensional y Conversiones -->
<section id="modulo3" class="mb-12 module-card">
    <div class="section-header flex items-center mb-6">
        <div class="w-12 h-12 bg-gradient-to-br from-yellow-600 to-orange-600 rounded-lg flex items-center justify-center mr-4 shadow-lg">
            <span class="text-white font-bold text-lg">3</span>
        </div>
        <div>
            <h3 class="text-3xl font-bold text-white">🔬 Análisis Dimensional y Conversiones</h3>
            <p class="text-yellow-300 mt-1">Verificación de ecuaciones y conversión de unidades</p>
        </div>
    </div>
    
    <!-- Introducción general del módulo -->
    <div class="bg-black bg-opacity-30 p-6 rounded-xl border border-gray-800 mb-8">
        <p class="text-gray-300 mb-4 text-lg leading-relaxed">
            Este módulo abarca dos aspectos fundamentales de la física: el análisis dimensional para verificar 
            ecuaciones y deducir relaciones, y las conversiones de unidades para trabajar con diferentes sistemas 
            de medición de manera sistemática y precisa.
        </p>
        
        <!-- Navegación entre submódulos -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
            <div class="bg-gradient-to-br from-blue-900/30 to-purple-900/30 p-6 rounded-lg border border-blue-500/30 hover:border-blue-400/50 transition-all duration-300 cursor-pointer" onclick="document.getElementById('modulo3a').scrollIntoView({behavior: 'smooth'})">
                <div class="flex items-center mb-3">
                    <div class="w-10 h-10 bg-gradient-to-br from-blue-600 to-purple-600 rounded-lg flex items-center justify-center mr-3">
                        <span class="text-white font-bold">3A</span>
                    </div>
                    <h4 class="text-xl font-bold text-white">Análisis Dimensional</h4>
                </div>
                <p class="text-blue-300 text-sm mb-3">
                    Principio de homogeneidad, verificación de ecuaciones y deducción de fórmulas
                </p>
                <ul class="text-gray-300 text-xs space-y-1">
                    <li>• Verificación de fórmulas físicas</li>
                    <li>• Deducción de relaciones</li>
                    <li>• Dimensiones fundamentales y derivadas</li>
                </ul>
            </div>
            
            <div class="bg-gradient-to-br from-orange-900/30 to-red-900/30 p-6 rounded-lg border border-orange-500/30 hover:border-orange-400/50 transition-all duration-300 cursor-pointer" onclick="document.getElementById('modulo3b').scrollIntoView({behavior: 'smooth'})">
                <div class="flex items-center mb-3">
                    <div class="w-10 h-10 bg-gradient-to-br from-orange-600 to-red-600 rounded-lg flex items-center justify-center mr-3">
                        <span class="text-white font-bold">3B</span>
                    </div>
                    <h4 class="text-xl font-bold text-white">Conversiones de Unidades</h4>
                </div>
                <p class="text-orange-300 text-sm mb-3">
                    Método del factor unitario y conversiones entre sistemas de unidades
                </p>
                <ul class="text-gray-300 text-xs space-y-1">
                    <li>• Método del factor unitario</li>
                    <li>• Conversiones simples y complejas</li>
                    <li>• Sistemas SI, Imperial y CGS</li>
                </ul>
            </div>
        </div>
    </div>    
    <!-- Incluir Submódulo 3A: Análisis Dimensional -->
    @include('componentesclase5.subcontent.modulo3a_analisis_dimensional')
    
    <!-- Incluir Submódulo 3B: Conversiones de Unidades -->
    @include('componentesclase5.subcontent.modulo3b_conversiones')
    
</section>
