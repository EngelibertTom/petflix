<div class="container">

  <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:var(--space-md);">
    <h1>Gestion des contrôles</h1>
  </div>

  <?php
  $today = new DateTime();

  $tableColumns = ['Date', 'Client', 'Membre', 'Animaux', 'Statut', 'Actions'];
  $tableEmpty   = 'Aucun contrôle enregistré.';

  ob_start(); foreach ($controles_groupes as $id_controle => $controle):
    $dateControle = new DateTime($controle['date_controle']);
    $isPast       = $dateControle < $today;
  ?>
  <tr>
    <td><?= htmlspecialchars($controle['date_controle']) ?></td>
    <td>
      <span><?= htmlspecialchars($controle['nom_client']) ?></span><br>
      <span class="text-muted" style="font-size:var(--font-size-xs);"><?= htmlspecialchars($controle['adresse_client']) ?></span>
    </td>
    <td><?= htmlspecialchars($controle['nom_membre_responsable']) ?></td>
    <td class="text-muted" style="font-size:var(--font-size-sm);"><?= implode(', ', array_map('htmlspecialchars', $controle['animaux'])) ?></td>
    <td>
      <?php if ($isPast): ?>
        <span class="badge badge--adopted">Passé</span>
      <?php else: ?>
        <span class="badge badge--pending">À venir</span>
      <?php endif; ?>
    </td>
    <td>
      <div class="table__actions">
        <a href="<?= BASE_URL ?>?url=controle&id=<?= (int)$id_controle ?>" class="btn btn--ghost btn--sm">Consulter</a>
      </div>
    </td>
  </tr>
  <?php endforeach;
  $tableRows = ob_get_clean();

  include('components/table.php');
  ?>

</div>
