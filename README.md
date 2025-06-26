composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
EN SHELL COMO ADMINISTRADOR: 
Get-ExecutionPolicy 
Set-ExecutionPolicy -Scope CurrentUser -ExecutionPolicy RemoteSigned
php artisan config:clear
php artisan route:clear 
php artisan view:clear 
php artisan cache:clear

principal a modificar por componentes: Contenido sidebar.
comando unico laravel12: php artisan optimize:clear

Divide cada módulo en componentes, manteniendo los estilos. Hazlo tipo presentación, ya que servirá para guiar la clase de mis estudiantes.

1. basandote en clase formato has una clase(numero) (tema) recuerda hacerlo lo mas corto posible Divide cada módulo en componentes, manteniendo los estilos. Hazlo tipo presentación, ya que servirá para guiar la clase de mis estudiantes. trata de usar el modo claro por favor para que las letras sean mas visibles
2. agrega la ruta a la clase (numero) en #file:web.php ademas en index de clases y en #file:welcome.blade.php
3. Usa librerias para formulas para que las formulas se vean matematicas hablo de los exponentes y signos se vean bien y mejora y aumenta los ejemplos para que sean mas detallado y agrega ejercicios para los estudiantes 
4. finalmente agrega un componente con una miselanea de ejercicios sin resolver sobre el tema.