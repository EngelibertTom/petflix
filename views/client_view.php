<div class="container container--narrow">

  <div style="margin-bottom: var(--space-md);">
    <a href="<?= BASE_URL ?>?url=management-clients" class="btn btn--ghost btn--sm">&larr; Retour</a>
  </div>

  <h1><?= htmlspecialchars($client->nom) ?></h1>

  <div class="card" style="margin-top: var(--space-md);">
    <div class="card__body">
      <div class="animal-detail__info">

        <div class="animal-detail__row">
          <span class="animal-detail__label">Nom</span>
          <span><?= htmlspecialchars($client->nom) ?></span>
        </div>

        <div class="animal-detail__row">
          <span class="animal-detail__label">Adresse</span>
          <span><?= htmlspecialchars($client->adresse) ?></span>
        </div>

      </div>
    </div>
  </div>

  <div class="animal-detail__actions">
    <a href="<?= BASE_URL ?>?url=edit-client&id=<?= (int)$client->id_client ?>" class="btn btn--primary">Modifier</a>
    <form method="POST" action="<?= BASE_URL ?>?url=delete-client" onsubmit="return confirm('Supprimer <?= htmlspecialchars($client->nom, ENT_QUOTES) ?> ?')">
      <input type="hidden" name="id" value="<?= (int)$client->id_client ?>">
      <button type="submit" class="btn btn--danger">Supprimer</button>
    </form>
  </div>

</div>
