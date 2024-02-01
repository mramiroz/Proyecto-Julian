# Convenciones de nombrado

1. ### HTML: 
    * Clases e ids en Kebab Case. Ejemplo: class="mi-clase" id="mi-id"

2. ### CSS:
    * Ficheros .css en Camel Case. Ejemplo: miFichero.css

3. ### PHP:
    * Clases en Pascal Case. Ejemplo: MiClase.php
    * Ficheros .blade.php en Camel Case. Ejemplo: miFichero
    * Los controladores deben usar Camel Case y sustantivos en singular, además de terminar en "Controller". Ejemplo: ProductoController.php
    * Los ficheros de migraciones deben de crearse usando el comando "php artisan make:migration", el nombre debe ser descriptivo para indicar el propósito de esa migración. El nombre de la migración ha de estar en snake_case y debe expresarse en presente. Ejemplo: php artisan make:migration create_productos_table.

4. ### MD:
    * Ficheros .md usan Camel Case. Ejemplo: MiMarkdown.md

