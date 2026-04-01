<div class="container">

  <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:var(--space-md);">
    <h1>Gestion des vidéos</h1>
    <a href="<?= BASE_URL ?>?url=create-video" class="btn btn--primary">+ Ajouter une vidéo</a>
  </div>

  <?php
  $tableColumns = ['Titre', 'URL', 'Actions'];
  $tableEmpty   = 'Aucune vidéo enregistrée.';

  ob_start(); foreach ($videos as $video): ?>
  <tr>
    <td><?= htmlspecialchars($video->titre) ?></td>
    <td class="text-muted table__url"><?= htmlspecialchars($video->url) ?></td>
    <td>
      <div class="table__actions">
        <a href="<?= BASE_URL ?>?url=video&id=<?= (int)$video->id_video ?>" class="btn btn--ghost btn--sm">Consulter</a>
        <a href="<?= BASE_URL ?>?url=edit-video&id=<?= (int)$video->id_video ?>" class="btn btn--outline btn--sm">Modifier</a>
        <form method="POST" action="<?= BASE_URL ?>?url=delete-video" onsubmit="return confirm('Supprimer &quot;<?= htmlspecialchars($video->titre, ENT_QUOTES) ?>&quot; ?')">
          <input type="hidden" name="id" value="<?= (int)$video->id_video ?>">
          <button type="submit" class="btn btn--danger btn--sm">Supprimer</button>
        </form>
      </div>
    </td>
  </tr>
  <?php endforeach;
  $tableRows = ob_get_clean();

  include('components/table.php');
  ?>

</div>
