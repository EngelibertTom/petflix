<?php

require_once('models/videoModel.php');
require_once('models/membreModel.php');
class VideoController {


    public function createVideo() {

        $membres = MembreModel::getAllMembres();
        $animaux = VideoModel::getAnimals();

        $view = 'views/createVideo_view.php';
        $pageTitle = "Créer une vidéo - PETFLIX";

        require_once('views/layout.php');

    }

    public function showVideo($videoId) {

        $video = VideoModel::getDetailsVideo($videoId);
        $animals = VideoModel::getAnimalsOfVideo($videoId);
        $member = VideoModel::getMemberOfVideo($videoId);

        $view = 'views/video_view.php';
        $pageTitle = "Vidéo - PETFLIX";

        require_once('views/layout.php');

    }
}