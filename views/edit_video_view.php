<div class="container">

  <div style="margin-bottom: var(--space-md);">
    <a href="<?= BASE_URL ?>?url=management-videos" class="btn btn--ghost btn--sm">&larr; Retour</a>
  </div>

  <h1>Modifier la vidéo</h1>

  <form class="form-card" method="POST" action="<?= BASE_URL ?>?url=edit-video">

    <input type="hidden" name="id" value="<?= (int)$video->id_video ?>">

    <div class="form-group">
      <label class="form-label" for="titre">Titre</label>
      <input class="form-input" type="text" name="titre" id="titre" value="<?= htmlspecialchars($video->titre) ?>" required>
    </div>

    <div class="form-group">
      <label class="form-label" for="url">URL de la vidéo</label>
      <input class="form-input" type="text" name="url" id="url" value="<?= htmlspecialchars($video->url) ?>" required>
    </div>

    <div class="form-group">
      <label class="form-label" for="description">Description</label>
      <textarea class="form-textarea" name="description" id="description"><?= htmlspecialchars($video->description) ?></textarea>
    </div>

    <button type="submit" class="btn btn--primary">Enregistrer les modifications</button>

  </form>

</div>
