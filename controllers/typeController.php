<?php

require_once('models/typeModel.php'); // Inclure le fichier contenant la définition de la classe TypeModel
class TypeController {

    public function types() {


        $types = TypeModel::getAllType();

        $view = 'views/type_view.php';
        $pageTitle = "Types - PETFLIX";

        require_once('views/layout.php');

    }
}