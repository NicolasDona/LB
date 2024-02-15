<?php
session_start();
var_dump($_SESSION);
include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/main.php';
include __DIR__ . '/../views/templates/footer.php';