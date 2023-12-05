<?php
// constantes
require_once __DIR__ . '/../config/config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //======================== Email : Nettoyage et validation ==========================
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    if (empty($email)) {
        $error["email"] = "L'adresse mail est obligatoire";
    } else {
        $testEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
        if (!$testEmail) {
            $error["email"] = "L'adresse email n'est pas au bon format";
        }
    }
    //===================== Mot de passe : Nettoyage et haschage =======================
    $password1 = filter_input(INPUT_POST, 'password1');
    if (empty($password1)) {
        $error["password"] = "Le mot de passe ne peut pas être vide";
    }
}

include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/signin.php';
include __DIR__ . '/../views/templates/footer.php';