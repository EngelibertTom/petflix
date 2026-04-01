<div class="container container--narrow">

  <div class="animal-detail__back">
    <a href="<?= BASE_URL ?>?url=management-animals" class="btn btn--ghost btn--sm">&larr; Retour</a>
  </div>

  <h1><?= htmlspecialchars($animal->nom) ?></h1>

  <div class="card" style="margin-top: var(--space-md);">
    <div class="card__body">

      <div class="animal-detail__info">

        <div class="animal-detail__row">
          <span class="animal-detail__label">Type</span>
          <span><?= htmlspecialchars($animal->nom_type) ?></span>
        </div>

        <div class="animal-detail__row">
          <span class="animal-detail__label">Âge</span>
          <span><?= (int)$animal->age ?> ans</span>
        </div>

        <div class="animal-detail__row">
          <span class="animal-detail__label">Statut</span>
          <span>
            <?php if ($animal->adopte): ?>
              <span class="badge badge--adopted">Adopté</span>
            <?php else: ?>
              <span class="badge badge--available">Disponible</span>
            <?php endif; ?>
          </span>
        </div>

        <?php if ($animal->id_video): ?>
        <div class="animal-detail__row">
          <span class="animal-detail__label">Vidéo</span>
          <a href="<?= BASE_URL ?>?url=video&id=<?= (int)$animal->id_video ?>">Voir la vidéo associée</a>
        </div>
        <?php endif; ?>

      </div>

    </div>
  </div>

  <div class="animal-detail__actions">
    <a href="<?= BASE_URL ?>?url=edit-animal&id=<?= (int)$animal->id_animal ?>" class="btn btn--primary">Modifier</a>
    <form method="POST" action="<?= BASE_URL ?>?url=delete-animal" onsubmit="return confirm('Supprimer <?= htmlspecialchars($animal->nom, ENT_QUOTES) ?> ?')">
      <input type="hidden" name="id" value="<?= (int)$animal->id_animal ?>">
      <button type="submit" class="btn btn--danger">Supprimer</button>
    </form>
  </div>

</div>
