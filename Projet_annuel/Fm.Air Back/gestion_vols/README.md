composer install

Pour demarrer le server : 

php -S 127.0.0.1:8000 -t public

symfony serve
taper cette commande 
si la requete derange 
composer clear-cache

composer install --ignore-platform-req=ext-sodium

creer la bd 
php bin/console doctrine:database:create


pour generer les entity
symfony console make:entity

Url du backend 127.0.0.1:8000

Pour creer la migration
php bin/console make:migration
php bin/console doctrine:migrations:migrate