<?php
session_start();
// constantes
require_once __DIR__ . '/../../../config/config.php';
require_once __DIR__ . '/../../../models/Appointment.php';
require_once __DIR__ . '/../../../models/Client.php';
require_once __DIR__ . '/../../../models/Timeslot.php';
require_once __DIR__ . '/../../../helpers/dd.php';

$appointments = Appointment::getAllAppointment();




include __DIR__ . '/../../../views/templates/header_dashboard.php';
include __DIR__ . '/../../../views/dashboard/appointment/appointlist.php';
include __DIR__ . '/../../../views/templates/footer_dashboard.php';