<?php include_once('include/header.php'); ?>
<h2>Adopter un animal</h2>
<form class="adoption" method="post" action="../actions/adoption.php">
    <label for="animaux">Animaux disponibles à l'adoption</label>
    <select name="animaux[]" id="animaux" multiple="multiple">
        <?php
        foreach($animaux as $animal) {
            if(!$animal->adopte) {
                echo '<option value="' . $animal->id_animal . '">' . $animal->nom . '</option>';
            }
        }
        ?>
    </select><br><br>
    <label for="client">Client concerné</label>
    <select name="client" id="client">
        <?php
        foreach($clients as $client) {
                echo '<option value="' . $client->id_client . '">' . $client->nom . "" . $client->prenom . '</option>';
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
    <input type="submit" value="Adopter">
</form>
<?php include_once('include/footer.php'); ?>