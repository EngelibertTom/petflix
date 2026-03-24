<?php include_once('include/header.php'); ?>

<div class="container">

  <h1>Découvrir des vidéos</h1>

  <!-- FILTRES -->
  <div class="filter-card">
    <form method="post" action="../actions/filter.php" class="filter-form">

      <div class="form-group">
        <label class="form-label" for="villes">Ville</label>
        <select class="form-select" name="villes" id="villes">
          <?php foreach($villes as $ville): ?>
            <option value="<?= $ville->ville ?>"><?= $ville->ville ?></option>
          <?php endforeach; ?>
        </select>
      </div>

      <div class="form-group">
        <label class="form-label" for="animaux">Animal</label>
        <select class="form-select" name="animaux" id="animaux">
          <?php foreach($animaux as $animal): ?>
            <option value="<?= $animal->id_animal ?>"><?= $animal->nom ?></option>
          <?php endforeach; ?>
        </select>
      </div>

      <button class="btn btn--primary">Filtrer</button>

    </form>
  </div>

  <!-- VIDEOS -->
  <div class="video-grid">
    <?php foreach ($videos as $video): ?>
      
      <div class="card video-card">

        <div class="video-wrapper">
          <iframe src="<?= $video->url ?>" allowfullscreen></iframe>
        </div>

        <div class="card__body">
          <h3>
            <a href="index.php?url=video&id=<?= $video->id_video ?>">
              <?= $video->titre ?>
            </a>
          </h3>

          <p class="text-muted">
            <?= $video->description ?>
          </p>
        </div>

      </div>

    <?php endforeach; ?>
  </div>

</div>

<?php include_once('include/footer.php'); ?>