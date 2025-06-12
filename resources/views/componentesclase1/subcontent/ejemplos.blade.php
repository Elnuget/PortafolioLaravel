<!-- Subcomponente de ejemplos tipo examen -->
<h3 class="text-xl font-bold text-red-400 mb-4 flex items-center">
    <span class="mr-2">04</span>
    <span class="w-12 h-0.5 bg-red-400 mr-2"></span>
    Ejemplos Tipo Examen SENESCYT
</h3>
<div class="bg-black text-white rounded-xl p-6 mb-8 shadow-lg border border-red-900 overflow-hidden">
    <div class="flex items-center mb-4">
        <div class="w-3 h-3 bg-red-500 rounded-full mr-2"></div>
        <div class="w-3 h-3 bg-yellow-500 rounded-full mr-2"></div>
        <div class="w-3 h-3 bg-green-500 rounded-full mr-2"></div>
        <span class="text-gray-400 text-sm ml-2">Ejemplo Ser Bachiller</span>
    </div>
    
    <div class="text-gray-200 mb-4 p-4 bg-gray-900 bg-opacity-50 rounded-lg">
        <p class="font-bold text-red-400">Problema:</p>
        <p class="mt-2">Dos buses de transporte público salen desde la terminal terrestre de Quito a las 8:00 am. El primero retorna a la terminal cada 45 minutos y el segundo cada 60 minutos. ¿A qué hora vuelven a coincidir ambos buses en la terminal?</p>
    </div>
    
    <div class="text-gray-200 p-4 bg-gray-900 bg-opacity-50 rounded-lg">
        <p class="font-bold text-red-400">Solución:</p>
        <p class="mt-2">Necesitamos hallar el mínimo común múltiplo de 45 y 60:</p>
        <ol class="mt-2 space-y-2 ml-4">
            <li>1. Primero calculamos el MCD de 45 y 60:</li>
            <li class="ml-4">MCD(45, 60) = MCD(60, 45) = MCD(45, 15) = MCD(15, 0) = 15</li>
            <li>2. Luego aplicamos la fórmula del MCM:</li>
            <li class="ml-4">MCM(45, 60) = (45 × 60) / MCD(45, 60) = 2700 / 15 = 180</li>
        </ol>
        <p class="mt-3 font-bold">Por lo tanto, ambos buses volverán a encontrarse en la terminal 180 minutos (3 horas) después de las 8:00 am, es decir, a las 11:00 am.</p>
    </div>
</div>

<div class="bg-black text-white rounded-xl p-6 mb-8 shadow-lg border border-red-900 overflow-hidden">
    <div class="flex items-center mb-4">
        <div class="w-3 h-3 bg-red-500 rounded-full mr-2"></div>
        <div class="w-3 h-3 bg-yellow-500 rounded-full mr-2"></div>
        <div class="w-3 h-3 bg-green-500 rounded-full mr-2"></div>
        <span class="text-gray-400 text-sm ml-2">Ejemplo SENESCYT</span>
    </div>
    
    <div class="text-gray-200 mb-4 p-4 bg-gray-900 bg-opacity-50 rounded-lg">
        <p class="font-bold text-red-400">Problema:</p>
        <p class="mt-2">En un jardín rectangular se quiere colocar baldosas cuadradas del mayor tamaño posible, de forma que cubran exactamente todo el jardín. Si el jardín mide 240 cm de largo y 168 cm de ancho, ¿cuál debe ser la longitud del lado de cada baldosa?</p>
    </div>
    
    <div class="text-gray-200 p-4 bg-gray-900 bg-opacity-50 rounded-lg">
        <p class="font-bold text-red-400">Solución:</p>
        <p class="mt-2">Necesitamos encontrar el máximo común divisor de 240 y 168:</p>
        <ol class="mt-2 space-y-2 ml-4">
            <li>1. Aplicamos el algoritmo de Euclides:</li>
            <li class="ml-4">MCD(240, 168) = MCD(168, 72) = MCD(72, 24) = MCD(24, 0) = 24</li>
        </ol>
        <p class="mt-3 font-bold">Por lo tanto, las baldosas deben medir 24 cm por cada lado para cubrir exactamente el jardín.</p>
    </div>
</div>
