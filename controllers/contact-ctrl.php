<?php
//  Récupération du Formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //======================== Email : Nettoyage et hashage ============================
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
    $adress = filter_input(INPUT_POST, 'adress', FILTER_SANITIZE_SPECIAL_CHARS);
    if (empty($adress)) {
        $errors['adress'] = 'Le champ expérience est requis.';
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
    }
    



include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/contact.php';
include __DIR__ . '/../views/templates/footer.php';