<?php
require_once('../config/db.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $animal = isset($_POST['animaux']) ? $_POST['animaux'] : null;
    $ville = isset($_POST['villes']) ? $_POST['villes'] : null;

    $sqlGetVideos = "SELECT DISTINCT video.*
                 FROM video
                 JOIN membre_video ON video.id_video = membre_video.id_video
                 JOIN animal ON video.id_video = animal.id_video
                 JOIN membre ON membre_video.id_membre = membre.id_membre";

    $params = array();

    if (!empty($animal)) {
        $sqlGetVideos .= " WHERE animal.id_animal = ?";
        $params[] = $animal;
    }

    if (!empty($ville)) {
        $sqlGetVideos .= (!empty($animal)) ? " AND membre.ville = ?" : " WHERE membre.ville = ?";
        $params[] = $ville;
    }

    $queryGetVideos = $db->prepare($sqlGetVideos);
    $queryGetVideos->execute($params);
    $videos = $queryGetVideos->fetchAll();


    if(!empty($videos)) {
    foreach ($videos as $video) { ?>
    <div>
        <h2><a href="index.php?url=video&id=<?= $video->id_video ?>"><?= $video->titre ?></a></h2>
        <p><strong>Description:</strong> <?= $video->description ?></p>
        <video width="320" height="240" controls>
            <source src="<?= $video->url ?>" type="video/mp4">
        </video>
    </div>
<?php }
    } else {
        echo 'Pas de résultat pour cette recherche.';
    }
}