<div class="container">
  <h2>Créer une vidéo</h2>

  <form class="form-card" method="post" action="../actions/addVideo.php">
    
    <div class="form-group">
      <label class="form-label" for="title">Titre de la vidéo</label>
      <input class="form-input" type="text" name="title" id="title">
    </div>

    <div class="form-group">
      <label class="form-label" for="url">URL de la vidéo</label>
      <input class="form-input" type="text" name="url" id="url">
    </div>

    <div class="form-group">
      <label class="form-label" for="description">Description de la vidéo</label>
      <textarea class="form-textarea" name="description" id="description"></textarea>
    </div>

    <div class="form-group">
      <label class="form-label" for="animaux">Animaux concernés</label>
      <select class="form-select" name="animaux[]" id="animaux" multiple>
        <?php foreach($animaux as $animal): ?>
          <option value="<?= $animal->id_animal ?>"><?= $animal->nom ?></option>
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

    <button type="submit" class="btn btn--primary">Créer la vidéo</button>

  </form>
</div>