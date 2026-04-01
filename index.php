<?php
require('controllers/dashboardController.php');
require('controllers/typeController.php');
require('controllers/videoController.php');
require('controllers/controleController.php');
require('controllers/adoptionController.php');
require('controllers/managementController.php');


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

    case 'management-animals':
        $controller = new ManagementController();
        $controller->animals();
        break;

    case 'animal':
        $controller = new ManagementController();
        $controller->showAnimal($_GET['id'] ?? 0);
        break;

    case 'create-animal':
        $controller = new ManagementController();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->createAnimalSubmit();
        } else {
            $controller->createAnimalForm();
        }
        break;

    case 'edit-animal':
        $controller = new ManagementController();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->editAnimalSubmit();
        } else {
            $controller->editAnimalForm($_GET['id'] ?? 0);
        }
        break;

    case 'management-videos':
        $controller = new ManagementController();
        $controller->videos();
        break;

    case 'edit-video':
        $controller = new ManagementController();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->editVideoSubmit();
        } else {
            $controller->editVideoForm($_GET['id'] ?? 0);
        }
        break;

    case 'delete-animal':
        $controller = new ManagementController();
        $controller->deleteAnimal();
        break;

    case 'delete-video':
        $controller = new ManagementController();
        $controller->deleteVideo();
        break;

    case 'create-client':
        $controller = new ManagementController();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->createClientSubmit();
        } else {
            $controller->createClientForm();
        }
        break;

    case 'management-clients':
        $controller = new ManagementController();
        $controller->clients();
        break;

    case 'client':
        $controller = new ManagementController();
        $controller->showClient($_GET['id'] ?? 0);
        break;

    case 'edit-client':
        $controller = new ManagementController();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->editClientSubmit();
        } else {
            $controller->editClientForm($_GET['id'] ?? 0);
        }
        break;

    case 'delete-client':
        $controller = new ManagementController();
        $controller->deleteClient();
        break;

    case 'management-controles':
        $controller = new ManagementController();
        $controller->controles();
        break;

    case 'controle':
        $controller = new ManagementController();
        $controller->showControle($_GET['id'] ?? 0);
        break;

    default:
        $controller = new DashboardController();
        $controller->dashboard();
}
