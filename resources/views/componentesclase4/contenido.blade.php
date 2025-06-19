<div class="relative p-6">
    <!-- Botones de módulos -->
    <div class="flex flex-wrap gap-2 mb-6 justify-center">
        <button class="module-button px-4 py-2 rounded-lg text-white font-medium text-sm" data-module="module1">
            Módulo 1: Fundamentos
        </button>
        <button class="module-button px-4 py-2 rounded-lg text-white font-medium text-sm" data-module="module2">
            Módulo 2: Problemas Básicos
        </button>
        <button class="module-button px-4 py-2 rounded-lg text-white font-medium text-sm" data-module="module3">
            Módulo 3: Proyección Temporal
        </button>
        <button class="module-button px-4 py-2 rounded-lg text-white font-medium text-sm" data-module="module4">
            Módulo 4: Problemas Complejos
        </button>
        <button class="module-button px-4 py-2 rounded-lg text-white font-medium text-sm" data-module="module5">
            Módulo 5: Estrategias
        </button>
    </div>

    <!-- Contenido de los módulos -->
    <div class="bg-slate-800 bg-opacity-50 p-5 rounded-xl shadow-lg">
        <!-- Módulo 1 -->
        <div id="module1" class="module-content">
            <h3 class="text-2xl font-bold text-teal-300 mb-4">Fundamentos de Ecuaciones Lineales</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                    <h4 class="text-xl font-semibold text-cyan-200 mb-2">¿Qué es una Ecuación Lineal?</h4>
                    <p class="text-gray-200">Una ecuación lineal con una incógnita tiene la forma: <span class="bg-slate-600 px-2 py-1 rounded text-teal-300">ax + b = c</span></p>
                    <ul class="mt-3 space-y-1 list-disc pl-5 text-gray-300">
                        <li><strong>a:</strong> coeficiente de la variable (≠ 0)</li>
                        <li><strong>b:</strong> término independiente del lado izquierdo</li>
                        <li><strong>c:</strong> término del lado derecho</li>
                        <li><strong>x:</strong> la incógnita que queremos encontrar</li>
                    </ul>
                    <div class="mt-3 bg-slate-600 bg-opacity-30 p-2 rounded text-sm">
                        <p class="text-teal-300">Ejemplos:</p>
                        <p class="text-gray-200">3x + 5 = 14</p>
                        <p class="text-gray-200">2x - 7 = 15</p>
                        <p class="text-gray-200">x + 8 = 20</p>
                    </div>
                </div>
                
                <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                    <h4 class="text-xl font-semibold text-cyan-200 mb-2">Traducción del Lenguaje Natural</h4>
                    <p class="text-gray-200">Palabras clave para traducir problemas:</p>
                    <div class="mt-3 grid grid-cols-2 gap-2 text-sm">
                        <div class="bg-slate-600 bg-opacity-50 p-2 rounded">"suma de" → x + y</div>
                        <div class="bg-slate-600 bg-opacity-50 p-2 rounded">"diferencia" → x - y</div>
                        <div class="bg-slate-600 bg-opacity-50 p-2 rounded">"producto de" → x · y</div>
                        <div class="bg-slate-600 bg-opacity-50 p-2 rounded">"doble de" → 2x</div>
                        <div class="bg-slate-600 bg-opacity-50 p-2 rounded">"triple de" → 3x</div>
                        <div class="bg-slate-600 bg-opacity-50 p-2 rounded">"mitad de" → x/2</div>
                        <div class="bg-slate-600 bg-opacity-50 p-2 rounded">"excede en" → x + n</div>
                        <div class="bg-slate-600 bg-opacity-50 p-2 rounded">"es igual a" → =</div>
                    </div>
                </div>
                
                <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                    <h4 class="text-xl font-semibold text-cyan-200 mb-2">Ejemplo Práctico: Números</h4>
                    <p class="text-gray-200">Problema: "Un número aumentado en 15 es igual a 47. ¿Cuál es el número?"</p>
                    <div class="mt-3 bg-slate-600 bg-opacity-30 p-3 rounded-lg">
                        <p class="text-cyan-100">Paso 1: Identificar la incógnita</p>
                        <p class="text-gray-300">Sea x = el número desconocido</p>
                        <p class="text-cyan-100 mt-2">Paso 2: Traducir a ecuación</p>
                        <p class="text-gray-300">"Un número aumentado en 15" → x + 15</p>
                        <p class="text-gray-300">"es igual a 47" → = 47</p>
                        <p class="text-teal-300 mt-1">Ecuación: x + 15 = 47</p>
                        <p class="text-cyan-100 mt-2">Paso 3: Resolver</p>
                        <p class="text-teal-300">x = 47 - 15 = 32</p>
                        <p class="text-cyan-100 mt-2">Verificación: 32 + 15 = 47 ✓</p>
                    </div>
                </div>
                
                <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                    <h4 class="text-xl font-semibold text-cyan-200 mb-2">Metodología General</h4>
                    <ol class="mt-2 space-y-2 list-decimal pl-5 text-gray-300">
                        <li><strong>Leer:</strong> Comprende completamente el problema</li>
                        <li><strong>Identificar:</strong> ¿Qué necesitas encontrar?</li>
                        <li><strong>Asignar:</strong> Define variables para las incógnitas</li>
                        <li><strong>Traducir:</strong> Convierte el texto en ecuación</li>
                        <li><strong>Resolver:</strong> Aplica operaciones algebraicas</li>
                        <li><strong>Verificar:</strong> Comprueba que la solución sea correcta</li>
                    </ol>
                </div>
                
                <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                    <h4 class="text-xl font-semibold text-cyan-200 mb-2">Ejercicio Guiado</h4>
                    <p class="text-gray-200">Problema: "El triple de un número menos 8 es igual a 25. Encuentra el número."</p>
                    <div class="mt-3 bg-slate-600 bg-opacity-30 p-3 rounded-lg">
                        <p class="text-yellow-300">¡Hazlo tú mismo!</p>
                        <p class="text-gray-300 mt-1">1. ¿Cuál es la incógnita?</p>
                        <p class="text-gray-300">2. ¿Cómo se escribe "el triple de un número"?</p>
                        <p class="text-gray-300">3. ¿Cómo se escribe "menos 8"?</p>
                        <p class="text-gray-300">4. Forma la ecuación completa</p>
                        <p class="text-gray-300">5. Resuelve y verifica</p>
                    </div>
                </div>
                
                <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                    <h4 class="text-xl font-semibold text-cyan-200 mb-2">Práctica Adicional</h4>
                    <p class="text-gray-200">Traduce estas frases a expresiones algebraicas:</p>
                    <div class="mt-3 space-y-2 text-sm">
                        <div class="bg-slate-600 bg-opacity-30 p-2 rounded">
                            <p class="text-yellow-300">1. "Cinco más que un número"</p>
                            <p class="text-gray-400">Respuesta: x + 5</p>
                        </div>
                        <div class="bg-slate-600 bg-opacity-30 p-2 rounded">
                            <p class="text-yellow-300">2. "La mitad de un número menos 3"</p>
                            <p class="text-gray-400">Respuesta: x/2 - 3</p>
                        </div>
                        <div class="bg-slate-600 bg-opacity-30 p-2 rounded">
                            <p class="text-yellow-300">3. "Cuatro veces un número aumentado en 7"</p>
                            <p class="text-gray-400">Respuesta: 4x + 7</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Sección de Ejercicios Interactivos -->
            <div class="mt-6 bg-slate-800 bg-opacity-60 p-5 rounded-xl">
                <h4 class="text-xl font-semibold text-yellow-300 mb-3">🎯 Ejercicios para Practicar</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                        <h5 class="text-lg font-medium text-cyan-200 mb-2">Ejercicio 1: Números Consecutivos</h5>
                        <p class="text-gray-200">La suma de dos números consecutivos es 37. Encuentra los números.</p>
                        <div class="mt-2 text-sm text-gray-400">
                            <p>Pista: Si x es el primer número, ¿cuál es el segundo?</p>
                        </div>
                    </div>
                    
                    <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                        <h5 class="text-lg font-medium text-cyan-200 mb-2">Ejercicio 2: Geometría Básica</h5>
                        <p class="text-gray-200">El perímetro de un rectángulo es 24 cm. Si el largo es el doble del ancho, ¿cuáles son las dimensiones?</p>
                        <div class="mt-2 text-sm text-gray-400">
                            <p>Pista: Perímetro = 2(largo + ancho)</p>
                        </div>
                    </div>
                    
                    <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                        <h5 class="text-lg font-medium text-cyan-200 mb-2">Ejercicio 3: Dinero</h5>
                        <p class="text-gray-200">Ana tiene $50 más que Luis. Si juntos tienen $230, ¿cuánto dinero tiene cada uno?</p>
                        <div class="mt-2 text-sm text-gray-400">
                            <p>Pista: Define una variable para el dinero de una persona</p>
                        </div>
                    </div>
                    
                    <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                        <h5 class="text-lg font-medium text-cyan-200 mb-2">Ejercicio 4: Velocidad y Distancia</h5>
                        <p class="text-gray-200">Un auto viaja a velocidad constante. En 3 horas recorre 180 km. ¿Cuál es su velocidad?</p>
                        <div class="mt-2 text-sm text-gray-400">
                            <p>Pista: Distancia = Velocidad × Tiempo</p>
                        </div>
                    </div>
                </div>
                
                <div class="mt-4 bg-green-900 bg-opacity-30 p-3 rounded-lg border border-green-500">
                    <h5 class="text-lg font-medium text-green-300 mb-2">💡 Estrategia de Resolución</h5>
                    <p class="text-gray-200">Para cada ejercicio:</p>
                    <ol class="mt-2 list-decimal pl-5 text-gray-300 text-sm">
                        <li>Identifica qué quieres encontrar (la incógnita)</li>
                        <li>Asigna una variable (generalmente x)</li>
                        <li>Expresa otras cantidades en términos de x</li>
                        <li>Escribe la ecuación usando la información dada</li>
                        <li>Resuelve la ecuación</li>
                        <li>Verifica tu respuesta</li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- Módulo 2 -->
        <div id="module2" class="module-content">
            <h3 class="text-2xl font-bold text-teal-300 mb-4">Problemas de Edades Básicos</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                    <h4 class="text-xl font-semibold text-cyan-200 mb-2">Edad Actual Simple</h4>
                    <p class="text-gray-200">Ejemplo: "La edad de Juan es el triple de la edad que tenía hace 8 años. ¿Cuál es su edad actual?"</p>
                    <div class="mt-3 bg-slate-600 bg-opacity-30 p-3 rounded-lg">
                        <p class="text-cyan-100">Si x = edad actual:</p>
                        <p class="text-teal-300 mt-1">x = 3(x - 8)</p>
                        <p class="text-teal-300">x = 3x - 24</p>
                        <p class="text-teal-300">-2x = -24</p>
                        <p class="text-teal-300">x = 12 años</p>
                    </div>
                </div>
                
                <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                    <h4 class="text-xl font-semibold text-cyan-200 mb-2">Relaciones entre Edades</h4>
                    <p class="text-gray-200">Cuando relacionamos edades de dos personas:</p>
                    <ul class="mt-2 space-y-1 text-gray-300">
                        <li>x = edad de la primera persona</li>
                        <li>y = edad de la segunda persona</li>
                    </ul>
                    <p class="mt-2 text-gray-200">También podemos expresar todo en función de una variable:</p>
                    <p class="mt-1 text-gray-300">Si y = x + 5, significa que la segunda persona es 5 años mayor</p>
                </div>
                
                <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                    <h4 class="text-xl font-semibold text-cyan-200 mb-2">Diferencias de Edad Constantes</h4>
                    <p class="text-gray-200">La diferencia de edad entre dos personas es siempre constante.</p>
                    <div class="mt-2 bg-slate-600 bg-opacity-30 p-3 rounded-lg">
                        <p class="text-cyan-100">Si María es 5 años mayor que Carlos:</p>
                        <p class="text-teal-300 mt-1">Ahora: E<sub>María</sub> = E<sub>Carlos</sub> + 5</p>
                        <p class="text-teal-300">En 10 años: E<sub>María</sub> + 10 = E<sub>Carlos</sub> + 10 + 5</p>
                        <p class="text-gray-300 mt-1">La diferencia sigue siendo 5 años</p>
                    </div>
                </div>
                
                <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                    <h4 class="text-xl font-semibold text-cyan-200 mb-2">Resolución con Una Variable</h4>
                    <p class="text-gray-200">Ejemplo: "La suma de las edades de un padre y su hijo es 56 años. El padre es 30 años mayor que el hijo. ¿Qué edad tienen?"</p>
                    <div class="mt-2 text-gray-300">
                        <p>Sea x = edad del hijo</p>
                        <p>Entonces x + 30 = edad del padre</p>
                        <p class="text-teal-300 mt-1">x + (x + 30) = 56</p>
                        <p class="text-teal-300">2x + 30 = 56</p>
                        <p class="text-teal-300">2x = 26</p>
                        <p class="text-teal-300">x = 13 años (hijo)</p>
                        <p class="text-teal-300">x + 30 = 43 años (padre)</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Módulo 3 -->
        <div id="module3" class="module-content">
            <h3 class="text-2xl font-bold text-teal-300 mb-4">Problemas de Edades con Proyección Temporal</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                    <h4 class="text-xl font-semibold text-cyan-200 mb-2">Edades en el Futuro</h4>
                    <p class="text-gray-200">Para calcular edades "dentro de X años", sumamos X a la edad actual.</p>
                    <div class="mt-3 bg-slate-600 bg-opacity-30 p-3 rounded-lg">
                        <p class="text-cyan-100">Ejemplo: "Dentro de 6 años, la edad de Ana será el doble de la edad de Beto. Si Ana tiene 5 años más que Beto, ¿qué edad tienen ahora?"</p>
                        <p class="text-gray-300 mt-2">Sea x = edad actual de Beto</p>
                        <p class="text-gray-300">Entonces x + 5 = edad actual de Ana</p>
                        <p class="text-teal-300 mt-1">(x + 5 + 6) = 2(x + 6)</p>
                        <p class="text-teal-300">x + 11 = 2x + 12</p>
                        <p class="text-teal-300">-x = 1</p>
                        <p class="text-teal-300">x = -1 (no tiene sentido)</p>
                        <p class="text-gray-300 mt-1">Este problema no tiene solución lógica</p>
                    </div>
                </div>
                
                <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                    <h4 class="text-xl font-semibold text-cyan-200 mb-2">Edades en el Pasado</h4>
                    <p class="text-gray-200">Para calcular edades "hace X años", restamos X a la edad actual.</p>
                    <div class="mt-3 bg-slate-600 bg-opacity-30 p-3 rounded-lg">
                        <p class="text-cyan-100">Ejemplo: "Hace 5 años, la edad de Pablo era la tercera parte de su edad actual. ¿Cuál es su edad actual?"</p>
                        <p class="text-gray-300 mt-2">Sea x = edad actual de Pablo</p>
                        <p class="text-teal-300 mt-1">x - 5 = x/3</p>
                        <p class="text-teal-300">3(x - 5) = x</p>
                        <p class="text-teal-300">3x - 15 = x</p>
                        <p class="text-teal-300">2x = 15</p>
                        <p class="text-teal-300">x = 7.5 años</p>
                    </div>
                </div>
                
                <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                    <h4 class="text-xl font-semibold text-cyan-200 mb-2">Cambios de Relaciones</h4>
                    <p class="text-gray-200">Las relaciones entre edades pueden cambiar con el tiempo:</p>
                    <div class="mt-2 bg-slate-600 bg-opacity-30 p-3 rounded-lg">
                        <p class="text-cyan-100">Ejemplo: "Hoy, Carmen tiene el doble de la edad de David. Dentro de 10 años, Carmen tendrá solo 5 años más que David. ¿Qué edades tienen ahora?"</p>
                        <p class="text-gray-300 mt-2">Sea x = edad actual de David</p>
                        <p class="text-gray-300">Entonces 2x = edad actual de Carmen</p>
                        <p class="text-teal-300 mt-1">(2x + 10) = (x + 10) + 5</p>
                        <p class="text-teal-300">2x + 10 = x + 15</p>
                        <p class="text-teal-300">x = 5 años (David)</p>
                        <p class="text-teal-300">2x = 10 años (Carmen)</p>
                    </div>
                </div>
                
                <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                    <h4 class="text-xl font-semibold text-cyan-200 mb-2">Múltiples Condiciones Temporales</h4>
                    <p class="text-gray-200">Algunos problemas combinan condiciones en diferentes momentos:</p>
                    <ul class="mt-2 space-y-1 text-gray-300">
                        <li>Relación actual entre edades</li>
                        <li>Relación en el futuro</li>
                        <li>Relación en el pasado</li>
                    </ul>
                    <p class="mt-2 text-gray-200">El secreto está en escribir todas las condiciones usando la misma variable base.</p>
                </div>
            </div>
        </div>

        <!-- Módulo 4 -->
        <div id="module4" class="module-content">
            <h3 class="text-2xl font-bold text-teal-300 mb-4">Problemas de Edades Complejos</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                    <h4 class="text-xl font-semibold text-cyan-200 mb-2">Problemas con Múltiples Personas</h4>
                    <p class="text-gray-200">Para problemas con más de dos personas:</p>
                    <div class="mt-3 bg-slate-600 bg-opacity-30 p-3 rounded-lg">
                        <p class="text-cyan-100">Ejemplo: "La suma de las edades de Ana, Bruno y Carlos es 50 años. Ana tiene el doble de edad que Bruno, y Carlos tiene 5 años más que Ana. ¿Qué edad tiene cada uno?"</p>
                        <p class="text-gray-300 mt-2">Sea x = edad de Bruno</p>
                        <p class="text-gray-300">Entonces 2x = edad de Ana</p>
                        <p class="text-gray-300">Y 2x + 5 = edad de Carlos</p>
                        <p class="text-teal-300 mt-1">x + 2x + (2x + 5) = 50</p>
                        <p class="text-teal-300">5x + 5 = 50</p>
                        <p class="text-teal-300">5x = 45</p>
                        <p class="text-teal-300">x = 9 años (Bruno)</p>
                        <p class="text-teal-300">2x = 18 años (Ana)</p>
                        <p class="text-teal-300">2x + 5 = 23 años (Carlos)</p>
                    </div>
                </div>
                
                <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                    <h4 class="text-xl font-semibold text-cyan-200 mb-2">Proporciones y Razones</h4>
                    <p class="text-gray-200">Cuando las edades se relacionan por proporciones:</p>
                    <div class="mt-3 bg-slate-600 bg-opacity-30 p-3 rounded-lg">
                        <p class="text-cyan-100">Ejemplo: "La edad de Luis es a la edad de María como 2 es a 3. Si la suma de sus edades es 35 años, ¿qué edad tiene cada uno?"</p>
                        <p class="text-gray-300 mt-2">Si x = edad de Luis, entonces:</p>
                        <p class="text-gray-300">x : y = 2 : 3</p>
                        <p class="text-gray-300">y = (3/2)x</p>
                        <p class="text-teal-300 mt-1">x + (3/2)x = 35</p>
                        <p class="text-teal-300">(5/2)x = 35</p>
                        <p class="text-teal-300">x = 14 años (Luis)</p>
                        <p class="text-teal-300">(3/2)x = 21 años (María)</p>
                    </div>
                </div>
                
                <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                    <h4 class="text-xl font-semibold text-cyan-200 mb-2">Casos Especiales</h4>
                    <p class="text-gray-200">Algunos problemas implican duplicar o triplicar edades:</p>
                    <div class="mt-2 bg-slate-600 bg-opacity-30 p-3 rounded-lg">
                        <p class="text-cyan-100">Ejemplo: "Dentro de 8 años, la edad de Roberto será el triple de la que tenía hace 4 años. ¿Cuál es su edad actual?"</p>
                        <p class="text-gray-300 mt-2">Sea x = edad actual de Roberto</p>
                        <p class="text-teal-300 mt-1">(x + 8) = 3(x - 4)</p>
                        <p class="text-teal-300">x + 8 = 3x - 12</p>
                        <p class="text-teal-300">20 = 2x</p>
                        <p class="text-teal-300">x = 10 años</p>
                    </div>
                </div>
                
                <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                    <h4 class="text-xl font-semibold text-cyan-200 mb-2">Sistemas de Ecuaciones</h4>
                    <p class="text-gray-200">Para problemas más complejos, podemos usar sistemas:</p>
                    <div class="mt-2 bg-slate-600 bg-opacity-30 p-3 rounded-lg">
                        <p class="text-cyan-100">Ejemplo: "La suma de las edades de una madre y su hija es 51 años. Dentro de 9 años, la edad de la madre será el doble de la edad de la hija. ¿Qué edad tiene cada una?"</p>
                        <p class="text-gray-300 mt-2">Sea x = edad actual de la madre</p>
                        <p class="text-gray-300">Sea y = edad actual de la hija</p>
                        <p class="text-teal-300 mt-1">x + y = 51</p>
                        <p class="text-teal-300">(x + 9) = 2(y + 9)</p>
                        <p class="text-teal-300">x + 9 = 2y + 18</p>
                        <p class="text-teal-300">x = 2y + 9</p>
                        <p class="text-teal-300">2y + 9 + y = 51</p>
                        <p class="text-teal-300">3y = 42</p>
                        <p class="text-teal-300">y = 14 años (hija)</p>
                        <p class="text-teal-300">x = 37 años (madre)</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Módulo 5 -->
        <div id="module5" class="module-content">
            <h3 class="text-2xl font-bold text-teal-300 mb-4">Estrategias, Verificación y Aplicaciones</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                    <h4 class="text-xl font-semibold text-cyan-200 mb-2">Técnicas de Comprobación</h4>
                    <p class="text-gray-200">Siempre verifica tus soluciones:</p>
                    <ol class="mt-2 space-y-1 list-decimal pl-5 text-gray-300">
                        <li>Sustituye los valores encontrados en la ecuación original</li>
                        <li>Verifica que todas las condiciones del problema se cumplan</li>
                        <li>Comprueba que las edades sean lógicas (positivas, enteras)</li>
                        <li>Asegúrate que las relaciones temporales sean coherentes</li>
                    </ol>
                </div>
                
                <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                    <h4 class="text-xl font-semibold text-cyan-200 mb-2">Errores Comunes</h4>
                    <ul class="mt-2 space-y-2 text-gray-300">
                        <li><span class="text-red-300">✗</span> Confundir "el doble" (2x) con "el doble más" (2x + 2)</li>
                        <li><span class="text-red-300">✗</span> Olvidar que todas las edades deben ser positivas</li>
                        <li><span class="text-red-300">✗</span> No considerar que las edades usualmente son enteras</li>
                        <li><span class="text-red-300">✗</span> Aplicar incorrectamente las condiciones temporales</li>
                        <li><span class="text-red-300">✗</span> No verificar la solución en todas las condiciones</li>
                    </ul>
                </div>
                
                <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                    <h4 class="text-xl font-semibold text-cyan-200 mb-2">Aplicaciones Prácticas</h4>
                    <p class="text-gray-200">Los problemas de edades aparecen en:</p>
                    <ul class="mt-2 space-y-1 text-gray-300">
                        <li>Acertijos y juegos matemáticos</li>
                        <li>Ejercicios de lógica</li>
                        <li>Problemas de herencias y testamentos</li>
                        <li>Cálculos de antigüedad y experiencia</li>
                        <li>Problemas de jubilación y años de servicio</li>
                    </ul>
                </div>
                
                <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                    <h4 class="text-xl font-semibold text-cyan-200 mb-2">Síntesis Final</h4>
                    <p class="text-gray-200">Recuerda estos pasos clave:</p>
                    <ol class="mt-2 space-y-2 list-decimal pl-5 text-gray-300">
                        <li>Identifica claramente cuál es la incógnita principal</li>
                        <li>Asigna variables de forma coherente y simple</li>
                        <li>Traduce todas las condiciones en lenguaje algebraico</li>
                        <li>Resuelve sistemáticamente la ecuación</li>
                        <li>Verifica la coherencia de la solución</li>
                    </ol>
                    <p class="mt-3 text-teal-200 font-medium">La práctica constante es la clave del éxito en estos problemas.</p>
                </div>
            </div>
        </div>
    </div>
</div>
