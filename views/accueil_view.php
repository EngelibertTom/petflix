<?php include_once('include/header.php'); ?>

<form method="post" action="../actions/filter.php">

    <div class="filtre">
        <label for="villes">Ville : </label>
        <select name="villes" id="villes">
            <?php
            foreach($villes as $ville) {
                echo '<option value="' . $ville->ville . '">' . $ville->ville . '</option>';
            }
            ?>
        </select><br>
        <label for="animaux">Animal : </label>
        <select name="animaux" id="animaux">
            <?php
            foreach($animaux as $animal) {
                echo '<option value="' . $animal->id_animal . '">' . $animal->nom . '</option>';
            }
            ?>
        </select><br>
        <input class="button" type="submit" value="Filtrer">
    </div>
</form>


<!--Liste des vidéos-->
<?php foreach ($videos as $video): ?>
    <div class="video">
        <h2><a href="index.php?url=video&id=<?= $video->id_video ?>"><?= $video->titre ?></a></h2>
        <p><strong>Description:</strong> <?= $video->description ?></p>
        <iframe width="560" height="315" src="<?= $video->url ?>" frameborder="0" allowfullscreen></iframe>
    </div>
<?php endforeach; ?>

<?php include_once('include/footer.php'); ?>
