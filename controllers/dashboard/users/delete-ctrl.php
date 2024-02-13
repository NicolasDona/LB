<?php
session_start();
require_once __DIR__ . '/../../../config/config.php';
require_once __DIR__ . '/../../../models/Client.php';
require_once __DIR__ . '/../../../helpers/Database.php';
require_once __DIR__ . '/../../../helpers/dd.php';

try {

    // TRAITEMENT EN GET_ :
    // Récupérer le paramètre id en tant que paramètre d'URL GET_ et sélectionner l'enregistrement en fonction de son id :
    $id_user = intval(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT));
    $isDeleted = Client::delete($id_user);

    // Gestion des erreurs ( if else) :
    if ($isDeleted) {
        $msg = 'La donnée a bien été supprimée !';
    } else {
        $msg = 'Erreur, la donnée n\'a pas été supprimée.';
    }
    // Sessions flashs
    $_SESSION['msg'] = $msg;
    header('location: /controllers/dashboard/users/userslist-ctrl.php');
    die;
    
} catch (PDOException $e) {
    echo "Erreur lors de la récupération des données : " . $e->getMessage();

    return false;
}