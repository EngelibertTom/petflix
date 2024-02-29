<?php

require_once('models/videoModel.php'); // Inclure le fichier contenant la définition de la classe TypeModel
class VideoController {

    public function videos() {

        // Récupérer les données à partir du modèle ici


        // Vue de la page vidéo
        require_once 'views/videos_view.php';

    }
}