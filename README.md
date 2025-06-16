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