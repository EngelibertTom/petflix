<div class="container">

  <div style="margin-bottom: var(--space-md);">
    <a href="<?= BASE_URL ?>?url=management-clients" class="btn btn--ghost btn--sm">&larr; Retour</a>
  </div>

  <h1>Ajouter un client</h1>

  <form class="form-card" method="POST" action="<?= BASE_URL ?>?url=create-client">

    <div class="form-group">
      <label class="form-label" for="nom">Nom</label>
      <input class="form-input" type="text" name="nom" id="nom" required>
    </div>

    <div class="form-group">
      <label class="form-label" for="adresse">Adresse</label>
      <input class="form-input" type="text" name="adresse" id="adresse">
    </div>

    <button type="submit" class="btn btn--primary">Ajouter le client</button>

  </form>

</div>
