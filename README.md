# Task Manager Backend

Prueba técnica
## How to

1- Ejecutar ```composer install``` para instalar las dependencias.

2- Ejecutar el comando ```php artisan app:create-database``` para crear la base datos. Se creará una base de datos con el nombre y tipo que tenga configurado en su entorno. En caso de no tener ninguna configuración por defecto se creará la base datos task_manager en mysql.

3- Ejecutar el comando ```php artisan migrate``` para crear el esquema de la base datos.

4- Ejecutar el comando ```php artisan db:seed --class=DatabaseSeeder``` para llenar las tablas de categorías y estados.
## Feedback
De presentarse algún problema con la instalación escribir a ernesto.marcelino@outlook.com
