<!--Filtre-->

<form method="post" action="../actions/filter.php">
    <label for="villes">Villes : </label>
    <select name="villes" id="villes">
        <?php
        foreach($villes as $ville) {
            echo '<option value="' . $ville->ville . '">' . $ville->ville . '</option>';
        }
        ?>
    </select><br>
    <label for="animaux">Animaux : </label>
    <select name="animaux" id="animaux">
        <?php
        foreach($animaux as $animal) {
            echo '<option value="' . $animal->id_animal . '">' . $animal->nom . '</option>';
        }
        ?>
    </select><br>
    <input type="submit" value="Filtrer">
</form>


<!--Liste des vidéos-->
<?php foreach ($videos as $video): ?>
    <div>
        <h2><a href="index.php?url=video&id=<?= $video->id_video ?>"><?= $video->titre ?></a></h2>
        <p><strong>Description:</strong> <?= $video->description ?></p>
        <video width="320" height="240" controls>
            <source src="<?= $video->url ?>" type="video/mp4">
        </video>
    </div>
<?php endforeach; ?>

<p>Je suis la page d'accueil</p>
