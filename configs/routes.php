<?php

// Fichier contenant tous les points d'entrées du site (chaque route = une nouvelle page du site)
// Importation et inclusion de la classe "MainController" qui est dans le dossier "src/Controllers"
use Controllers\MainController;
// On instancie le contrôleur général qui contient les contrôleurs de toutes les pages du site
$mainController = new MainController();

// Liste des routes avec leur contrôleur
// Chaque URL correspond à une nouvelle page du site
// "defaut" est la page par défaut si aucune autre page ne correspond à l'URL demandée (page404)
switch (ROUTE){

    // Route de la page d'accueil
    case '/';
        $mainController->home();
    break;

    // Route de la page d'inscription
    case '/creer-un-compte/';
        $mainController->register();
    break;

    // Route de la page de connexion
    case'/connexion/';
        $mainController->login();
    break;

    // Route de la page déconnexion
    case'/deconnexion/';
        $mainController->logout();
    break;


    // Si aucune des URL précédentes ne match, c'est la page qui sera appelée par défaut
    default:
        $mainController->page404();
    break;

}