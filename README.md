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

basandote en clase formato has una clase(numero) (tema) recuerda hacerlo lo mas corto posible Divide cada módulo en componentes, manteniendo los estilos. Hazlo tipo presentación, ya que servirá para guiar la clase de mis estudiantes. trata de usar el modo claro por favor para que las letras sean mas visibles