<?php

require_once('models/videoModel.php');
require_once('models/clientModel.php');
require_once ('models/membreModel.php');

class AdoptionController {

    public function adoption() {

        $animaux = VideoModel::getAnimals();
        $clients = ClientModel::getAllClients();
        $membres =  membreModel::getAllMembres();

        $view = 'views/adoption_view.php';
        $pageTitle = "Adoptions - PETFLIX";

        require_once('views/layout.php');

    }
}