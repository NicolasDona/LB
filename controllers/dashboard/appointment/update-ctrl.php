<?php
session_start();
require_once __DIR__ . '/../../../config/config.php';
require_once __DIR__ . '/../../../models/Appointment.php';
require_once __DIR__ . '/../../../models/Client.php';
require_once __DIR__ . '/../../../models/Timeslot.php';
require_once __DIR__ . '/../../../models/Service.php';
require_once __DIR__ . '/../../../helpers/dd.php';

$id_appointment = filter_input(INPUT_GET,'id');
$updateApp = new Appointment();
$updateApp->setIdAppointment($id_appointment);
$data = $updateApp->getOneAppointment();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$error =[];
    $appointment_date = filter_input(INPUT_POST, 'appointment_date', FILTER_SANITIZE_SPECIAL_CHARS);
    if (empty($appointment_date)) {
        $error['appointment_date'] = "Vous devez entrer une date!";
    } else { // Pour les champs obligatoires, on retourne une erreur
        $isOk = filter_var($appointment_date, FILTER_VALIDATE_REGEXP, array('options' => array('regexp' => '/' . DATE . '/')));
        // Avec une regex (constante déclarée plus haut), on vérifie si c'est le format attendu 
        if (!$isOk) {
            $error['appointment_date'] = "La date n'est pas au bon format!";
        }
    }
    $service = intval(filter_input(INPUT_POST, 'service', FILTER_SANITIZE_NUMBER_INT));

    if (empty($service)) {
        $error['service'] = "Vous devez choisir un service!";
    } else {
        $isOk = filter_var($service, FILTER_VALIDATE_REGEXP, array('options' => array('regexp' => '/' . STYLE . '/')));
    }
    
    if (!$isOk) {
        $error['service'] = "Le service n'est pas valable!";
    }
    $timeslot = intval(filter_input(INPUT_POST, 'timeslot', FILTER_SANITIZE_NUMBER_INT));
    if (empty($timeslot)) {
        $error['timeslot'] = "Vous devez choisir un horaire!";
    } else {
        $isOk = filter_var($service, FILTER_VALIDATE_REGEXP, array('options' => array('regexp' => '/' . TIME . '/')));
    }
    
                    // Enregistrement en base de données
                    if (empty($error)) {
                        // Création d'un nouvel objet issu de la classe 'Client'
                        $updateApp = new Appointment();
                        // Hydratation de notre objet
                        $updateApp->setAppointmentDate($appointment_date);
                        $updateApp->setIdAppointment($id_appointment);
                        $updateApp->setIdTimeslot($timeslot);
                        // Appel de la méthode insert
                        $updateApp->update($service);
                        
                            // Si la méthode a retourné "true", alors on redirige vers la liste
                        if ($isOk) {
                            header('location: /controllers/dashboard/appointment/appointlist-ctrl.php');
                            die;
                        }
                    }
}


// dd($service);
// $updateAppointment->update($service);


include __DIR__ . '/../../../views/templates/header_dashboard.php';
include __DIR__ . '/../../../views/dashboard/appointment/update.php';
include __DIR__ . '/../../../views/templates/footer_dashboard.php';
