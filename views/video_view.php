<div class="container">

  <!-- TITRE + DESCRIPTION -->
  <h1><?= htmlspecialchars($video->titre) ?></h1>
  <p class="text-muted" style="margin: var(--space-sm) 0 var(--space-lg);"><?= htmlspecialchars($video->description) ?></p>

  <!-- PLAYER -->
  <div class="video-wrapper" style="border-radius: var(--radius-lg); overflow:hidden; margin-bottom: var(--space-xl);">
    <iframe src="<?= $video->url ?>" allowfullscreen></iframe>
  </div>

  <!-- INFOS BASSES -->
  <div class="video-page__meta">

    <!-- ANIMAUX -->
    <div class="card">
      <div class="card__body">
        <h3 style="margin-bottom: var(--space-md);">Animaux présents</h3>
        <div class="video-page__animals">
          <?php foreach ($animals as $animal): ?>
          <div class="video-page__animal">
            <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:var(--space-xs);">
              <strong><?= htmlspecialchars($animal->nom) ?></strong>
              <?php if ($animal->adopte): ?>
                <span class="badge badge--adopted">Adopté</span>
              <?php else: ?>
                <span class="badge badge--available">Disponible</span>
              <?php endif; ?>
            </div>
            <p class="text-muted" style="font-size:var(--font-size-sm);"><?= htmlspecialchars($animal->nom_type) ?> · <?= (int)$animal->age ?> ans</p>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

    <!-- MEMBRE -->
    <div class="card">
      <div class="card__body">
        <h3 style="margin-bottom: var(--space-md);">Membre responsable</h3>
        <div class="animal-detail__info">
          <div class="animal-detail__row">
            <span class="animal-detail__label">Nom</span>
            <span><?= htmlspecialchars($member->nom_membre) ?></span>
          </div>
          <div class="animal-detail__row">
            <span class="animal-detail__label">Ville</span>
            <span><?= htmlspecialchars($member->ville) ?></span>
          </div>
          <div class="animal-detail__row">
            <span class="animal-detail__label">Mail</span>
            <a href="mailto:<?= htmlspecialchars($member->mail) ?>"><?= htmlspecialchars($member->mail) ?></a>
          </div>
          <div class="animal-detail__row">
            <span class="animal-detail__label">Téléphone</span>
            <span><?= htmlspecialchars($member->tel) ?></span>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>
