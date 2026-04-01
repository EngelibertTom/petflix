<div class="container">

  <h1>Dashboard</h1>

  <!-- STATS -->
  <div class="stats">

    <div class="card stat-card">
      <div class="card__body">
        <h3><?= count($animaux) ?></h3>
        <p class="text-muted">Animaux disponibles</p>
      </div>
    </div>

    <div class="card stat-card">
      <div class="card__body">
        <h3><?= count($videos) ?></h3>
        <p class="text-muted">Vidéos</p>
      </div>
    </div>

    <div class="card stat-card">
      <div class="card__body">
        <h3><?= count($controles_groupes) ?></h3>
        <p class="text-muted">Contrôles à venir</p>
      </div>
    </div>

  </div>

  <!-- ACTIONS RAPIDES -->
  <div class="actions">
    <a href="<?= BASE_URL ?>?url=create-video" class="btn btn--primary">+ Ajouter une vidéo</a>
    <a href="<?= BASE_URL ?>?url=adoption" class="btn btn--outline">+ Nouvelle adoption</a>
  </div>

  <!-- CONTROLES -->
  <h2>Prochains contrôles</h2>

  <div class="list">
    <?php foreach($controles_groupes as $controle): ?>
      <div class="card list-item">
        <div class="card__body">

          <div class="list-header">
            <h3><?= $controle['date_controle'] ?></h3>
          </div>

          <p><strong>Client :</strong> <?= $controle['nom_client'] ?></p>
          <p class="text-muted"><?= $controle['adresse_client'] ?></p>

        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <!-- DERNIERES VIDEOS -->
  <h2>Dernières vidéos</h2>

  <div class="grid">
    <?php foreach ($videos as $video): ?>
      <div class="card">

        <div class="video-wrapper">
          <iframe src="<?= $video->url ?>" allowfullscreen></iframe>
        </div>

        <div class="card__body">
          <h4><?= $video->titre ?></h4>
        </div>

      </div>
    <?php endforeach; ?>
  </div>

</div>
