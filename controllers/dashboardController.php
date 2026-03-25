<?php

require_once('models/dashboardModel.php');
require_once('models/videoModel.php');
class DashboardController {

    public function dashboard() {

        $videos = VideoModel::getAllVideos();
        $villes = DashboardModel::getAllCities();
        $animaux = VideoModel::getAnimals();

        $view = 'views/dashboard_view.php';
        $pageTitle = "Dashboard - PETFLIX";

        require_once('views/layout.php');
    }
}