<?php

require_once('../config/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $animalId = isset($_POST['animaux']) ? $_POST['animaux'] : null;
    $clientId = isset($_POST['client']) ? $_POST['client'] : null;
    $membreId = isset($_POST['membre']) ? $_POST['membre'] : null;

    if ($animalId && $clientId && $membreId) {

        $dateControle = date('Y-m-d', strtotime('+6 months'));

        $sqlGetAdresse = "SELECT adresse FROM client WHERE id_client = ?";
        $queryGetAdresse = $db->prepare($sqlGetAdresse);
        $queryGetAdresse->execute([$clientId]);
        $adresseClient = $queryGetAdresse->fetchColumn();

        $sqlInsertControle = "INSERT INTO controle (date, adresse, id_membre) VALUES (?, ?, ?)";
        $queryInsertControle = $db->prepare($sqlInsertControle);
        $queryInsertControle->execute([$dateControle, $adresseClient, $membreId]);

        $sqlUpdateAnimal = "UPDATE animal SET adopte = 1, id_client = ? WHERE id_animal = ?";
        $queryUpdateAnimal = $db->prepare($sqlUpdateAnimal);
        $queryUpdateAnimal->execute([$clientId, $animalId]);


        header("Location: /");


        if ($queryUpdateAnimal->rowCount() > 0) {
            echo "L'animal a été adopté avec succès !";
        } else {
            echo "Échec de l'adoption de l'animal.";
        }
    } else {
        echo "Veuillez fournir l'identifiant de l'animal et l'identifiant du client.";
    }
}
exit();



