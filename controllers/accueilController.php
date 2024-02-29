<?php

require_once('models/accueilModel.php'); // Inclure le fichier contenant la définition de la classe TypeModel
class AccueilController {

    public function accueil() {

        // Récupérer les données à partir du modèle ici


        // Vue de la page accueil
        require_once 'views/accueil_view.php';

    }
}