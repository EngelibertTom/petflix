<?php

require_once('models/videoModel.php');
require_once('models/membreModel.php');
class VideoController {


    public function createVideo() {

        $membres = MembreModel::getAllMembres();
        $animaux = VideoModel::getAnimals();

        require_once 'views/createVideo_view.php';
    }

    public function showVideo($videoId) {

        $video = VideoModel::getDetailsVideo($videoId);
        $animals = VideoModel::getAnimalsOfVideo($videoId);
        $member = VideoModel::getMemberOfVideo($videoId);

        require_once 'views/video_view.php';
    }
}