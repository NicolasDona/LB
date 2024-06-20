<?php
session_start();
require_once __DIR__ . '/../../../config/config.php';
require_once __DIR__ . '/../../../models/Appointment.php';
require_once __DIR__ . '/../../../models/AppointmentService.php';
require_once __DIR__ . '/../../../helpers/Database.php';
require_once __DIR__ . '/../../../helpers/dd.php';

try {

    // TRAITEMENT EN GET_ :
    // Récupérer le paramètre id en tant que paramètre d'URL GET_ et sélectionner l'enregistrement en fonction de son id :
    $id_appointment = intval(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT));
    $isDeleted = AppointmentService::delete($id_appointment);

    // Gestion des erreurs ( if else) :
    if ($isDeleted) {
        $msg = 'La donnée a bien été supprimée !';
    } else {
        $msg = 'Erreur, la donnée n\'a pas été supprimée.';
    }
    // Sessions flashs
    $_SESSION['msg'] = $msg;
    header('location: /lb/controllers/dashboard/appointment/appointlist-ctrl.php');
    die;
    
} catch (PDOException $e) {
    echo "Erreur lors de la récupération des données : " . $e->getMessage();

    return false;
}