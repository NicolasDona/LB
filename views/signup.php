        <h1 class="font-title text-center fw-bold mt-5">INSCRIPTION</h1>
            <?php
            // Vérifier si la variable de session existe et l'afficher si c'est le cas
            if (isset($_SESSION['success_message'])) {
                echo '<div class="alert alert-success text-center">' . $_SESSION['success_message'] . '</div>';
                // Supprimer la variable de session après l'avoir affichée
                unset($_SESSION['success_message']);
            }
            ?>
        <div class="row pt-3 mb-5">
            <div class="col-lg-8 offset-lg-2 col-12 pt-5">
                <form method="POST" id="formUser">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="lastname" class="regular">Nom*</label>
                                <input id="lastname" class="form-control" type="text" name="lastname" value="<?= $lastname ?? ''; ?>" placeholder="Entrer votre nom">
                                <span class="regular"><?= $error["lastname"] ?? '' ?></span>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="firstname" class="form-label regular mb-0">Prénom*</label>
                                    <input type="text" class="form-control border" id="firstname" name="firstname" value="<?= $firstname ?? ''; ?>" placeholder="Entrer votre prénom">
                                    <div id="usernameHelp" class="form-text error d-none">Ce nom d'utilisateur n'est pas valide</div>
                                    <span class="regular"><?= $error["firstname"] ?? '' ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="password" class="form-label regular">Mot de passe*</label>
                                <input type="password" class="form-control" id="password" name="password" value="<?= $password ?? ''; ?>" placeholder="Entrer votre mot de passe">
                                <div id="nudge">
                                    <span class="badge  regular d-none">Faible</span>
                                    <span class="badge  regular d-none">Moyen</span>
                                    <span class="badge regular d-none">Fort</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="password2" class="form-label regular">Confirmation du mot de passe*</label>
                                <input type="password" class="form-control" id="password2" name="password2" value="<?= $password2 ?? ''; ?>" placeholder="Confirmer votre mot de passe">
                                <div id="password2Help" class="form-text regular d-none">Les mots de passe doivent correspondre</div>
                                <span class="regular"><?= $error["password"] ?? '' ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="email" class="form-label regular">Email*</label>
                                <input type="email" class="form-control border" id="email" name="email" value="<?= $email ?? ''; ?>" aria-describedby="emailHelp" placeholder="Entrer votre adresse email">
                                <div id="emailHelp" class="form-text error regular d-none">Cet email n'est pas valide</div>
                                <span class="regular"><?= $error['email'] ?? '' ?></span>
                            </div>
                            <div class="col-md-6">
                                <label for="phonenumber" class="regular mt-2">Numéro de téléphone*</label>
                                <input id="phonenumber" class="form-control" type="text" name="phonenumber" value="<?= $phonenumber ?? ''; ?>" placeholder="Entrer votre numéro de téléphone">
                                <span class="regular"><?= $error['phonenumber'] ?? '' ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12">
                                <label for="address" class="regular">Adresse*</label>
                                <input id="address" class="form-control" type="text" name="address" value="<?= $address ?? ''; ?>" placeholder="Entrer votre adresse">
                            </div>
                        </div>
                    </div>
                    <div class="mb-2 form-check">
                        <input type="checkbox" class="form-check-input" id="check" name="check" value="<?= $chek ?? ''; ?>">
                        <label class="form-check-label regular" for="check"> En soumettant ce formulaire, j’accepte que mes informations soient utilisées exclusivement dans le cadre de ma demande et de la relation commerciale éthique et personnalisée qui pourrait en découler si je le souhaite.</label>
                        <span class="regular"><?= $error['check'] ?? '' ?></span>
                    </div>
                    <div class="mt-2">
                        <button class="btn btn-form">S'inscrire</button>
                    </div>
                </form>
            </div>
        </div>