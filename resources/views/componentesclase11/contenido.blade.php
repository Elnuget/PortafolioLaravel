<div class="content-container">
    <div class="mb-8">
        <h3 class="text-2xl font-bold mb-4 text-blue-700">Conceptos Básicos de Probabilidad</h3>
        
        <div class="concept-card">
            <h4 class="font-bold mb-2">Espacio Muestral</h4>
            <p>El conjunto de todos los posibles resultados de un experimento aleatorio, denotado como Ω (omega).</p>
            <div class="example-box mt-2">
                <p><strong>Ejemplo 1:</strong> Al lanzar un dado, Ω = {1, 2, 3, 4, 5, 6}</p>
                <p><strong>Ejemplo 2:</strong> Al lanzar una moneda dos veces, Ω = {(cara,cara), (cara,cruz), (cruz,cara), (cruz,cruz)}</p>
                <p><strong>Ejemplo 3:</strong> Al extraer una carta de una baraja estándar, Ω contiene 52 elementos (todas las cartas posibles)</p>
            </div>
        </div>
        
        <div class="concept-card">
            <h4 class="font-bold mb-2">Evento</h4>
            <p>Un subconjunto del espacio muestral. Un evento puede contener uno o más resultados posibles.</p>
            <div class="example-box mt-2">
                <p><strong>Ejemplo 1:</strong> Evento "número par al lanzar un dado" = {2, 4, 6}</p>
                <p><strong>Ejemplo 2:</strong> Evento "al menos una cara al lanzar dos monedas" = {(cara,cara), (cara,cruz), (cruz,cara)}</p>
                <p><strong>Ejemplo 3:</strong> Evento "extraer una carta de corazones" = {todos los corazones de la baraja} (13 cartas)</p>
            </div>
        </div>
        
        <div class="concept-card">
            <h4 class="font-bold mb-2">Probabilidad de un Evento</h4>
            <p>Medida de la posibilidad de que ocurra un evento, entre 0 y 1.</p>
            <div class="formula-box math-formula">
                $$P(A) = \frac{\text{Número de resultados favorables}}{\text{Número de resultados posibles}}$$
            </div>
            <div class="example-box mt-2">
                <p><strong>Ejemplo 1:</strong> Probabilidad de obtener un número par al lanzar un dado:</p>
                <p>$$P(\text{número par}) = \frac{|\{2,4,6\}|}{|\{1,2,3,4,5,6\}|} = \frac{3}{6} = \frac{1}{2} = 0.5$$</p>
                <p><strong>Ejemplo 2:</strong> Probabilidad de extraer un as de una baraja estándar:</p>
                <p>$$P(\text{as}) = \frac{4}{52} = \frac{1}{13} \approx 0.077$$</p>
            </div>
        </div>
    </div>
    
    <div class="mb-8">
        <h3 class="text-2xl font-bold mb-4 text-blue-700">Reglas de Probabilidad</h3>
        
        <div class="concept-card">
            <h4 class="font-bold mb-2">Regla de la Suma</h4>
            <p>Para eventos mutuamente excluyentes A y B (no pueden ocurrir simultáneamente):</p>
            <div class="formula-box math-formula">
                $$P(A \cup B) = P(A) + P(B)$$
            </div>
            <p>Para eventos no mutuamente excluyentes (pueden ocurrir simultáneamente):</p>
            <div class="formula-box math-formula">
                $$P(A \cup B) = P(A) + P(B) - P(A \cap B)$$
            </div>
            <div class="example-box mt-2">
                <p><strong>Ejemplo:</strong> Al lanzar un dado, calcular la probabilidad de obtener un número par o mayor que 4.</p>
                <p>Evento A: número par = {2, 4, 6}</p>
                <p>Evento B: número mayor que 4 = {5, 6}</p>
                <p>A ∩ B = {6} (números que son pares Y mayores que 4)</p>
                <p>$$P(A) = \frac{3}{6} = \frac{1}{2}$$</p>
                <p>$$P(B) = \frac{2}{6} = \frac{1}{3}$$</p>
                <p>$$P(A \cap B) = \frac{1}{6}$$</p>
                <p>$$P(A \cup B) = P(A) + P(B) - P(A \cap B) = \frac{1}{2} + \frac{1}{3} - \frac{1}{6} = \frac{3}{6} + \frac{2}{6} - \frac{1}{6} = \frac{4}{6} = \frac{2}{3}$$</p>
            </div>
        </div>
        
        <div class="concept-card">
            <h4 class="font-bold mb-2">Regla de la Multiplicación</h4>
            <p>Para eventos independientes A y B (cuando la ocurrencia de uno no afecta la probabilidad del otro):</p>
            <div class="formula-box math-formula">
                $$P(A \cap B) = P(A) \times P(B)$$
            </div>
            <p>Para eventos dependientes (cuando la ocurrencia de uno afecta la probabilidad del otro):</p>
            <div class="formula-box math-formula">
                $$P(A \cap B) = P(A) \times P(B|A)$$
            </div>
            <p>Donde P(B|A) es la probabilidad condicional de B dado que A ocurrió.</p>
            <div class="example-box mt-2">
                <p><strong>Ejemplo 1 (independientes):</strong> Lanzar dos dados y obtener un 3 en el primero y un 5 en el segundo.</p>
                <p>$$P(\text{3 en primer dado}) = \frac{1}{6}$$</p>
                <p>$$P(\text{5 en segundo dado}) = \frac{1}{6}$$</p>
                <p>$$P(\text{3 en primero y 5 en segundo}) = \frac{1}{6} \times \frac{1}{6} = \frac{1}{36}$$</p>
                
                <p><strong>Ejemplo 2 (dependientes):</strong> Extraer dos cartas de una baraja sin reposición y obtener dos ases.</p>
                <p>$$P(\text{primer as}) = \frac{4}{52}$$</p>
                <p>$$P(\text{segundo as | primer as}) = \frac{3}{51}$$</p>
                <p>$$P(\text{dos ases}) = \frac{4}{52} \times \frac{3}{51} = \frac{12}{2652} = \frac{1}{221}$$</p>
            </div>
        </div>
        
        <div class="concept-card">
            <h4 class="font-bold mb-2">Probabilidad Complementaria</h4>
            <p>La probabilidad de que un evento NO ocurra es igual a 1 menos la probabilidad de que ocurra.</p>
            <div class="formula-box math-formula">
                $$P(A') = 1 - P(A)$$
            </div>
            <div class="example-box mt-2">
                <p><strong>Ejemplo:</strong> Probabilidad de NO obtener un 6 al lanzar un dado.</p>
                <p>$$P(\text{obtener 6}) = \frac{1}{6}$$</p>
                <p>$$P(\text{NO obtener 6}) = 1 - \frac{1}{6} = \frac{5}{6}$$</p>
            </div>
        </div>
    </div>
    
    <div class="mb-8">
        <h3 class="text-2xl font-bold mb-4 text-blue-700">Estadística Descriptiva</h3>
        
        <div class="concept-card">
            <h4 class="font-bold mb-2">Medidas de Tendencia Central</h4>
            <ul class="list-disc list-inside space-y-2 ml-2 mt-2">
                <li><span class="highlight">Media (μ o x̄):</span> Promedio aritmético de todos los valores.</li>
                <div class="formula-box math-formula">
                    $$\mu = \frac{\sum_{i=1}^{n} x_i}{n}$$
                </div>
                <li><span class="highlight">Mediana:</span> Valor central cuando los datos están ordenados.</li>
                <li><span class="highlight">Moda:</span> Valor que aparece con mayor frecuencia.</li>
            </ul>
            <div class="example-box mt-2">
                <p><strong>Ejemplo:</strong> Para el conjunto de datos {4, 8, 6, 3, 7, 4, 2, 9}</p>
                <p><strong>Media:</strong> $\mu = \frac{4+8+6+3+7+4+2+9}{8} = \frac{43}{8} = 5.375$</p>
                <p><strong>Mediana:</strong> Ordenando los datos: {2, 3, 4, 4, 6, 7, 8, 9}</p>
                <p>Como hay un número par de elementos (8), la mediana es el promedio de los dos valores centrales:</p>
                <p>$\text{Mediana} = \frac{4+6}{2} = 5$</p>
                <p><strong>Moda:</strong> El valor 4 aparece dos veces, el resto una vez, por lo que la moda es 4.</p>
            </div>
        </div>
        
        <div class="concept-card">
            <h4 class="font-bold mb-2">Medidas de Dispersión</h4>
            <ul class="list-disc list-inside space-y-2 ml-2 mt-2">
                <li><span class="highlight">Rango:</span> Diferencia entre el valor máximo y mínimo.</li>
                <li><span class="highlight">Varianza (σ²):</span> Promedio de los cuadrados de las diferencias respecto a la media.</li>
                <div class="formula-box math-formula">
                    $$\sigma^2 = \frac{\sum_{i=1}^{n} (x_i - \mu)^2}{n}$$
                </div>
                <li><span class="highlight">Desviación estándar (σ):</span> Raíz cuadrada de la varianza.</li>
                <div class="formula-box math-formula">
                    $$\sigma = \sqrt{\frac{\sum_{i=1}^{n} (x_i - \mu)^2}{n}}$$
                </div>
            </ul>
            <div class="example-box mt-2">
                <p><strong>Ejemplo:</strong> Para el conjunto de datos {4, 8, 6, 3, 7, 4, 2, 9}</p>
                <p>Ya calculamos que μ = 5.375</p>
                <p><strong>Rango:</strong> Máximo - Mínimo = 9 - 2 = 7</p>
                <p><strong>Varianza:</strong></p>
                <p>$\sigma^2 = \frac{(4-5.375)^2 + (8-5.375)^2 + (6-5.375)^2 + (3-5.375)^2 + (7-5.375)^2 + (4-5.375)^2 + (2-5.375)^2 + (9-5.375)^2}{8}$</p>
                <p>$\sigma^2 = \frac{(-1.375)^2 + (2.625)^2 + (0.625)^2 + (-2.375)^2 + (1.625)^2 + (-1.375)^2 + (-3.375)^2 + (3.625)^2}{8}$</p>
                <p>$\sigma^2 = \frac{1.891 + 6.891 + 0.391 + 5.641 + 2.641 + 1.891 + 11.391 + 13.141}{8} = \frac{43.878}{8} = 5.485$</p>
                <p><strong>Desviación estándar:</strong></p>
                <p>$\sigma = \sqrt{5.485} \approx 2.342$</p>
            </div>
        </div>
    </div>
    
    <div class="mb-8">
        <h3 class="text-2xl font-bold mb-4 text-blue-700">Distribuciones de Probabilidad</h3>
        
        <div class="concept-card">
            <h4 class="font-bold mb-2">Distribución Binomial</h4>
            <p>Modela el número de éxitos en n ensayos independientes, cada uno con probabilidad p de éxito.</p>
            <div class="formula-box math-formula">
                $$P(X = k) = \binom{n}{k} p^k (1-p)^{n-k}$$
            </div>
            <p>Donde $\binom{n}{k} = \frac{n!}{k!(n-k)!}$ es el coeficiente binomial.</p>
            <div class="example-box mt-2">
                <p><strong>Ejemplo:</strong> Probabilidad de obtener exactamente 3 caras en 5 lanzamientos de una moneda justa.</p>
                <p>Aquí, n = 5 (número de lanzamientos), k = 3 (número de éxitos deseados), p = 0.5 (probabilidad de cara)</p>
                <p>$$P(X = 3) = \binom{5}{3} (0.5)^3 (0.5)^{5-3}$$</p>
                <p>$$P(X = 3) = \frac{5!}{3!(5-3)!} (0.5)^3 (0.5)^2$$</p>
                <p>$$P(X = 3) = \frac{5 \cdot 4 \cdot 3!}{3! \cdot 2 \cdot 1} (0.5)^3 (0.5)^2$$</p>
                <p>$$P(X = 3) = 10 \cdot (0.5)^3 \cdot (0.5)^2 = 10 \cdot (0.5)^5 = 10 \cdot 0.03125 = 0.3125$$</p>
            </div>
        </div>
        
        <div class="concept-card">
            <h4 class="font-bold mb-2">Distribución Normal</h4>
            <p>Distribución continua con forma de campana, definida por su media (μ) y desviación estándar (σ).</p>
            <div class="formula-box math-formula">
                $$f(x) = \frac{1}{\sigma \sqrt{2\pi}} e^{-\frac{1}{2}\left(\frac{x-\mu}{\sigma}\right)^2}$$
            </div>
            <div class="example-box mt-2">
                <p><strong>Ejemplo 1:</strong> Estaturas de adultos (μ = 170 cm, σ = 10 cm)</p>
                <p><strong>Ejemplo 2:</strong> Puntajes de exámenes estandarizados (μ = 500, σ = 100)</p>
                <p>Para calcular probabilidades con la distribución normal, se utiliza la estandarización:</p>
                <p>$$Z = \frac{X - \mu}{\sigma}$$</p>
                <p>Por ejemplo, la probabilidad de que un adulto mida más de 185 cm:</p>
                <p>$$P(X > 185) = P\left(Z > \frac{185 - 170}{10}\right) = P(Z > 1.5)$$</p>
                <p>Usando tablas de distribución normal o calculadoras, $P(Z > 1.5) \approx 0.0668$</p>
                <p>Por lo tanto, aproximadamente el 6.68% de los adultos miden más de 185 cm.</p>
            </div>
        </div>
    </div>
    
    <!-- Sección de ejercicios -->
    <div class="mb-8">
        <h3 class="text-2xl font-bold mb-4 text-blue-700">Ejercicios Propuestos</h3>
        
        <div class="exercise-grid">
            <div class="exercise-card">
                <h4 class="font-bold mb-2"><span class="exercise-number">1</span> Probabilidad Básica</h4>
                <p>En una caja hay 8 bolas rojas, 5 azules y 7 verdes. Si se extrae una bola al azar, calcula:</p>
                <ul class="list-disc list-inside">
                    <li>La probabilidad de obtener una bola roja</li>
                    <li>La probabilidad de obtener una bola que no sea verde</li>
                    <li>La probabilidad de obtener una bola roja o azul</li>
                </ul>
            </div>
            
            <div class="exercise-card">
                <h4 class="font-bold mb-2"><span class="exercise-number">2</span> Probabilidad Condicional</h4>
                <p>Se lanzan dos dados. Calcula la probabilidad de que la suma sea 8, dado que el primer dado mostró un número par.</p>
            </div>
            
            <div class="exercise-card">
                <h4 class="font-bold mb-2"><span class="exercise-number">3</span> Medidas Estadísticas</h4>
                <p>Para el conjunto de datos {12, 15, 18, 22, 15, 20, 17, 15, 23}, calcula:</p>
                <ul class="list-disc list-inside">
                    <li>La media</li>
                    <li>La mediana</li>
                    <li>La moda</li>
                    <li>La varianza y desviación estándar</li>
                </ul>
            </div>
            
            <div class="exercise-card">
                <h4 class="font-bold mb-2"><span class="exercise-number">4</span> Distribución Binomial</h4>
                <p>Un examen tipo test tiene 10 preguntas con 4 opciones cada una. Si un estudiante responde al azar todas las preguntas, calcula la probabilidad de que acierte:</p>
                <ul class="list-disc list-inside">
                    <li>Exactamente 3 preguntas</li>
                    <li>Al menos 4 preguntas</li>
                </ul>
            </div>
            
            <div class="exercise-card">
                <h4 class="font-bold mb-2"><span class="exercise-number">5</span> Distribución Normal</h4>
                <p>La estatura de los estudiantes de una universidad sigue una distribución normal con media 175 cm y desviación estándar 8 cm. Calcula:</p>
                <ul class="list-disc list-inside">
                    <li>La probabilidad de que un estudiante mida más de 185 cm</li>
                    <li>La probabilidad de que un estudiante mida entre 170 y 180 cm</li>
                    <li>La estatura por debajo de la cual se encuentra el 25% de los estudiantes</li>
                </ul>
            </div>
            
            <div class="exercise-card">
                <h4 class="font-bold mb-2"><span class="exercise-number">6</span> Regla de Bayes</h4>
                <p>Una prueba médica para detectar cierta enfermedad tiene una precisión del 95% (detecta correctamente al 95% de las personas enfermas) y una tasa de falsos positivos del 2% (da positivo en el 2% de las personas sanas). Si la enfermedad afecta al 1% de la población, ¿cuál es la probabilidad de que una persona que dio positivo realmente tenga la enfermedad?</p>
            </div>
        </div>
    </div>
</div>
