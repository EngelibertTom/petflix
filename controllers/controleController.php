<?php

require_once('models/controleModel.php');
require_once('models/videoModel.php');
class ControleController {

    public function controles() {

        $controles = ControleModel::getAllControls();

        $view = 'views/controles_view.php';
        $pageTitle = "Contrôles - PETFLIX";

        require_once('views/layout.php');

    }
}