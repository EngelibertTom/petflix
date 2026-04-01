<div class="container">

  <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:var(--space-md);">
    <h1>Gestion des clients</h1>
    <a href="<?= BASE_URL ?>?url=create-client" class="btn btn--primary">+ Ajouter un client</a>
  </div>

  <?php
  $tableColumns = ['Nom', 'Adresse', 'Actions'];
  $tableEmpty   = 'Aucun client enregistré.';

  ob_start(); foreach ($clients as $client): ?>
  <tr>
    <td><?= htmlspecialchars($client->nom) ?></td>
    <td class="text-muted"><?= htmlspecialchars($client->adresse) ?></td>
    <td>
      <div class="table__actions">
        <a href="<?= BASE_URL ?>?url=client&id=<?= (int)$client->id_client ?>" class="btn btn--ghost btn--sm">Consulter</a>
        <a href="<?= BASE_URL ?>?url=edit-client&id=<?= (int)$client->id_client ?>" class="btn btn--outline btn--sm">Modifier</a>
        <form method="POST" action="<?= BASE_URL ?>?url=delete-client" onsubmit="return confirm('Supprimer <?= htmlspecialchars($client->nom, ENT_QUOTES) ?> ?')">
          <input type="hidden" name="id" value="<?= (int)$client->id_client ?>">
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
