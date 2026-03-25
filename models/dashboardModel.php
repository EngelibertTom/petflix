<?php
require_once('config/db.php');

// Récupération des données concernant les types
class DashboardModel {

    public static function getAllCities() {

        global $db;

        $sqlGetCities = "SELECT ville FROM membre";
        $queryGetCities = $db->prepare($sqlGetCities);
        $queryGetCities->execute();
        $result = $queryGetCities->fetchAll();

        return $result;
        
    }

}