<?php
require_once('models/managementModel.php');
require_once('models/typeModel.php');
require_once('models/controleModel.php');
require_once('services/controleService.php');

class ManagementController {

    public function createClientForm() {
        $pageTitle = "Ajouter un client - PETFLIX";
        $view = 'views/create_client_view.php';
        require_once('views/layout.php');
    }

    public function createClientSubmit() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom     = trim($_POST['nom'] ?? '');
            $adresse = trim($_POST['adresse'] ?? '');
            if ($nom) {
                ManagementModel::createClient($nom, $adresse);
            }
        }
        header('Location: ' . BASE_URL . '?url=management-clients');
        exit;
    }

    public function clients() {
        $clients = ManagementModel::getAllClients();
        $pageTitle = "Gestion des clients - PETFLIX";
        $view = 'views/management_clients_view.php';
        require_once('views/layout.php');
    }

    public function showClient($id) {
        $client = ManagementModel::getClientById((int)$id);
        if (!$client) {
            header('Location: ' . BASE_URL . '?url=management-clients');
            exit;
        }
        $pageTitle = htmlspecialchars($client->nom) . " - PETFLIX";
        $view = 'views/client_view.php';
        require_once('views/layout.php');
    }

    public function editClientForm($id) {
        $client = ManagementModel::getClientById((int)$id);
        if (!$client) {
            header('Location: ' . BASE_URL . '?url=management-clients');
            exit;
        }
        $pageTitle = "Modifier " . htmlspecialchars($client->nom) . " - PETFLIX";
        $view = 'views/edit_client_view.php';

        require_once('views/layout.php');
    }

    public function editClientSubmit() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id      = (int)($_POST['id'] ?? 0);
            $nom     = trim($_POST['nom'] ?? '');
            $adresse = trim($_POST['adresse'] ?? '');
            if ($id && $nom) {
                ManagementModel::updateClient($id, $nom, $adresse);
            }
        }
        header('Location: ' . BASE_URL . '?url=management-clients');
        exit;
    }

    public function deleteClient() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
            ManagementModel::deleteClient((int)$_POST['id']);
        }
        header('Location: ' . BASE_URL . '?url=management-clients');
        exit;
    }

    public function controles() {
        $controles_raw    = ControleModel::getAllControls();
        $controles_groupes = ControleService::refactoGroupControls($controles_raw);
        $pageTitle = "Gestion des contrôles - PETFLIX";
        $view = 'views/management_controles_view.php';
        require_once('views/layout.php');
    }

    public function showControle($id) {
        $rows = ManagementModel::getControleById((int)$id);
        if (!$rows) {
            header('Location: ' . BASE_URL . '?url=management-controles');
            exit;
        }
        $controle = [
            'id_controle'            => $rows[0]->id_controle,
            'date_controle'          => $rows[0]->date_controle,
            'nom_membre_responsable' => $rows[0]->nom_membre_responsable,
            'nom_client'             => $rows[0]->nom_client,
            'adresse_client'         => $rows[0]->adresse_client,
            'animaux'                => array_map(fn($r) => $r->nom_animal, $rows),
        ];
        $pageTitle = "Contrôle du " . $controle['date_controle'] . " - PETFLIX";
        $view = 'views/controle_view.php';
        require_once('views/layout.php');
    }

    public function animals() {
        $animaux = ManagementModel::getAllAnimalsWithDetails();
        $pageTitle = "Gestion des animaux - PETFLIX";
        $view = 'views/management_animals_view.php';
        require_once('views/layout.php');
    }

    public function videos() {
        $videos = ManagementModel::getAllVideosWithDetails();
        $pageTitle = "Gestion des vidéos - PETFLIX";
        $view = 'views/management_videos_view.php';
        require_once('views/layout.php');
    }

    public function deleteAnimal() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
            $id = (int)$_POST['id'];
            ManagementModel::deleteAnimal($id);
        }
        header('Location: ' . BASE_URL . '?url=management-animals');
        exit;
    }

    public function editVideoForm($id) {
        $video = ManagementModel::getVideoById((int)$id);
        if (!$video) {
            header('Location: ' . BASE_URL . '?url=management-videos');
            exit;
        }
        $pageTitle = "Modifier " . htmlspecialchars($video->titre) . " - PETFLIX";
        $view = 'views/edit_video_view.php';
        require_once('views/layout.php');
    }

    public function editVideoSubmit() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id          = (int)($_POST['id'] ?? 0);
            $titre       = trim($_POST['titre'] ?? '');
            $url         = trim($_POST['url'] ?? '');
            $description = trim($_POST['description'] ?? '');
            if ($id && $titre && $url) {
                ManagementModel::updateVideo($id, $titre, $url, $description);
            }
        }
        header('Location: ' . BASE_URL . '?url=management-videos');
        exit;
    }

    public function deleteVideo() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
            $id = (int)$_POST['id'];
            ManagementModel::deleteVideo($id);
        }
        header('Location: ' . BASE_URL . '?url=management-videos');
        exit;
    }

    public function showAnimal($id) {
        $animal = ManagementModel::getAnimalById((int)$id);
        if (!$animal) {
            header('Location: ' . BASE_URL . '?url=management-animals');
            exit;
        }
        $pageTitle = htmlspecialchars($animal->nom) . " - PETFLIX";
        $view = 'views/animal_view.php';
        require_once('views/layout.php');
    }

    public function createAnimalForm() {
        $types = TypeModel::getAllType();
        $pageTitle = "Ajouter un animal - PETFLIX";
        $view = 'views/create_animal_view.php';
        require_once('views/layout.php');
    }

    public function createAnimalSubmit() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom    = trim($_POST['nom'] ?? '');
            $age    = (int)($_POST['age'] ?? 0);
            $id_type = (int)($_POST['id_type'] ?? 0);
            if ($nom && $age > 0 && $id_type > 0) {
                ManagementModel::createAnimal($nom, $age, $id_type);
            }
        }
        header('Location: ' . BASE_URL . '?url=management-animals');
        exit;
    }

    public function editAnimalForm($id) {
        $animal = ManagementModel::getAnimalById((int)$id);
        if (!$animal) {
            header('Location: ' . BASE_URL . '?url=management-animals');
            exit;
        }
        $types = TypeModel::getAllType();
        $pageTitle = "Modifier " . htmlspecialchars($animal->nom) . " - PETFLIX";
        $view = 'views/edit_animal_view.php';
        require_once('views/layout.php');
    }

    public function editAnimalSubmit() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id      = (int)($_POST['id'] ?? 0);
            $nom     = trim($_POST['nom'] ?? '');
            $age     = (int)($_POST['age'] ?? 0);
            $id_type = (int)($_POST['id_type'] ?? 0);
            if ($id && $nom && $age > 0 && $id_type > 0) {
                ManagementModel::updateAnimal($id, $nom, $age, $id_type);
            }
        }
        header('Location: ' . BASE_URL . '?url=management-animals');
        exit;
    }
}
