<?php
require_once('config/db.php');

// Récupération des données concernant les types
class AccueilModel {

    public static function getAllCities() {

        global $db;

        $sqlGetCities = "SELECT ville FROM membre";
        $queryGetCities = $db->prepare($sqlGetCities);
        $queryGetCities->execute();
        $result = $queryGetCities->fetchAll();

        return $result;
        
    }

}