# Welcome Components

Esta carpeta contiene los componentes modulares del archivo `welcome.blade.php` para hacer el código más manejable y organizado.

## 📁 Estructura de Componentes

### 1. `header.blade.php`
- **Propósito**: Sección principal del header con información personal
- **Contiene**:
  - Avatar profesional
  - Nombre y título (Carlos Angulo Pizarro)
  - Descripción profesional
  - Información de contacto (email, teléfono, ubicación, LinkedIn)

### 2. `experience-skills.blade.php`
- **Propósito**: Sección de experiencia profesional y habilidades técnicas
- **Contiene**:
  - Proyectos actuales (Eteria, FEUE, Escleróptica)
  - Habilidades técnicas categorizadas (Backend, Frontend, Otros)
  - Formación académica (3 títulos académicos)

### 3. `classes-grid.blade.php`
- **Propósito**: Grid de clases de matemáticas y física
- **Contiene**:
  - Clase 1: MCD y MCM
  - Clase 2: Planteo de Ecuaciones
  - Clase 3: Jerarquía de Operaciones
  - Clase 4: Ecuaciones Lineales
  - Clase 5: Física - Cantidades Físicas
  - Clase 6: Razones y Proporciones
  - Formato de Clase (plantilla)

### 4. `stats.blade.php`
- **Propósito**: Sección de estadísticas/métricas profesionales
- **Contiene**:
  - 6+ Proyectos Activos
  - 3 Títulos Académicos
  - 2+ Años de Experiencia
  - AWS Cloud Specialist
  - Laravel PHP Framework

### 5. `call-to-action.blade.php`
- **Propósito**: Sección de llamada a la acción y contacto
- **Contiene**:
  - Botón de contacto por email
  - Botón para comenzar con las clases
  - Información adicional (disponibilidad para viajar, vehículo, idiomas)

### 6. `scripts-styles.blade.php`
- **Propósito**: Scripts de JavaScript y estilos CSS
- **Contiene**:
  - Función `scrollToClasses()`
  - Animaciones CSS (fade-in)
  - Efectos hover

## 🔧 Uso

Para usar estos componentes en el archivo principal `welcome.blade.php`:

```php
{{-- Header Component --}}
@include('welcomecomponentes.header')

{{-- Experience & Skills Component --}}
@include('welcomecomponentes.experience-skills')

{{-- Classes Grid Component --}}
@include('welcomecomponentes.classes-grid')

{{-- Stats Component --}}
@include('welcomecomponentes.stats')

{{-- Call to Action Component --}}
@include('welcomecomponentes.call-to-action')

{{-- Scripts and Styles Component --}}
@include('welcomecomponentes.scripts-styles')
```

## ✅ Beneficios de la Modularización

1. **Mantenibilidad**: Cada componente se puede editar independientemente
2. **Reutilización**: Los componentes pueden reutilizarse en otras vistas
3. **Organización**: Código más limpio y fácil de navegar
4. **Colaboración**: Múltiples desarrolladores pueden trabajar en diferentes componentes
5. **Testing**: Cada componente se puede probar de forma aislada
6. **Performance**: Facilita la carga condicional de componentes

## 🎨 Estilo Visual

Todos los componentes mantienen el tema visual consistente:
- **Colores**: Gradiente rojo-negro con acentos rojos
- **Efectos**: Backdrop blur, hover effects, transiciones suaves
- **Tipografía**: Titles bold, descripciones en red-100
- **Layout**: Grid responsivo, contenedores centrados
- **Iconos**: Emojis descriptivos para mejor UX

## 📝 Notas de Desarrollo

- Los componentes usan Tailwind CSS para el styling
- Compatible con Laravel Blade templating
- Responsive design (mobile-first)
- Animaciones CSS puras (sin dependencias JS externas)
- SEO-friendly con estructura semántica
