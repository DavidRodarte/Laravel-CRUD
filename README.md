# Laravel CRUD Básico

Ejemplo básico de CRUD utilizando Laravel (sin Ajax)

## Configuración
1.- Instalar paquetes requeridos por Laravel
```bash
composer install
```
2.- Instalar y compilar paquetes requeridos por JavaScript (Vue)
```bash
npm run dev && npm run watch
```
3.- Crear el archivo .env a partir del .env.example
```bash
cp .env.example.env
```
4.- Crear base de datos para el proyecto
5.- Modificar el archivo .env para que coincida con los datos de conexión de la base de datos.
```bash
vi .env
```
6.- Generar la llave de encriptación
```bash
php artisan key:generate
```
7.- Correr migrations
```bash
php artisan migrate
```