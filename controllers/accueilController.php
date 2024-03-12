<?php

require_once('models/accueilModel.php');
require_once('models/videoModel.php');
class AccueilController {

    public function accueil() {

        $videos = VideoModel::getAllVideos();
        $villes = AccueilModel::getAllCities();
        $animaux = VideoModel::getAnimals();

        require_once 'views/accueil_view.php';

    }
}