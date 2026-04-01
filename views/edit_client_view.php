<div class="container">

  <div style="margin-bottom: var(--space-md);">
    <a href="<?= BASE_URL ?>?url=client&id=<?= (int)$client->id_client ?>" class="btn btn--ghost btn--sm">&larr; Retour</a>
  </div>

  <h1>Modifier <?= htmlspecialchars($client->nom) ?></h1>

  <form class="form-card" method="POST" action="<?= BASE_URL ?>?url=edit-client">

    <input type="hidden" name="id" value="<?= (int)$client->id_client ?>">

    <div class="form-group">
      <label class="form-label" for="nom">Nom</label>
      <input class="form-input" type="text" name="nom" id="nom" value="<?= htmlspecialchars($client->nom) ?>" required>
    </div>

    <div class="form-group">
      <label class="form-label" for="adresse">Adresse</label>
      <input class="form-input" type="text" name="adresse" id="adresse" value="<?= htmlspecialchars($client->adresse) ?>">
    </div>

    <button type="submit" class="btn btn--primary">Enregistrer les modifications</button>

  </form>

</div>
