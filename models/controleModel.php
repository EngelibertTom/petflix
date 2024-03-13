<?php
require_once('config/db.php');

class ControleModel {

    public static function getAllControls() {

        global $db;

        $sqlGetControls =
            "SELECT controle.id_controle as id_controle, controle.date AS date_controle, animal.nom AS nom_animal, membre.nom_membre AS nom_membre_responsable, client.nom AS nom_client, client.adresse AS adresse_client
            FROM controle
            JOIN animal_controle ON controle.id_controle = animal_controle.id_controle
            JOIN animal ON animal_controle.id_animal = animal.id_animal
            JOIN membre ON controle.id_membre = membre.id_membre
            JOIN client ON client.id_client = animal.id_client";

        $queryGetControls = $db->prepare($sqlGetControls);
        $queryGetControls->execute();
        $result = $queryGetControls->fetchAll();

        return $result;
    }

}