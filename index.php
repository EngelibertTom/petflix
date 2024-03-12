<?php
require('controllers/accueilController.php');
require('controllers/typeController.php');
require('controllers/videoController.php');
require('controllers/controleController.php');
require('controllers/adoptionController.php');


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

    case 'video':
        $controller = new VideoController();
        $controller->showVideo($_GET['id']);
        break;

     case'create-video';
     $controller = new VideoController();
     $controller->createVideo();
     break;

     case 'controles';
     $controller = new ControleController();
     $controller->controles();
     break;

    case 'adoption';
    $controller = new AdoptionController();
    $controller->adoption();
    break;

    default:
        $controller = new AccueilController();
        $controller->accueil();
}
