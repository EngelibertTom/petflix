<?php include_once('include/header.php'); ?>
 <div>
     <h2><a href="index.php?url=video&id=<?= $video->id_video ?>"><?= $video->titre ?></a></h2>
     <p><strong>Description:</strong> <?= $video->description ?></p>
     <iframe width="560" height="315" src="<?= $video->url ?>" frameborder="0" allowfullscreen></iframe>
</div>


    <div style="display:flex; justify-content: center; gap:40px;">
        <div>
            <h3>Animaux présents</h3>
<?php foreach ($animals as $animal) { ?>
<div style="border-bottom: 1px solid lightgrey">
        <p><strong>Nom:</strong>  <?= $animal->nom ?></p>
    <p><strong>Type :</strong> <?= $animal->nom_type ?></p>
    <p><strong>Age :</strong> <?= $animal->age ?> ans</p>
        <?php if($animal->adopte) { ?>
        <p style="color:#3b5b3b"> Adopté</p>
        <?php } ?>
</div>
<?php } ?>
        </div>
<div>
 <h3>Membre responsable</h3>

    <p><strong>Nom :</strong> <?= $member->nom_membre ?></p>
    <p><strong>Ville : </strong><?= $member->ville ?></p>
    <p><strong>Mail :</strong> <?= $member->mail ?></p>
    <p><strong>Téléphone :</strong> <?= $member->tel ?></p>
</div>
    </div>
<?php include_once('include/footer.php'); ?>