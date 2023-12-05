<?php
// constantes
require_once __DIR__ . '/../config/config.php';
//  Récupération du Formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //===================== inputname : Nettoyage et validation =======================
    $inputname = filter_input(INPUT_POST, 'inputname', FILTER_SANITIZE_SPECIAL_CHARS);
    // On vérifie que ce n'est pas vide
    if (empty($inputname)) {
        $error["inputname"] = "Vous devez entrer un nom!!";
    } else { // Pour les champs obligatoires, on retourne une erreur
        $isOk = filter_var($inputname, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => '/' . REGEX_NO_NUMBER . '/')));
        // Avec une regex (constante déclarée plus haut), on vérifie si c'est le format attendu 
        if (!$isOk) {
            $error["inputname"] = "Le nom n'est pas au bon format!!";
        } else {
            // Dans ce cas précis, on vérifie aussi la longueur de chaine (on aurait pu le faire aussi direct dans la regex)
            if (strlen($inputname) <= 2 || strlen($inputname) >= 70) {
                $error["inputname"] = "La longueur du nom n'est pas bon";
            }
        }
    }
    //======================== Email : Nettoyage et validation ============================
    $inputemail = filter_input(INPUT_POST, 'inputemail', FILTER_SANITIZE_EMAIL);
    if (empty($inputemail)) {
        $error["inputemail"] = "L'adresse email est obligatoire!!";
    } else {
        $testEmail = filter_var($inputemail, FILTER_VALIDATE_EMAIL);
        if (!$testEmail) {
            $error["inputemail"] = "L'adresse email n'est pas au bon format!!";
        }
    }
    // ===================== vérification du numéro de téléphone =================================
    $inputphonenumber = filter_input(INPUT_POST, 'inputphonenumber', FILTER_SANITIZE_SPECIAL_CHARS);
    // On vérifie que ce n'est pas vide
    if (empty($inputphonenumber)) {
        $error["inputphonenumber"] = "Vous devez entrer un numéro de téléphone";
    } else { // Pour les champs obligatoires, on retourne une erreur
        $isOk = filter_var($inputphonenumber, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => '/' . REGEX_PHONENUMB . '/')));
        // Avec une regex (constante déclarée plus haut), on vérifie si c'est le format attendu 
        if (!$isOk) {
            $error["inputphonenumber"] = "Le numéro de téléphone n'est pas au bon format!!";
        }
    }
    //====================== verification de l'adresse voir la validation =============
    $adress = filter_input(INPUT_POST, 'adress', FILTER_SANITIZE_SPECIAL_CHARS);
    if (empty($message)) {
        $errors['message'] = 'Le message est requis.';
    }
    // verification de la checkbox (ne fonctionne pas)
    if (!isset($_POST['check'])) {
        $error['check'] = "La case doit être validée";
    } else {
        $check = $_POST['check'];
    }
}
include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/contact.php';
include __DIR__ . '/../views/templates/footer.php';
