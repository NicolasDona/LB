<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Un salon de coiffure moderne, professionnel et qui répond à toutes vos demandes esthétiques, Jusqu'au moindre petits cheveux ou poils">
    <meta name="author" content="L B Coiffure">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Font Playfair Display class="font-title"  pour les titres -->
    <!-- font Lato class="regular" pour l'écriture régulière -->
    <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- style CSS perso -->
    <link rel="stylesheet" href="/public/assets/css/style.css">
    <title>LB Coiffure</title>
</head>

<body>
    <header>
        <!-- Barre de navigation -->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand regular text-decoration-none hover-underline fw-bold" href="/controllers/main-ctrl.php"><img
                        class="bar-logo" src="/public/assets/img/logo.png" alt="Logo du salon"></a>
                <button class="navbar-toggler mob-menu" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon navbar-dark mob-menu"></span>
                </button>
                <div class="collapse navbar-collapse mob-menu" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle regular text-decoration-none hover-underline fw-bold" href="#"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Présentation du salon
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/controllers/photos-ctrl.php">Photos</a></li>
                                <li><a class="dropdown-item" href="#">Tarifs</a></li>
                                <li><a class="dropdown-item" href="#">Services</a></li>
                                <li><a class="dropdown-item" href="#">A propos</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="regular text-decoration-none hover-underline fw-bold" aria-current="page"
                                href="/controllers/produits-ctrl.php">Produits</a>
                        </li>
                        <li class="nav-item">
                            <a class="regular text-decoration-none hover-underline fw-bold" href="/controllers/rdv-ctrl.php">RDV en ligne</a>
                        </li>
                        <li class="nav-item">
                            <a class="regular text-decoration-none hover-underline fw-bold" href="/controllers/avantages-ctrl.php">Avantages</a>
                        </li>
                        <li class="nav-item">
                            <a class="regular text-decoration-none hover-underline fw-bold" href="/controllers/contact-ctrl.php">Nous
                                contacter</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto"> <!--Ajustement d'Inscription et Connexion-->
                    <?php if (!isset($_SESSION['id_user'])) : ?>
                            <li class="nav-item">
                                <a class="regular text-decoration-none hover-underline fw-bold" href="/controllers/signup-ctrl.php">Inscription</a>
                            </li>
                            <li class="nav-item">
                                <a class="regular text-decoration-none hover-underline fw-bold" href="/controllers/signin-ctrl.php">Connexion</a>
                            </li>
                        <?php else : ?>
                            <!-- Afficher un lien de déconnexion ou d'autres options pour l'utilisateur connecté -->
                            <li class="nav-item">
                                <a class="regular text-decoration-none hover-underline fw-bold" href="/controllers/logout-ctrl.php">Déconnexion</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
    <h1 class="font-title fw-bold text-gold text-center"><a href="/controllers/dashboard/dashboard-ctrl.php" class="text-gold text-decoration-none hover-underline">DASHBOARD</a></h1>
        