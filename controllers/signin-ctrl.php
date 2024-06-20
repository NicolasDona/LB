<?php
session_start();
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../models/Client.php';
require_once __DIR__ . '/../helpers/dd.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    if (empty($email)) {
        $error["email"] = "L'adresse mail est obligatoire";
    } else {
        $testEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
        if (!$testEmail) {
            $error["email"] = "L'adresse email n'est pas au bon format";
        }
    }
    $password = filter_input(INPUT_POST, 'password');
    if (empty($password)) {
        $error["password"] = "Le mot de passe ne peut pas être vide";
    }
    //================= Vérification des informations de connexion =====================
    $user = Client::getByEmail($email);
    if (!$user) {
        $error["auth"] = "Vous n'avez pas été authentifié.";
    } else {
        $isAuth = password_verify($password, $user['password']);
        if ($isAuth) {
            // Si authentification réussie, stocker les informations nécessaires dans la session
            $_SESSION['id_user'] = $user['id_user'];
            $_SESSION['is_admin'] = $user['is_admin'];
            $_SESSION['firstname'] = $user['firstname'];
            // Rediriger vers le tableau de bord pour les administrateurs
            if ($user['is_admin']) {
                header('Location: /lb/controllers/dashboard/dashboard-ctrl.php');
                exit;
            } else {
                // Redirection vers la page principale pour les utilisateurs non-administrateurs
                header('Location: /lb/controllers/main-ctrl.php');
                exit;
            }
        } else {
            $error["auth"] = "Email ou mot de passe incorrect.";
        }
    }
}

include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/signin.php';
include __DIR__ . '/../views/templates/footer.php';
