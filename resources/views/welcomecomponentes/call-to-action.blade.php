<!-- Call to Action -->
<div class="text-center mt-16">
    <div class="bg-black/20 backdrop-blur-lg rounded-2xl p-8 border border-red-500/30 max-w-3xl mx-auto">
        <h3 class="text-2xl font-bold mb-4">¿Interesado en colaborar o aprender?</h3>
        <p class="text-red-100 mb-6">
            Como desarrollador de software con experiencia en educación, combino la tecnología con la pedagogía para crear soluciones innovadoras. 
            Cada clase contiene conceptos fundamentales respaldados por mi experiencia docente y técnica.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="mailto:cangulo009@outlook.es" class="bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white font-semibold py-3 px-8 rounded-xl transition-all duration-200 shadow-lg hover:shadow-xl">
                📧 Contactar por Email
            </a>
            <a href="{{ route('clase1.index') }}" class="bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white font-semibold py-3 px-8 rounded-xl transition-all duration-200 shadow-lg hover:shadow-xl">
                🧮 Comenzar con MCD y MCM
            </a>
            <button onclick="scrollToClasses()" class="bg-black/30 hover:bg-black/50 text-white font-semibold py-3 px-8 rounded-xl transition-all duration-200 border border-red-500/30">
                📚 Ver todas las clases
            </button>
        </div>
        
        <!-- Additional Info -->
        <div class="mt-8 pt-6 border-t border-red-500/30">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm text-red-200">
                <div class="flex items-center justify-center gap-2">
                    <span>🌍</span>
                    <span>Disponibilidad para viajar</span>
                </div>
                <div class="flex items-center justify-center gap-2">
                    <span>🚗</span>
                    <span>Vehículo propio • Licencia A y B</span>
                </div>
                <div class="flex items-center justify-center gap-2">
                    <span>🇺🇸</span>
                    <span>Inglés Intermedio B1</span>
                </div>
            </div>
        </div>
    </div>
</div>
