<?php

require_once('models/typeModel.php'); // Inclure le fichier contenant la définition de la classe TypeModel
class TypeController {

    public function types() {

        // Appel vers typeModel pour récupérer tous les types et pour ainsi les utiliser dans la vue
        $types = TypeModel::getAllType();
        // Vue concernant les types
        require_once 'views/type_view.php';

    }
}