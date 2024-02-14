<?php
// constantes
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../models/Client.php';
require_once __DIR__ . '/../helpers/dd.php';


// requête SQL pour trouver l'admin SELECT * FROM `users` WHERE `is_admin` = 1;


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
    $password = filter_input(INPUT_POST, 'password');
    if (empty($password)) {
        $error["password"] = "Le mot de passe ne peut pas être vide";
    }


    $user = Client::login($email);
    // faire une méthode qui va verifier si le mail est présent dans la base de donnée et et le mot de pass corresponde.
dd($user);
}

include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/signin.php';
include __DIR__ . '/../views/templates/footer.php';