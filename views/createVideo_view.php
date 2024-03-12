<form method="post" action="../actions/addVideo.php">
    <label for="title">Titre de la vidéo</label>
    <input type="text" name="title"> <br>
    <label for="url">URL de la vidéo</label>
    <input type="text" name="url"><br>
    <label for="description">Description de la vidéo</label>
    <textarea name="description"></textarea><br>
    <label for="animaux">Animaux concernés : </label>
    <select name="animaux[]" id="animaux" multiple="multiple">
        <?php
        foreach($animaux as $animal) {
            echo '<option value="' . $animal->id_animal . '">' . $animal->nom . '</option>';
        }
        ?>
    </select><br>
    <label for="membre">Membre responsable :</label>
    <select name="membre" id="membre">
        <?php
        foreach($membres as $membre) {
            echo '<option value="' . $membre->id_membre . '">' . $membre->nom_membre . '</option>';
        }
        ?>
    </select>
    <br>
    <input type="submit" value="Créer la vidéo">
</form>
