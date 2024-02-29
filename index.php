<?php
require('controllers/accueilController.php');
require('controllers/typeController.php');
require('controllers/videoController.php');
require('controllers/controleController.php');


// ----------------ROUTER------------------------------

// Récupérer l'URL demandée
$url = isset($_GET['url']) ? $_GET['url'] : '';

// Analyser l'URL pour déterminer l'action à exécuter
$urlParts = explode('/', $url);
$action = isset($urlParts[0]) ? $urlParts[0] : 'accueil';

// Ajout d'une page ici
switch ($action) {
    case 'type':
        $controller = new TypeController();
        $controller->types();
        break;

    case'accueil':
        $controller = new AccueilController();
        $controller->accueil();
        break;

    case'videos';
    $controller = new VideoController();
    $controller->videos();
     break;

     case 'controles';
     $controller = new ControleController();
     $controller->controles();
     break;

    default:
        require_once 'views/accueil_view.php';
}
