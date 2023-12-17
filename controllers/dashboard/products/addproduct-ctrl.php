<?php
// constantes
require_once __DIR__ . '/../../../config/config.php';

//  Récupération du Formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // picture : Nettoyage et validation - à travailler
    try {
        if (!isset($_FILES['picture'])) {
            throw new Exception("Le champ picture n'existe pas");
        }
        if ($_FILES['picture']['error'] != 0) {
            throw new Exception("Une erreur est survenue lors du transfert");
        }
        if ($_FILES['picture']['type'] != 'image/png') {
            throw new Exception("Ce fichier n'est pas au bon format");
        }
        if ($_FILES['picture']['size'] > MAX_FILESIZE) {
            throw new Exception("Ce fichier est trop volumineux");
        }
        // Upload de l'image sur le serveur dans le bon dossier
        $from = $_FILES['picture']['tmp_name'];
        $extension = pathinfo($_FILES['picture']['name'], PATHINFO_EXTENSION);
        $filename = uniqid('picture_') . '.' . $extension;
        $to = __DIR__ . '/../../../public/uploads/users/' . $filename;
        var_dump($to);
        move_uploaded_file($from, $to);
    } catch (\Throwable $th) {
        $error = $th->getMessage();
    }
}

include __DIR__ . '/../../../views/templates/header.php';
include __DIR__ . '/../../../views/dashboard/products/addproduct.php';
include __DIR__ . '/../../../views/templates/footer.php';
