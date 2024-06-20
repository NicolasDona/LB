<?php
session_start();
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../models/Client.php';
require_once __DIR__ . '/../helpers/Database.php';
require_once __DIR__ . '/../helpers/dd.php';

// $error = [];
//  Récupération du Formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //===================== Lastname : Nettoyage et validation =======================
    $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_SPECIAL_CHARS);
    // On vérifie que ce n'est pas vide
    if (empty($lastname)) {
        $error["lastname"] = "Vous devez entrer un nom!!";
    } else { // Pour les champs obligatoires, on retourne une erreur
        $isOk = filter_var($lastname, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => '/' . REGEX_NO_NUMBER . '/')));
        // Avec une regex (constante déclarée plus haut), on vérifie si c'est le format attendu 
        if (!$isOk) {
            $error["lastname"] = "Le nom n'est pas au bon format!!";
        } else {
            // Dans ce cas précis, on vérifie aussi la longueur de chaine (on aurait pu le faire aussi direct dans la regex)
            if (strlen($lastname) <= 2 || strlen($lastname) >= 70) {
                $error["lastname"] = "La longueur du nom n'est pas bon";
            }
        }
    }
    //===================== Firstname : Nettoyage et validation =======================
    $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS);
    // On vérifie que ce n'est pas vide
    if (empty($firstname)) {
        $error["firstname"] = "Vous devez entrer un prénom!!";
    } else { // Pour les champs obligatoires, on retourne une erreur
        $isOk = filter_var($firstname, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => '/' . REGEX_NO_NUMBER . '/')));
        // Avec une regex (constante déclarée plus haut), on vérifie si c'est le format attendu 
        if (!$isOk) {
            $error["firstname"] = "Le prénom n'est pas au bon format!!";
        } else {
            // Dans ce cas précis, on vérifie aussi la longueur de chaine (on aurait pu le faire aussi direct dans la regex)
            if (strlen($firstname) <= 2 || strlen($firstname) >= 70) {
                $error["firstname"] = "La longueur du prénom n'est pas bon";
            }
        }
    }
    //===================== Mot de passe : Nettoyage et haschage =======================
    $password = filter_input(INPUT_POST, 'password');
    $password2 = filter_input(INPUT_POST, 'password2');
    // Vérification de la non-vacuité des mots de passe
    if (empty($password) || empty($password2)) {
        $error["password"] = "Les mots de passe ne peuvent pas être vides";
    } elseif ($password != $password2) {
        // Vérification de la correspondance des mots de passe
        $error["password"] = "Les mots de passe ne correspondent pas";
    } else {
        // Hachage du mot de passe
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        // Ici, vous pouvez continuer avec l'enregistrement du mot de passe haché
    }
    //======================== Email : Nettoyage et validation ============================
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    if (empty($email)) {
        $error["email"] = "L'adresse mail est obligatoire!!";
    } else {
        $testEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
        if (!$testEmail) {
            $error["email"] = "L'adresse email n'est pas au bon format!!";
        }
    }
    //====================== verification de l'adresse voir la validation =============
    $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_SPECIAL_CHARS);
    if (empty($address)) {
        $errors['address'] = 'Le champ expérience est requis.';
    } 
    // ===================== vérification du téléphone =================================
    $phonenumber = filter_input(INPUT_POST, 'phonenumber', FILTER_SANITIZE_SPECIAL_CHARS);
    // On vérifie que ce n'est pas vide
    if (empty($phonenumber)) {
        $error["phonenumber"] = "Vous devez entrer un numéro de téléphone";
    } else { // Pour les champs obligatoires, on retourne une erreur
        $isOk = filter_var($phonenumber, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => '/' . REGEX_PHONENUMB . '/')));
        // Avec une regex (constante déclarée plus haut), on vérifie si c'est le format attendu 
        if (!$isOk) {
            $error["phonenumber"] = "Le numéro de téléphone n'est pas au bon format!!";
        }
    }

            // Enregistrement en base de données
            if (empty($error)) {
                // Création d'un nouvel objet issu de la classe 'Client'
                $newclient = new Client();
                // Hydratation de notre objet
                $newclient->setIdUser($id_user);
                $newclient->setLastName($lastname);
                $newclient->setFirstName($firstname);
                $newclient->setPassword($passwordHash);
                $newclient->setEmail($email);
                $newclient->setPhoneNumber($phonenumber);
                $newclient->setAddress($address);
                    // Appel de la méthode insert
                $isOk = $newclient->insert();
                    // Si la méthode a retourné "true", alors on redirige vers la liste
                if ($isOk) {
                    $_SESSION['success_message'] = "Inscription réussie ! Vous pouvez maintenant vous connecter.";
                    header('location: /lb/controllers/signup-ctrl.php');
                    die;
                }
            }
}

include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/signup.php';
include __DIR__ . '/../views/templates/footer_signup.php';