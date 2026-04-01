<?php
// Variables optionnelles pour la page
$pageTitle = $pageTitle ?? "PETFLIX Dashboard";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>

    <!-- Styles globaux -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/main.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/pages/dashboard.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>public/css/pages/controls.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>public/css/pages/createVideo.css">
    <!-- Composants -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/components/sidebar.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/components/dashboard.css">
</head>
<body>

<div class="layout">

    <!-- SIDEBAR -->
    <?php include_once('include/sidebar.php'); ?>

    <!-- MAIN CONTENT -->
    <main class="main-content">

        <!-- CONTENU DE LA PAGE -->
        <?php
        if(isset($view)) {
            include_once($view);
        }
        ?>

    </main>

</div>

</body>
</html>