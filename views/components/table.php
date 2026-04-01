<?php
/**
 * Composant table réutilisable
 *
 * Variables attendues :
 *   $tableColumns  array   En-têtes des colonnes
 *   $tableRows     string  HTML des <tr> (via ob_start / ob_get_clean)
 *   $tableEmpty    string  (optionnel) Message si aucun élément
 */
$tableEmpty = $tableEmpty ?? 'Aucun élément.';
?>
<div class="card management-card">
  <div class="card__body">
    <?php if (!$tableRows): ?>
      <p class="text-muted"><?= $tableEmpty ?></p>
    <?php else: ?>
      <table class="table">
        <thead>
          <tr>
            <?php foreach ($tableColumns as $col): ?>
              <th><?= $col ?></th>
            <?php endforeach; ?>
          </tr>
        </thead>
        <tbody>
          <?= $tableRows ?>
        </tbody>
      </table>
    <?php endif; ?>
  </div>
</div>
