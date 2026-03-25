<?php

require_once('models/controleModel.php');
require_once('models/videoModel.php');
require_once('services/controleService.php');

class ControleController {

    public function controles() {

        $controles = ControleModel::getAllControls();
        
        $controles_groupes = ControleService::refactoGroupControls($controles);

        $view = 'views/controles_view.php';
        $pageTitle = "Contrôles - PETFLIX";

        require_once('views/layout.php');

    }
}