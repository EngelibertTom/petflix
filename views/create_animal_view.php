<div class="container">

  <div style="margin-bottom: var(--space-md);">
    <a href="<?= BASE_URL ?>?url=management-animals" class="btn btn--ghost btn--sm">&larr; Retour</a>
  </div>

  <h1>Ajouter un animal</h1>

  <form class="form-card" method="POST" action="<?= BASE_URL ?>?url=create-animal">

    <div class="form-group">
      <label class="form-label" for="nom">Nom</label>
      <input class="form-input" type="text" name="nom" id="nom" required>
    </div>

    <div class="form-group">
      <label class="form-label" for="age">Âge (ans)</label>
      <input class="form-input" type="number" name="age" id="age" min="0" required>
    </div>

    <div class="form-group">
      <label class="form-label" for="id_type">Type</label>
      <select class="form-select" name="id_type" id="id_type" required>
        <option value="">-- Choisir un type --</option>
        <?php foreach ($types as $type): ?>
          <option value="<?= (int)$type->id ?>"><?= htmlspecialchars($type->nom) ?></option>
        <?php endforeach; ?>
      </select>
    </div>

    <button type="submit" class="btn btn--primary">Ajouter l'animal</button>

  </form>

</div>
