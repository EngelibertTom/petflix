<?php

require_once('models/videoModel.php');
require_once('models/clientModel.php');
require_once ('models/membreModel.php');

class AdoptionController {

    public function adoption() {

        $animaux = VideoModel::getAnimals();
        $clients = ClientModel::getAllClients();
        $membres =  membreModel::getAllMembres();

        require_once 'views/adoption_view.php';
    }
}