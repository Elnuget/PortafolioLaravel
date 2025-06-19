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

dividir cada modulo en componentes, conservar los estilos y hacerlo tipo presentacion peusto que servira para guiar la clase para mis estudiantes.