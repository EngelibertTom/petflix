<?php
require_once('config/db.php');

// Récupération des données concernant les controle
class membreModel {

    public static function getAllMembres() {

        global $db;

        $sqlGetMembres = "SELECT * FROM membre";
        $queryGetMembres = $db->prepare($sqlGetMembres);
        $queryGetMembres->execute();
        $result = $queryGetMembres->fetchAll();

        return $result;
    }

}