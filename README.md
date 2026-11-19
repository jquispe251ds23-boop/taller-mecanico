# Sistema de gestión de reparaciones e inventario para un taller mecánico automotriz

Proyecto integrador de DSI406 Tecnología Backend (Laravel + PostgreSQL).

## Requisitos
- PHP 8.3 o superior con pdo_pgsql
- Composer 2 y PostgreSQL

## Instalación
1. git clone https://github.com/jquispe251ds23-boop/taller-mecanico.git
2. cd taller-mecanico
3. composer install
4. copy .env.example .env   (y completar DB_PASSWORD)
5. php artisan key:generate
6. Crear la base de datos taller_mecanico en PostgreSQL
7. php artisan migrate
8. php artisan serve

Autor: JUAN CARLOS QUISPE CUSIHUAMAN