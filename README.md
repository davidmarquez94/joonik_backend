## Instalación del proyecto
<br /><br />
Para comenzar, ejecutar <strong>composer install</strong><br /><br />
Debe hacer la copia del archivo .env.example y configurar la base de datos. Allí mismo, se encuentra seteado el API_KEY generado para la aplicación
<br /><br />
<strong>cp .env.example .env</strong>
<br /><br />
Para la ejecución de las migraciones, correr el comando <strong>php artisan migrate</strong><br /><br />
En este punto, podrá validar el api "/api/locations", con una respuesta de error 404 dado que no existen registros<br /><br />
Para poblar la base de datos, utilice el comando <strong>php artisan db:seed</strong>
<br /><br />

## Ejecución del API
<br /><br />
Desde Postman, puede hacer una petición GET hacia el API <strong>/api/locations</strong>, obteniendo así una respuesta de tipo JSON
<br /><br />

## Ejecución de Test Unitarios
<br /><br />
Para la ejecución de las pruebas unitarias, utilice el comando <strong>php artisan test</strong>
<br /><br />

## Laravel Pint
<br /><br />
Para la ejecución de Pint, utilice el comando <strong>vendor/bin/pint</strong>
<br /><br />
Allí obtendrá la respuesta de dicha integración