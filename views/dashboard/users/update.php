<h1 class="font-title text-center fw-bold mt-5">MODIFIER</h1>
        <div class="row pt-3 mb-5">
            <div class="col-lg-8 offset-lg-2 col-12 pt-5">
                <form method="POST" id="formUser">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="lastname" class="regular">Nom</label>
                                <input id="lastname" class="form-control" type="text" name="lastname" value="<?= $user->lastname  ?? '';  ?>" placeholder="Entrer votre nom">
                                <span class="regular"><?= $error["lastname"] ?? '' ?></span>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="firstname" class="form-label regular mb-0">Prénom</label>
                                    <input type="text" class="form-control border" id="firstname" name="firstname" value="<?= $user->firstname  ?? '';  ?>" placeholder="Entrer votre prénom">
                                    <div id="usernameHelp" class="form-text error d-none">Ce nom d'utilisateur n'est pas valide</div>
                                    <span class="regular"><?= $error["firstname"] ?? '' ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="email" class="form-label regular">Email</label>
                                <input type="email" class="form-control border" id="email" name="email" value="<?= $user->email ?? ''; ?>" aria-describedby="emailHelp" placeholder="Entrer votre adresse email">
                                <div id="emailHelp" class="form-text error regular d-none">Cet email n'est pas valide</div>
                                <span class="regular"><?= $error['email'] ?? '' ?></span>
                            </div>
                            <div class="col-md-6">
                                <label for="phonenumber" class="regular mt-2">Numéro de téléphone</label>
                                <input id="phonenumber" class="form-control" type="text" name="phonenumber" value="<?= $user->phonenumber ?? ''; ?>" placeholder="Entrer votre numéro de téléphone">
                                <span class="regular"><?= $error['phonenumber'] ?? '' ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12">
                                <label for="address" class="regular">Adresse</label>
                                <input id="address" class="form-control" type="text" name="address" value="<?= $user->address ?? ''; ?>" placeholder="Entrer votre adresse">
                            </div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <button class="btn btn-form">Modifier</button>
                    </div>
                </form>
            </div>
        </div>