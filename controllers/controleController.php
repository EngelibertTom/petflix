<?php

require_once('models/controleModel.php'); // Inclure le fichier contenant la définition de la classe TypeModel
class ControleController {

    public function controles() {

        // Récupérer les données à partir du modèle ici


        // Vue de la page accueil
        require_once 'views/controles_view.php';

    }
}