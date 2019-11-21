# Laravel
https://laravel.com


Kodutöö -  lihtne ülesannete rakendus, kus saab lisada uusi ülesandeid, neid muuta ning kustutada.

Enne käivitamist teha .env.example failist koopia .env muuta vastavalt:

asenda: DB_CONNECTION=mysql
sellega: DB_CONNECTION=sqlite

kustuta alljärgnevad:
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

database kausta luua fail: database.sqlite

tabelite loomiseks: php artisan migrate


