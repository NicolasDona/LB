<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Un salon de coiffure moderne, professionnel et qui répond à toutes vos demandes esthétiques, Jusqu'au moindre petits cheveux ou poils">
    <meta name="keywords"
        content="coiffure, coiffeur, coiffeur Oise, coiffeur à proximité, rapide, moderne, homme, femme, enfant, épilation, esthétique, salon, barbier, barber shop, coloration, lissage, RDV, rendez-vous">
    <meta name="author" content="L B Coiffure">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Font Playfair Display class="font-title"  pour les titres -->
    <!-- font Lato class="regular" pour l'écriture réguilère -->
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- style CSS perso -->
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <title>LB Coiffure</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
                <a class="navbar-brand regular text-decoration-none hover-underline fw-bold" href="index.html"><img
                        class="bar-logo" src="./public/assets/img/logo.png" alt="Logo du salon"></a>
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
                                <li><a class="dropdown-item" href="blog.html">Blog</a></li>
                                <li><a class="dropdown-item" href="#">Photos</a></li>
                                <li><a class="dropdown-item" href="#">Tarifs</a></li>
                                <li><a class="dropdown-item" href="#">Services</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="regular text-decoration-none hover-underline fw-bold" aria-current="page"
                                href="produits.html">Produits</a>
                        </li>
                        <li class="nav-item">
                            <a class="regular text-decoration-none hover-underline fw-bold" href="rdv.html">RDV en ligne</a>
                        </li>
                        <li class="nav-item">
                            <a class="regular text-decoration-none hover-underline fw-bold" href="avantages.html">Avantages</a>
                        </li>
                        <li class="nav-item">
                            <a class="regular text-decoration-none hover-underline fw-bold" href="contact.html">Nous
                                contacter</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto"> <!--Ajustement d'Inscription et Connexion-->
                        <li class="nav-item">
                            <a class="regular text-decoration-none hover-underline fw-bold" href="inscription.html">Inscription</a>
                        </li>
                        <li class="nav-item">
                            <a class="regular text-decoration-none hover-underline fw-bold"
                                href="dashboard.html">Connexion</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>

    </main>
    <footer>
        <!-- Block Gauche -->
        <div class="container p-4">
            <div class="row letter-sp">
                <div class="col-lg-6 col-md-12 mb-4">
                    <h5 class="mb-3 letter-sp font-title fw-bold">LB Coiffure</h5>
                    <p class="regular">
                        Votre salon de proximité qui répond à toutes vos attentes.
                        Je suis disponible pour répondre à toutes vos demandes personnalisées.
                        Contactez-moi.
                    </p>
                    <a href="https://www.facebook.com/profile.php?id=100063458413249" target="_blank"><i
                            class="fa-brands fa-facebook footer-icons" title="Facebook"></i></a>
                    <a href="https://www.instagram.com/lbcoiffure60/" target="_blank"><i
                            class="fa-brands fa-instagram footer-icons" title="Instagram"></i></a>
                </div>
                <!-- Partie centrale -->
                <div class="col-lg-3 col-md-6 letter-sp">
                    <h5 class="mb-3 letter-sp font-title fw-bold">Venir au salon</h5>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-1 regular">
                            <p>265 Rue Albert Martin,<br>60250 Bury</p>
                        </li>
                        <li class="mb-1">
                            <a href="https://maps.app.goo.gl/Cm3oM6qB7F58ya2E9" target="_blank"
                                title="lien vers le plan de Google maps"
                                class="regular text-decoration-none hover-underline fw-bold">Plans</a>
                        </li>
                        <li class="mb-1">
                            <a href="#!" title="lien vers la grille de tarifs"
                                class="regular text-decoration-none hover-underline fw-bold">Tarifs</a>
                        </li>
                        <li>
                            <a href="tel:0344565269" title="Lien du numéro de téléphone"
                                class="regular text-decoration-none hover-underline fw-bold">03 44 56 52 69</a>
                        </li>
                    </ul>
                </div>
                <!-- Partie Droite  -->
                <div class="col-lg-3 col-md-6 mb-4 letter-sp">
                    <h5 class="mb-1 letter-sp font-title fw-bold">Heures d'ouvertures</h5>
                    <table class="regular letter-sp">
                        <tbody>
                            <tr>
                                <td>Mar - jeu:</td>
                                <td>9h- 18H</td>
                            </tr>
                            <tr>
                                <td>ven - sam:</td>
                                <td>9H - 19H</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Mentions Légales -->
        <div class="text-center p-3 regular letter-sp">
            <a class="regular text-decoration-none hover-underline fw-bold" href="#!">Mentions légales</a> © 2023
            <a class="regular text-decoration-none hover-underline fw-bold" href="index.html"> LB Coiffure</a>
        </div>
    </footer>
    <!-- JS -->
    <script src="https://kit.fontawesome.com/a1eac4c766.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
    <!-- JS PERSO -->
    <script src="./public/assets/js/script.js"></script>
</body>

</html>