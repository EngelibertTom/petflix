<?php

$db_host = 'localhost';
$db_name = 'petflix';
$db_user = 'root';
$db_pass = '';

try {
   $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass); // connexion à la BDD
   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // affiche les erreur pour débuger
   $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); // permet de récupérer des objets php
   $db->exec("set names utf8");
} catch (PDOException $e) {
   print('Erreur : '.$e->getMessage().'<br/>'); // affiche l’erreur s’il y en a
}

