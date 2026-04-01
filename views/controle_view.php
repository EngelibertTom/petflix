<div class="container container--narrow">

  <div style="margin-bottom: var(--space-md);">
    <a href="<?= BASE_URL ?>?url=management-controles" class="btn btn--ghost btn--sm">&larr; Retour</a>
  </div>

  <?php
  $today        = new DateTime();
  $dateControle = new DateTime($controle['date_controle']);
  $isPast       = $dateControle < $today;
  ?>

  <div style="display:flex; align-items:center; gap:var(--space-md); margin-bottom:var(--space-md);">
    <h1>Contrôle du <?= htmlspecialchars($controle['date_controle']) ?></h1>
    <?php if ($isPast): ?>
      <span class="badge badge--adopted">Passé</span>
    <?php else: ?>
      <span class="badge badge--pending">À venir</span>
    <?php endif; ?>
  </div>

  <div class="card" style="margin-top: var(--space-md);">
    <div class="card__body">
      <div class="animal-detail__info">

        <div class="animal-detail__row">
          <span class="animal-detail__label">Client</span>
          <span><?= htmlspecialchars($controle['nom_client']) ?></span>
        </div>

        <div class="animal-detail__row">
          <span class="animal-detail__label">Adresse</span>
          <span><?= htmlspecialchars($controle['adresse_client']) ?></span>
        </div>

        <div class="animal-detail__row">
          <span class="animal-detail__label">Membre</span>
          <span><?= htmlspecialchars($controle['nom_membre_responsable']) ?></span>
        </div>

        <div class="animal-detail__row">
          <span class="animal-detail__label">Animaux</span>
          <span><?= implode(', ', array_map('htmlspecialchars', $controle['animaux'])) ?></span>
        </div>

      </div>
    </div>
  </div>

</div>
