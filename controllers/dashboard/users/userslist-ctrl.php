<?php
require_once __DIR__ . '/../../../config/config.php';
require_once __DIR__ . '/../../../models/Client.php';
require_once __DIR__ . '/../../../helpers/Database.php';
require_once __DIR__ . '/../../../helpers/dd.php';

    // Appel de la méthode statique getAll
    $users = Client::getAll();









include __DIR__ . '/../../../views/templates/header.php';
include __DIR__ . '/../../../views/dashboard/users/userslist.php';
include __DIR__ . '/../../../views/templates/footer.php';