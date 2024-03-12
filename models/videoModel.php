<?php
require_once('config/db.php');

// Récupération des données concernant les vidéos
class VideoModel {


    public static function getAllVideos() {

        global $db;

        $sqlGetVideos = "SELECT * FROM video";
        $queryGetVideos = $db->prepare($sqlGetVideos);
        $queryGetVideos->execute();
        $result = $queryGetVideos->fetchAll();

        return $result;

    }

    public static function getAnimals() {

        global $db;

        $sqlGetAnimals = "SELECT * FROM animal";
        $queryGetAnimals = $db->prepare($sqlGetAnimals);
        $queryGetAnimals->execute();
        $result = $queryGetAnimals->fetchAll();

        return $result;
    }

    public static function getAnimalsOfVideo($id) {

        global $db;

        $sqlGetAnimals = "SELECT * FROM animal WHERE id_video = ?";
        $queryGetAnimals = $db->prepare($sqlGetAnimals);
        $queryGetAnimals->execute([$id]);
        $result = $queryGetAnimals->fetchAll();

        return $result;

    }

    public static function getDetailsVideo($id) {
        global $db;

        $sqlGetVideos = "SELECT * FROM video WHERE id_video = ?";
        $queryGetVideos = $db->prepare($sqlGetVideos);
        $queryGetVideos->execute([$id]);
        $result = $queryGetVideos->fetch();

        return $result;
    }

    public static function getMemberOfVideo($id) {

        global $db;

        $sqlGetMember = "SELECT membre.* 
                     FROM membre_video 
                     JOIN membre ON membre.id_membre = membre_video.id_membre
                     WHERE membre_video.id_video = ?";
        $queryGetMember = $db->prepare($sqlGetMember);
        $queryGetMember->execute([$id]);
        $membreVideo = $queryGetMember->fetch();

        return $membreVideo;

    }


}