<?php
require_once('config/db.php');

class ManagementModel {

    public static function getAllAnimalsWithDetails() {
        global $db;
        $sql = "SELECT animal.*, types.nom as nom_type
                FROM animal
                JOIN types ON animal.id_type = types.id
                ORDER BY animal.nom";
        $query = $db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public static function deleteAnimal($id) {
        global $db;
        $db->prepare("DELETE FROM animal_controle WHERE id_animal = ?")->execute([$id]);
        $sql = "DELETE FROM animal WHERE id_animal = ?";
        $query = $db->prepare($sql);
        return $query->execute([$id]);
    }

    public static function getAllVideosWithDetails() {
        global $db;
        $sql = "SELECT * FROM video ORDER BY id_video DESC";
        $query = $db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public static function getVideoById($id) {
        global $db;
        $sql = "SELECT * FROM video WHERE id_video = ?";
        $query = $db->prepare($sql);
        $query->execute([$id]);
        return $query->fetch();
    }

    public static function updateVideo($id, $titre, $url, $description) {
        global $db;
        $sql = "UPDATE video SET titre = ?, url = ?, description = ? WHERE id_video = ?";
        $query = $db->prepare($sql);
        return $query->execute([$titre, $url, $description, $id]);
    }

    public static function deleteVideo($id) {
        global $db;
        $db->prepare("DELETE FROM membre_video WHERE id_video = ?")->execute([$id]);
        $db->prepare("UPDATE animal SET id_video = NULL WHERE id_video = ?")->execute([$id]);
        $sql = "DELETE FROM video WHERE id_video = ?";
        $query = $db->prepare($sql);
        return $query->execute([$id]);
    }

    public static function getAllClients() {
        global $db;
        $sql = "SELECT * FROM client ORDER BY nom";
        $query = $db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public static function getClientById($id) {
        global $db;
        $sql = "SELECT * FROM client WHERE id_client = ?";
        $query = $db->prepare($sql);
        $query->execute([$id]);
        return $query->fetch();
    }

    public static function createClient($nom, $adresse) {
        global $db;
        $sql = "INSERT INTO client (nom, adresse) VALUES (?, ?)";
        $query = $db->prepare($sql);
        return $query->execute([$nom, $adresse]);
    }

    public static function updateClient($id, $nom, $adresse) {
        global $db;
        $sql = "UPDATE client SET nom = ?, adresse = ? WHERE id_client = ?";
        $query = $db->prepare($sql);
        return $query->execute([$nom, $adresse, $id]);
    }

    public static function deleteClient($id) {
        global $db;
        $sql = "DELETE FROM client WHERE id_client = ?";
        $query = $db->prepare($sql);
        return $query->execute([$id]);
    }

    public static function getControleById($id) {
        global $db;
        $sql = "SELECT controle.id_controle, controle.date AS date_controle,
                       animal.nom AS nom_animal,
                       membre.nom_membre AS nom_membre_responsable,
                       client.nom AS nom_client, client.adresse AS adresse_client
                FROM controle
                JOIN animal_controle ON controle.id_controle = animal_controle.id_controle
                JOIN animal ON animal_controle.id_animal = animal.id_animal
                JOIN membre ON controle.id_membre = membre.id_membre
                JOIN client ON client.id_client = animal.id_client
                WHERE controle.id_controle = ?";
        $query = $db->prepare($sql);
        $query->execute([$id]);
        return $query->fetchAll();
    }

    public static function getAnimalById($id) {
        global $db;
        $sql = "SELECT animal.*, types.nom as nom_type
                FROM animal
                JOIN types ON animal.id_type = types.id
                WHERE animal.id_animal = ?";
        $query = $db->prepare($sql);
        $query->execute([$id]);
        return $query->fetch();
    }

    public static function createAnimal($nom, $age, $id_type) {
        global $db;
        $sql = "INSERT INTO animal (nom, age, id_type, adopte) VALUES (?, ?, ?, 0)";
        $query = $db->prepare($sql);
        return $query->execute([$nom, $age, $id_type]);
    }

    public static function updateAnimal($id, $nom, $age, $id_type) {
        global $db;
        $sql = "UPDATE animal SET nom = ?, age = ?, id_type = ? WHERE id_animal = ?";
        $query = $db->prepare($sql);
        return $query->execute([$nom, $age, $id_type, $id]);
    }
}
