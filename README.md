# Laravel CRUD Básico

Ejemplo básico de CRUD utilizando Laravel (sin Ajax)

## Configuración
1.- Instalar paquetes requeridos por Laravel con: composer install
2.- Instalar y compilar paquetes requeridos por JavaScript (Vue) con: npm install && npm run dev
3.- Crear el archivo .env a partir del .env.example: cp .env.example .env
4.- Crear base de datos para el proyecto
5.- Modificar el archivo .env para que coincida con los datos de conexión de la base de datos.
6.- Generar la llave del proyecto con php artisan key:generate
7.- Correr migrations con: php artisan migrate