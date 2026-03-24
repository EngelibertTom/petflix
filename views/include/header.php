<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petflix</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>public/css/main.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>public/css/components/header.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>public/css/pages/home.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>public/css/pages/controls.css">
        <link rel="stylesheet" href="<?= BASE_URL ?>public/css/pages/createVideo.css">
</head>
<body>
<header class="header">
  <div class="container">
    <nav class="nav">
      
      <p class="logo"><strong>PETFLIX</strong></p>

      <div class="nav__links">
        <a href="<?= BASE_URL ?>">Accueil</a>
        <a href="<?= BASE_URL ?>?url=controles">Contrôles</a>
        <a href="<?= BASE_URL ?>?url=create-video">Créer une vidéo</a>
        <a href="<?= BASE_URL ?>?url=adoption" class="btn btn--primary">Créer une adoption</a>
      </div>

    </nav>
  </div>
</header>

<div class="container">



