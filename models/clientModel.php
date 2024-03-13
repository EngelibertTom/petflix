<?php
require_once('config/db.php');

class ClientModel {

   public static function getAllClients() {

       global $db;

       $sqlGetClients = "SELECT * FROM client";
       $queryGetClients = $db->prepare($sqlGetClients);
       $queryGetClients->execute();
       $result = $queryGetClients->fetchAll();

       return $result;
       
   }

}