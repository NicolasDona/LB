<?php
// constantes
require_once __DIR__ . '/../../../config/config.php';
require_once __DIR__ . '/../../../models/Appointment.php';
require_once __DIR__ . '/../../../models/Client.php';
require_once __DIR__ . '/../../../models/Timeslot.php';
require_once __DIR__ . '/../../../helpers/dd.php';

$appointments = Appointment::getAll();

// dd($appointments);

include __DIR__ . '/../../../views/templates/header.php';
include __DIR__ . '/../../../views/dashboard/appointment/appointment.php';
include __DIR__ . '/../../../views/templates/footer.php';