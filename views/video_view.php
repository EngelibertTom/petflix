
 <div>
     <h2><a href="index.php?url=video&id=<?= $video->id_video ?>"><?= $video->titre ?></a></h2>
     <p><strong>Description:</strong> <?= $video->description ?></p>
     <video width="320" height="240" controls>
         <source src="<?= $video->url ?>" type="video/mp4">
     </video>
</div>


<h1>Détail animaux</h1>
<?php foreach ($animals as $animal) { ?>

    <div>
        <p><?= $animal->nom ?></p>
        <?php if($animal->adopte) { ?>
        <p> Adopté</p>
        <?php } ?>
    </div>
<?php } ?>

 <h1>Détail membre</h1>

<?= $member->nom_membre ?>
