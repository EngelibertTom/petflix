<div class="container">
  <h2>Adopter un animal</h2>

  <form class="form-card" method="post" action="../actions/adoption.php">

    <div class="form-group">
      <label class="form-label" for="animaux">Animaux disponibles à l'adoption</label>
      <select class="form-select" name="animaux[]" id="animaux" multiple>
        <?php foreach($animaux as $animal): ?>
          <?php if(!$animal->adopte): ?>
            <option value="<?= $animal->id_animal ?>"><?= $animal->nom ?></option>
          <?php endif; ?>
        <?php endforeach; ?>
      </select>
    </div>

    <div class="form-group">
      <label class="form-label" for="client">Client concerné</label>
      <select class="form-select" name="client" id="client">
        <?php foreach($clients as $client): ?>
          <option value="<?= $client->id_client ?>"><?= $client->nom ?> <?= $client->prenom ?></option>
        <?php endforeach; ?>
      </select>
    </div>

    <div class="form-group">
      <label class="form-label" for="membre">Membre responsable</label>
      <select class="form-select" name="membre" id="membre">
        <?php foreach($membres as $membre): ?>
          <option value="<?= $membre->id_membre ?>"><?= $membre->nom_membre ?></option>
        <?php endforeach; ?>
      </select>
    </div>

    <button type="submit" class="btn btn--primary">Adopter</button>

  </form>

</div>