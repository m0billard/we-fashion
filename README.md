# Projet 2 : We Fashion

## Installation

> _Décrire ici les étapes d'installation et commandes à lancer (migrations, seeds, vendors laravel et dépendances npm)_
cd we-fashion
npm install
php artisan migrate

**Base de données :**

Les seeders n'étant pas intégrés au projet, il faudra créer manuellement quelques produits via le phpMyAdmin ou plus simplement grâce à la page admin afin de pouvoir tester les fonctionnalités de l'application

## Lancement du projet

Commande "php artisan serve" dans un premier terminal puis "npm run dev" dans un second terminal
Activation d'Apache et MYSQL via XAMPP ou équivalent

## Informations complémentaires

Ajouter "/admin" à l'URL du serveur local pour accéder à la page admin