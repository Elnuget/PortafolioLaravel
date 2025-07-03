<!-- Componente de Miscelánea de Ejercicios Adicionales -->
<div class="bg-white bg-opacity-80 p-6 rounded-xl border border-gray-200 shadow-sm mb-10">
    <h3 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
        <svg class="w-7 h-7 mr-3 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
        </svg>
        Miscelánea de Ejercicios Adicionales
    </h3>
    
    <div class="flex items-center p-4 bg-indigo-50 rounded-lg border-l-4 border-indigo-500 mb-8">
        <svg class="w-6 h-6 text-indigo-600 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
        <p class="text-gray-700 text-sm">
            <span class="font-medium">Instrucciones:</span> Los siguientes ejercicios incluyen situaciones especiales de porcentajes como aumentos y descuentos sucesivos. Resuelve aplicando las fórmulas y procedimientos aprendidos.
        </p>
    </div>
    
    <!-- Sección de Aumentos Sucesivos -->
    <div class="mb-10">
        <h4 class="text-xl font-bold text-indigo-800 mb-4 bg-indigo-50 p-3 rounded-lg">Aumentos Sucesivos</h4>
        
        <div class="bg-white p-5 rounded-lg border border-gray-200 mb-6">
            <p class="text-gray-700 mb-4">
                Entendemos por aumentos sucesivos a aquellos aumentos que se van efectuando uno a continuación 
                de otro considerando como el nuevo 100% a la cantidad que se va formando.
            </p>
            
            <div class="math-formula mb-6">
                <p class="font-medium text-gray-800 mb-2">Fórmula para Aumento Único (AU) equivalente:</p>
                \[ AU = \left(1 + \frac{A_1}{100}\right) \times \left(1 + \frac{A_2}{100}\right) - 1 \]
                <p class="text-sm text-gray-600 mt-2">Donde \(A_1\) y \(A_2\) son los porcentajes de los aumentos sucesivos.</p>
            </div>
            
            <div class="example-block">
                <h5 class="font-bold text-indigo-800 mb-2">Ejemplo:</h5>
                <p class="text-gray-700 mb-3">Si el precio de un televisor es 240 dólares y sufre dos aumentos sucesivos del 20% y 25% respectivamente ¿Cuál será su nuevo precio?</p>
                
                <div class="bg-gray-50 p-4 rounded-lg border border-gray-200">
                    <p class="text-gray-700 mb-2"><span class="font-medium">Solución:</span></p>
                    
                    <p class="text-gray-700 mb-2">1er aumento: 20% de 240</p>
                    <div class="math-formula my-2">
                        \[ \frac{20}{100} \times 240 = 48 \]
                    </div>
                    <p class="text-gray-700 mb-3">Nuevo precio: 240 + 48 = 288</p>
                    
                    <p class="text-gray-700 mb-2">2do aumento: 25% de 288</p>
                    <div class="math-formula my-2">
                        \[ \frac{25}{100} \times 288 = 72 \]
                    </div>
                    <p class="text-gray-700 mb-3">Nuevo precio: 288 + 72 = 360</p>
                    
                    <p class="text-gray-700 mb-2">Usando la fórmula de aumento único (AU):</p>
                    <div class="math-formula my-2">
                        \[ AU = \left(1 + \frac{A_1}{100}\right) \times \left(1 + \frac{A_2}{100}\right) - 1 \]
                        \[ AU = \left(1 + \frac{20}{100}\right) \times \left(1 + \frac{25}{100}\right) - 1 \]
                        \[ AU = 1.20 \times 1.25 - 1 \]
                        \[ AU = 1.50 - 1 = 0.50 \text{ ó } 50\% \]
                    </div>
                    <p class="text-gray-700">Por lo tanto, el aumento único equivalente es del 50% y el precio final es: $240 + 50% de $240 = $240 + $120 = $360</p>
                </div>
            </div>
        </div>
        
        <div class="exercise-block">
            <h5 class="font-bold text-indigo-800 mb-3">Ejercicios de Aumentos Sucesivos:</h5>
            <ol class="list-decimal pl-6 space-y-4">
                <li class="text-gray-700">
                    <p>Un artículo que cuesta $180 sufre dos aumentos sucesivos del 15% y 8%. Calcula su precio final.</p>
                </li>
                <li class="text-gray-700">
                    <p>¿Qué aumento único equivale a tres aumentos sucesivos del 10%, 5% y 8%?</p>
                </li>
                <li class="text-gray-700">
                    <p>Si un producto cuesta $250 y sufre aumentos sucesivos del 12%, 8% y 10%, ¿cuál será su precio final?</p>
                </li>
                <li class="text-gray-700">
                    <p>El sueldo de un empleado era de $1,200 y recibió dos aumentos sucesivos de 8% y 12%. Calcula su nuevo sueldo.</p>
                </li>
            </ol>
        </div>
    </div>
    
    <!-- Sección de Descuentos Sucesivos -->
    <div class="mb-10">
        <h4 class="text-xl font-bold text-indigo-800 mb-4 bg-indigo-50 p-3 rounded-lg">Descuentos Sucesivos</h4>
        
        <div class="bg-white p-5 rounded-lg border border-gray-200 mb-6">
            <p class="text-gray-700 mb-4">
                Se entiende por descuentos sucesivos, a aquellos descuentos que se van efectuando uno a continuación 
                de otro considerando como el nuevo 100% a la cantidad que va quedando.
            </p>
            
            <div class="math-formula mb-6">
                <p class="font-medium text-gray-800 mb-2">Fórmula para Descuento Único (DU) equivalente:</p>
                \[ DU = 1 - \left(1 - \frac{D_1}{100}\right) \times \left(1 - \frac{D_2}{100}\right) \]
                <p class="text-sm text-gray-600 mt-2">Donde \(D_1\) y \(D_2\) son los porcentajes de los descuentos sucesivos.</p>
            </div>
            
            <div class="example-block">
                <h5 class="font-bold text-indigo-800 mb-2">Ejemplo:</h5>
                <p class="text-gray-700 mb-3">Si al precio de una grabadora que cuesta 300 dólares se le hace dos descuentos sucesivos del 20% y 10%, ¿cuál será su nuevo precio?</p>
                
                <div class="bg-gray-50 p-4 rounded-lg border border-gray-200">
                    <p class="text-gray-700 mb-2"><span class="font-medium">Solución:</span></p>
                    
                    <p class="text-gray-700 mb-2">Precio Inicial: 300</p>
                    <p class="text-gray-700 mb-2">1er Descuento: 20% de 300</p>
                    <div class="math-formula my-2">
                        \[ \frac{20}{100} \times 300 = 60 \]
                    </div>
                    <p class="text-gray-700 mb-3">Nuevo precio: 300 - 60 = 240</p>
                    
                    <p class="text-gray-700 mb-2">2do Descuento: 10% de 240</p>
                    <div class="math-formula my-2">
                        \[ \frac{10}{100} \times 240 = 24 \]
                    </div>
                    <p class="text-gray-700 mb-3">Precio Final: 240 - 24 = 216</p>
                    
                    <p class="text-gray-700 mb-2">Usando la fórmula de descuento único (DU):</p>
                    <div class="math-formula my-2">
                        \[ DU = 1 - \left(1 - \frac{D_1}{100}\right) \times \left(1 - \frac{D_2}{100}\right) \]
                        \[ DU = 1 - \left(1 - \frac{20}{100}\right) \times \left(1 - \frac{10}{100}\right) \]
                        \[ DU = 1 - 0.80 \times 0.90 \]
                        \[ DU = 1 - 0.72 = 0.28 \text{ ó } 28\% \]
                    </div>
                    <p class="text-gray-700">Por lo tanto, el descuento único equivalente es del 28% y el precio final es: $300 - 28% de $300 = $300 - $84 = $216</p>
                </div>
            </div>
        </div>
        
        <div class="exercise-block">
            <h5 class="font-bold text-indigo-800 mb-3">Ejercicios de Descuentos Sucesivos:</h5>
            <ol class="list-decimal pl-6 space-y-4">
                <li class="text-gray-700">
                    <p>Un artículo que cuesta $450 recibe descuentos sucesivos del 25% y 12%. Calcula su precio final.</p>
                </li>
                <li class="text-gray-700">
                    <p>¿Qué descuento único equivale a dos descuentos sucesivos del 15% y 20%?</p>
                </li>
                <li class="text-gray-700">
                    <p>Si un producto cuesta $380 y recibe descuentos sucesivos del 10%, 15% y 5%, ¿cuál será su precio final?</p>
                </li>
                <li class="text-gray-700">
                    <p>Una tienda ofrece un descuento del 30% en todos sus productos y luego un 10% adicional para clientes con tarjeta. Si un artículo cuesta $520, ¿cuánto pagará un cliente con tarjeta?</p>
                </li>
            </ol>
        </div>
    </div>
    
    <!-- Sección de Ejercicios Combinados -->
    <div>
        <h4 class="text-xl font-bold text-indigo-800 mb-4 bg-indigo-50 p-3 rounded-lg">Ejercicios Combinados</h4>
        
        <div class="exercise-block">
            <ol class="list-decimal pl-6 space-y-4">
                <li class="text-gray-700">
                    <p>Un producto cuesta $200. Primero aumentó un 15% y luego disminuyó un 15%. ¿Cuál es su precio final? (Explica por qué el precio final no es igual al original).</p>
                </li>
                <li class="text-gray-700">
                    <p>El precio de un artículo disminuyó en un 20% y luego aumentó en un 20%. ¿Es el precio final mayor, menor o igual al precio original? Justifica tu respuesta.</p>
                </li>
                <li class="text-gray-700">
                    <p>Un televisor costaba $350, primero aumentó un 10%, luego disminuyó un 5% y finalmente aumentó un 8%. ¿Cuál es su precio final?</p>
                </li>
                <li class="text-gray-700">
                    <p>El sueldo de María era de $1,500. Recibió un aumento del 12%, pero debido a recortes, luego tuvo una reducción del 8%. ¿Cuál es su sueldo final?</p>
                </li>
                <li class="text-gray-700">
                    <p>Una tienda aumenta todos sus precios un 25% y luego ofrece un descuento del 20% sobre el nuevo precio. ¿Es esta estrategia beneficiosa para los clientes? Demuestra tu respuesta matemáticamente.</p>
                </li>
                <li class="text-gray-700">
                    <p>¿Qué es mejor para un cliente: un descuento del 40% o dos descuentos sucesivos del 25% y 20%?</p>
                </li>
            </ol>
        </div>
    </div>
</div>
