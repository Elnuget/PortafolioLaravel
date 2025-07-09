<div class="text-center mb-8">
    <h2 class="text-3xl font-bold text-indigo-700 mb-4">VIRTUALIZACIÓN COMPATIBLE CON PROCTORIZER</h2>
    <p class="text-lg text-gray-600">Entornos aislados y configuraciones avanzadas</p>
    <div class="w-24 h-1 bg-gradient-to-r from-indigo-500 to-purple-600 rounded mx-auto mt-4"></div>
</div>

<!-- Qué es la virtualización -->
<div class="bg-white rounded-xl shadow-lg p-6 mb-8 border border-indigo-100">
    <div class="flex items-center mb-4">
        <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mr-4">
            <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
            </svg>
        </div>
        <h3 class="text-xl font-semibold text-gray-800">¿Qué es la Virtualización?</h3>
    </div>
    <p class="text-gray-700 mb-4">
        La virtualización permite crear computadoras "virtuales" dentro de tu sistema principal. 
        Esto te da un entorno completamente separado e independiente donde puedes instalar 
        un sistema operativo limpio y configurar herramientas específicas sin afectar tu sistema principal.
    </p>
    <div class="bg-indigo-50 p-4 rounded-lg">
        <p class="text-indigo-800 text-sm">
            <strong>Ventaja clave:</strong> Puedes tener un sistema "limpio" dedicado exclusivamente 
            para exámenes, mientras mantienes tu sistema principal con todas tus herramientas habituales.
        </p>
    </div>
</div>

<!-- Opciones de software -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
    <div class="bg-white rounded-xl shadow-lg p-6 border border-blue-200">
        <div class="text-center mb-4">
            <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-3">
                <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                </svg>
            </div>
            <h4 class="font-semibold text-gray-800">VirtualBox (Oracle)</h4>
            <span class="inline-block bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full mt-1">GRATUITO</span>
        </div>
        <ul class="text-sm text-gray-600 space-y-2">
            <li class="flex items-start">
                <span class="text-green-500 mr-2">✓</span>
                <span>Completamente gratuito y open source</span>
            </li>
            <li class="flex items-start">
                <span class="text-green-500 mr-2">✓</span>
                <span>Interfaz amigable para principiantes</span>
            </li>
            <li class="flex items-start">
                <span class="text-green-500 mr-2">✓</span>
                <span>Soporte para múltiples sistemas operativos</span>
            </li>
            <li class="flex items-start">
                <span class="text-green-500 mr-2">✓</span>
                <span>Amplia documentación y comunidad</span>
            </li>
            <li class="flex items-start">
                <span class="text-orange-500 mr-2">⚠</span>
                <span>Rendimiento ligeramente menor que VMware</span>
            </li>
        </ul>
        <div class="mt-4 text-center">
            <span class="text-xs text-gray-500">Recomendado para: Principiantes</span>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-lg p-6 border border-purple-200">
        <div class="text-center mb-4">
            <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-3">
                <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
            </div>
            <h4 class="font-semibold text-gray-800">VMware Workstation</h4>
            <span class="inline-block bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded-full mt-1">DE PAGO</span>
        </div>
        <ul class="text-sm text-gray-600 space-y-2">
            <li class="flex items-start">
                <span class="text-green-500 mr-2">✓</span>
                <span>Rendimiento superior y optimizado</span>
            </li>
            <li class="flex items-start">
                <span class="text-green-500 mr-2">✓</span>
                <span>Mejores gráficos y compatibilidad 3D</span>
            </li>
            <li class="flex items-start">
                <span class="text-green-500 mr-2">✓</span>
                <span>Herramientas profesionales avanzadas</span>
            </li>
            <li class="flex items-start">
                <span class="text-green-500 mr-2">✓</span>
                <span>Snapshots y clones más eficientes</span>
            </li>
            <li class="flex items-start">
                <span class="text-red-500 mr-2">✗</span>
                <span>Licencia de pago (~$250)</span>
            </li>
        </ul>
        <div class="mt-4 text-center">
            <span class="text-xs text-gray-500">Recomendado para: Usuarios avanzados</span>
        </div>
    </div>
</div>

<!-- Guía de configuración paso a paso -->
<div class="bg-white rounded-xl shadow-lg p-6 mb-8 border border-indigo-100">
    <h3 class="text-xl font-semibold text-gray-800 mb-6 flex items-center">
        <svg class="w-6 h-6 text-indigo-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
        </svg>
        Configuración Recomendada
    </h3>
    
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <div>
            <h4 class="font-medium text-gray-800 mb-4">📋 Especificaciones Mínimas:</h4>
            <div class="space-y-3">
                <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                    <span class="font-medium text-gray-700 w-20">RAM:</span>
                    <span class="text-gray-600">4-6GB para la VM (8GB+ en el host)</span>
                </div>
                <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                    <span class="font-medium text-gray-700 w-20">CPU:</span>
                    <span class="text-gray-600">2-4 núcleos virtuales</span>
                </div>
                <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                    <span class="font-medium text-gray-700 w-20">Disco:</span>
                    <span class="text-gray-600">40-60GB de espacio libre</span>
                </div>
                <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                    <span class="font-medium text-gray-700 w-20">SO:</span>
                    <span class="text-gray-600">Windows 10/11 limpio</span>
                </div>
            </div>
        </div>
        
        <div>
            <h4 class="font-medium text-gray-800 mb-4">⚙️ Configuración Recomendada:</h4>
            <div class="space-y-3">
                <div class="p-3 bg-blue-50 rounded-lg">
                    <h5 class="font-medium text-blue-800 mb-1">Red</h5>
                    <p class="text-blue-700 text-sm">NAT (para conexión a internet normal)</p>
                </div>
                <div class="p-3 bg-green-50 rounded-lg">
                    <h5 class="font-medium text-green-800 mb-1">Audio</h5>
                    <p class="text-green-700 text-sm">Habilitado (controlador PulseAudio)</p>
                </div>
                <div class="p-3 bg-purple-50 rounded-lg">
                    <h5 class="font-medium text-purple-800 mb-1">Video</h5>
                    <p class="text-purple-700 text-sm">Memoria 64-128MB, habilitar 3D</p>
                </div>
                <div class="p-3 bg-orange-50 rounded-lg">
                    <h5 class="font-medium text-orange-800 mb-1">USB</h5>
                    <p class="text-orange-700 text-sm">USB 2.0 para webcam y dispositivos</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Proceso de instalación -->
<div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl p-6 mb-8 border border-blue-200">
    <h3 class="text-xl font-semibold text-gray-800 mb-4">🔧 Pasos de Instalación (VirtualBox)</h3>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
            <h4 class="font-medium text-blue-700 mb-3">Preparación:</h4>
            <ol class="space-y-2 text-sm text-gray-700">
                <li><span class="font-medium text-blue-600">1.</span> Descargar VirtualBox desde el sitio oficial</li>
                <li><span class="font-medium text-blue-600">2.</span> Descargar ISO de Windows 10/11</li>
                <li><span class="font-medium text-blue-600">3.</span> Verificar que la virtualización esté habilitada en BIOS</li>
                <li><span class="font-medium text-blue-600">4.</span> Liberar al menos 60GB de espacio en disco</li>
            </ol>
        </div>
        <div>
            <h4 class="font-medium text-blue-700 mb-3">Instalación:</h4>
            <ol class="space-y-2 text-sm text-gray-700">
                <li><span class="font-medium text-blue-600">5.</span> Crear nueva máquina virtual en VirtualBox</li>
                <li><span class="font-medium text-blue-600">6.</span> Asignar memoria RAM y crear disco virtual</li>
                <li><span class="font-medium text-blue-600">7.</span> Montar ISO de Windows e instalar</li>
                <li><span class="font-medium text-blue-600">8.</span> Instalar Guest Additions para mejor rendimiento</li>
            </ol>
        </div>
    </div>
</div>

<!-- Ventajas de la virtualización -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white p-6 rounded-xl shadow-lg border border-green-200">
        <div class="text-center mb-4">
            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mx-auto">
                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <h4 class="font-semibold text-gray-800">Aislamiento</h4>
        </div>
        <p class="text-gray-600 text-sm text-center">
            Sistema completamente separado e independiente de tu instalación principal
        </p>
    </div>

    <div class="bg-white p-6 rounded-xl shadow-lg border border-blue-200">
        <div class="text-center mb-4">
            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mx-auto">
                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                </svg>
            </div>
            <h4 class="font-semibold text-gray-800">Flexibilidad</h4>
        </div>
        <p class="text-gray-600 text-sm text-center">
            Puedes crear snapshots y restaurar el sistema a estados anteriores
        </p>
    </div>

    <div class="bg-white p-6 rounded-xl shadow-lg border border-purple-200">
        <div class="text-center mb-4">
            <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mx-auto">
                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                </svg>
            </div>
            <h4 class="font-semibold text-gray-800">Seguridad</h4>
        </div>
        <p class="text-gray-600 text-sm text-center">
            Sistema limpio sin software adicional que pueda interferir con Proctorizer
        </p>
    </div>
</div>
