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
