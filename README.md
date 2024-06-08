# Casserole en folie

[![forthebadge](http://forthebadge.com/images/badges/built-with-love.svg)](http://forthebadge.com) [![forthebadge](http://forthebadge.com/images/badges/powered-by-electricity.svg)](http://forthebadge.com)

Il s'agit d'un site où le visiteur peur consulter des recettes de cuisine. Il lui est possible de s'inscrire et de se connecter afin de créer et de publier ses propres recettes.

### Pré-requis

Ce qu'il est requis pour commencer :

-   PHP 8.2
-   Composer
-   Laravel
-   Serveur Web XAMPP, WAMPP ou Laragon
-   Mysql

### Clone du projet

Pour commmencer faire :

`git clone` + lien du projet

cd casserole-en-folie

`composer install` pour installer les dépendances

`cp .env.example .env`

Dans le .env modifier sqlite par mysql

Ajouter le nom de la BDD : DB_DATABASE=casserole_en_folie

Se rendre sur phpmyadmin et créer la BDD

`php artisan key:generate`

`php artisan migrate`

`php artisan db:create`

`php artisan serve`

### Démarrage

Pour démarrer le projet faire :

`php artisan serve`


## Auteurs

Projet mené par une équipe de développeurs composé de :

-   **Tania ORMENO GALVEZ BOUVIER**
-   **Hanan REBAIA**
-   **Louis GARAGNON**
-   **Thomas GUILLAIN**
