<?php

require_once('../config/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $url = isset($_POST['url']) ? $_POST['url'] : null;
    $title = isset($_POST['title']) ? $_POST['title'] : null;
    $description = isset($_POST['description']) ? $_POST['description'] : null;
    $animaux = isset($_POST['animaux']) ? $_POST['animaux'] : array();
    $membre = isset($_POST['membre']) ? $_POST['membre'] : null;


    $sqlInsertVideo = "INSERT INTO video (url, titre, description) VALUES (?, ?, ?)";
    $queryInsertVideo = $db->prepare($sqlInsertVideo);
    $queryInsertVideo->execute([$url, $title, $description]);


    $videoId = $db->lastInsertId();

    $sqlInsertMembreVideo = "INSERT INTO membre_video (id_membre, id_video) VALUES (?, ?)";
    $queryInsertMembreVideo = $db->prepare($sqlInsertMembreVideo);
    $queryInsertMembreVideo->execute([$membre, $videoId]);

    foreach ($animaux as $animalId) {
        $sqlUpdateAnimal = "UPDATE animal SET id_video = ? WHERE id_animal = ?";
        $queryUpdateAnimal = $db->prepare($sqlUpdateAnimal);
        $queryUpdateAnimal->execute([$videoId, $animalId]);
    }

}

header("Location: /");
exit();
?>
