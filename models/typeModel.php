<?php
require_once('config/db.php');

// Récupération des données concernant les types
class TypeModel {

    public static function getAllType() {

        global $db;

        $sqlGetTypes = "SELECT * FROM types";
        $queryGetTypes = $db->prepare($sqlGetTypes);
        $queryGetTypes->execute();
        $result = $queryGetTypes->fetchAll();

        return $result;
    }

}










?>