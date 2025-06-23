<!-- Call to Action -->
<div class="text-center mt-16">
    <div class="bg-white/5 backdrop-blur-xl rounded-2xl p-8 border border-white/10 shadow-2xl max-w-3xl mx-auto">
        <h3 class="text-2xl font-bold mb-4 text-white">¿Interesado en colaborar o aprender?</h3>
        <p class="text-gray-300 mb-6">
            Como desarrollador de software con experiencia en educación, combino la tecnología con la pedagogía para crear soluciones innovadoras. 
            Cada clase contiene conceptos fundamentales respaldados por mi experiencia docente y técnica.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="mailto:cangulo009@outlook.es" class="bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white font-semibold py-3 px-8 rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                📧 Contactar por Email
            </a>
            <a href="{{ route('clase1.index') }}" class="bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white font-semibold py-3 px-8 rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                🧮 Comenzar con MCD y MCM
            </a>
            <button onclick="scrollToClasses()" class="bg-white/10 hover:bg-white/20 text-white font-semibold py-3 px-8 rounded-xl transition-all duration-300 border border-white/20 hover:border-red-400">
                📚 Ver todas las clases
            </button>
        </div>
        
        <!-- Additional Info -->
        <div class="mt-8 pt-6 border-t border-white/20">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm text-gray-400">
                <div class="flex items-center justify-center gap-2 hover:text-red-400 transition-colors">
                    <span>🌍</span>
                    <span>Disponibilidad para viajar</span>
                </div>
                <div class="flex items-center justify-center gap-2 hover:text-red-400 transition-colors">
                    <span>🚗</span>
                    <span>Vehículo propio • Licencia A y B</span>                </div>
                <div class="flex items-center justify-center gap-2 hover:text-red-400 transition-colors">
                    <span>🇺🇸</span>
                    <span>Inglés Intermedio B1</span>
                </div>
            </div>
        </div>
    </div>
</div>
