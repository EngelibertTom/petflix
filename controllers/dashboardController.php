<?php

require_once('models/dashboardModel.php');
require_once('models/videoModel.php');
require_once('models/controleModel.php');
require_once('services/controleService.php');
class DashboardController {

    public function dashboard() {

        $videos = VideoModel::getAllVideos();
        $villes = DashboardModel::getAllCities();
        $animaux = VideoModel::getAnimals();
        $controles = ControleModel::getAllControls();

        $controles_groupes = ControleService::refactoGroupControls($controles);

        $view = 'views/dashboard_view.php';
        $pageTitle = "Dashboard - PETFLIX";

        require_once('views/layout.php');
    }
}