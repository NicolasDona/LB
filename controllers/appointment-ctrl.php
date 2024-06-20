<?php
session_start();
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../helpers/dd.php';
require_once __DIR__ . '/../models/Service.php';
require_once __DIR__ . '/../models/Timeslot.php';
require_once __DIR__ . '/../models/Appointment.php';


$id_user = $_SESSION['id_user'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

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
    $service = filter_input(INPUT_POST, 'service', FILTER_SANITIZE_SPECIAL_CHARS);
    if (empty($service)) {
        $error['service'] = "Vous devez choisir un service!";
    } else {
        $isOk = filter_var($service, FILTER_VALIDATE_REGEXP, array('options' =>array('regexp' => '/' . STYLE . '/')));
    }
    if (!$isOk) {
        $error['service'] = "La date n'est pas au bon format!";
    }
    $timeslot = filter_input(INPUT_POST, 'timeslot', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    if (empty($service)) {
        $error['service'] = "Vous devez choisir un horaire!";
    } else {
        $isOk = filter_var($service, FILTER_VALIDATE_REGEXP, array('options' =>array('regexp' => '/' . TIME . '/')));
    }

                // Enregistrement en base de données
                if (empty($error)) {
                    // Création d'un nouvel objet issu de la classe 'Appointment'
                    $newrdv = new Appointment();
                    // Hydratation de notre objet
                    $newrdv->setAppointmentDate($appointment_date);
                    $newrdv->setIdUser($id_user);
                    $newrdv->setIdTimeslot($timeslot);
                        // Appel de la méthode insert
                    $isOk = $newrdv->insert($service);
                        // Si la méthode a retourné "true", alors on redirige vers la liste
                    if ($isOk) {
                        header('location: /lb/controllers/main-ctrl.php');
                        die;
                    }
                }

}

include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/appointment.php';
include __DIR__ . '/../views/templates/footer.php';
