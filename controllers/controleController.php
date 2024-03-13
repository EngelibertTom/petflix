<?php

require_once('models/controleModel.php');
require_once('models/videoModel.php');
class ControleController {

    public function controles() {

        $controles = ControleModel::getAllControls();


        require_once 'views/controles_view.php';

    }
}