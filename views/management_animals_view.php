<div class="container">

  <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:var(--space-md);">
    <h1>Gestion des animaux</h1>
    <a href="<?= BASE_URL ?>?url=create-animal" class="btn btn--primary">+ Ajouter un animal</a>
  </div>

  <?php
  $tableColumns = ['Nom', 'Type', 'Âge', 'Statut', 'Actions'];
  $tableEmpty   = 'Aucun animal enregistré.';

  ob_start(); foreach ($animaux as $animal): ?>
  <tr>
    <td><?= htmlspecialchars($animal->nom) ?></td>
    <td><?= htmlspecialchars($animal->nom_type) ?></td>
    <td><?= (int)$animal->age ?> ans</td>
    <td>
      <?php if ($animal->adopte): ?>
        <span class="badge badge--adopted">Adopté</span>
      <?php else: ?>
        <span class="badge badge--available">Disponible</span>
      <?php endif; ?>
    </td>
    <td>
      <div class="table__actions">
        <a href="<?= BASE_URL ?>?url=animal&id=<?= (int)$animal->id_animal ?>" class="btn btn--ghost btn--sm">Consulter</a>
        <a href="<?= BASE_URL ?>?url=edit-animal&id=<?= (int)$animal->id_animal ?>" class="btn btn--outline btn--sm">Modifier</a>
        <form method="POST" action="<?= BASE_URL ?>?url=delete-animal" onsubmit="return confirm('Supprimer <?= htmlspecialchars($animal->nom, ENT_QUOTES) ?> ?')">
          <input type="hidden" name="id" value="<?= (int)$animal->id_animal ?>">
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
