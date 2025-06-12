<!-- Subcomponente de fórmulas importantes -->
<h3 class="text-xl font-bold text-red-400 mb-4 flex items-center">
    <span class="mr-2">03</span>
    <span class="w-12 h-0.5 bg-red-400 mr-2"></span>
    Fórmulas Importantes
</h3>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
    <div class="bg-gradient-to-br from-red-900 to-black border border-red-700 rounded-xl p-5 shadow-lg transform transition hover:scale-105">
        <h4 class="font-bold text-white mb-3 flex items-center">
            <span class="text-red-400 mr-2">🧮</span> Algoritmo de Euclides
        </h4>
        <div class="text-gray-200 text-sm font-mono bg-black bg-opacity-60 p-4 rounded-lg">
            MCD(a,b) = MCD(b, a mod b)<br>
            Si b = 0, entonces MCD(a,b) = a<br><br>
            <span class="text-red-400">// Ejemplo:</span><br>
            MCD(48, 18) = MCD(18, 12) = MCD(12, 6) = MCD(6, 0) = 6
        </div>
    </div>
    <div class="bg-gradient-to-br from-red-900 to-black border border-red-700 rounded-xl p-5 shadow-lg transform transition hover:scale-105">
        <h4 class="font-bold text-white mb-3 flex items-center">
            <span class="text-red-400 mr-2">🔢</span> Relaciones Clave
        </h4>
        <div class="text-gray-200 text-sm font-mono bg-black bg-opacity-60 p-4 rounded-lg">
            MCM(a,b) = (a × b) / MCD(a,b)<br><br>
            <span class="text-red-400">// Para múltiples números:</span><br>
            MCD(a,b,c) = MCD(MCD(a,b),c)<br>
            MCM(a,b,c) = MCM(MCM(a,b),c)
        </div>
    </div>
</div>
