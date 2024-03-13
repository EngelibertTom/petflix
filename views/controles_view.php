<?php

include_once('include/header.php');
// Tableau pour stocker les informations de chaque contrôle
$controles_groupes = array();

foreach ($controles as $controle) {
    $id_controle = $controle->id_controle;
    if (!isset($controles_groupes[$id_controle])) {
        $controles_groupes[$id_controle] = array(
            'date_controle' => $controle->date_controle,
            'nom_membre_responsable' => $controle->nom_membre_responsable,
            'nom_client' => $controle->nom_client,
            'adresse_client' => $controle->adresse_client,
            'animaux' => array()
        );
    }

    $controles_groupes[$id_controle]['animaux'][] = $controle->nom_animal;
}
?>
<h2>Liste des contrôles à venir </h2>
<?php foreach($controles_groupes as $id_controle => $controle): ?>
    <div class="controle">
        <h3>Date de contrôle : <?php echo $controle['date_controle']; ?></h3>
        <p>Nom du membre responsable : <?php echo $controle['nom_membre_responsable']; ?></p>
        <p>Nom du client : <?php echo $controle['nom_client']; ?></p>
        <p>Adresse du client : <?php echo $controle['adresse_client']; ?></p>
        <h4>Animaux concernés :</h4>
        <?php foreach($controle['animaux'] as $nom_animal): ?>
            <p>Nom de l'animal : <?php echo $nom_animal; ?></p>
        <?php endforeach; ?>
    </div>
<?php endforeach; ?>

<?php include_once('include/footer.php'); ?>