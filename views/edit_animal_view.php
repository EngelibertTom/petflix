<div class="container">

  <div style="margin-bottom: var(--space-md);">
    <a href="<?= BASE_URL ?>?url=animal&id=<?= (int)$animal->id_animal ?>" class="btn btn--ghost btn--sm">&larr; Retour</a>
  </div>

  <h1>Modifier <?= htmlspecialchars($animal->nom) ?></h1>

  <form class="form-card" method="POST" action="<?= BASE_URL ?>?url=edit-animal">

    <input type="hidden" name="id" value="<?= (int)$animal->id_animal ?>">

    <div class="form-group">
      <label class="form-label" for="nom">Nom</label>
      <input class="form-input" type="text" name="nom" id="nom" value="<?= htmlspecialchars($animal->nom) ?>" required>
    </div>

    <div class="form-group">
      <label class="form-label" for="age">Âge (ans)</label>
      <input class="form-input" type="number" name="age" id="age" min="0" value="<?= (int)$animal->age ?>" required>
    </div>

    <div class="form-group">
      <label class="form-label" for="id_type">Type</label>
      <select class="form-select" name="id_type" id="id_type" required>
        <?php foreach ($types as $type): ?>
          <option value="<?= (int)$type->id ?>" <?= $type->id == $animal->id_type ? 'selected' : '' ?>>
            <?= htmlspecialchars($type->nom) ?>
          </option>
        <?php endforeach; ?>
      </select>
    </div>

    <button type="submit" class="btn btn--primary">Enregistrer les modifications</button>

  </form>

</div>
