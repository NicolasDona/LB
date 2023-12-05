<h1 class="font-title text-center fw-bold mt-5">CONNEXION</h1>
<div class="row pt-3 mb-5">
    <div class="col-lg-8 offset-lg-2 col-12 pt-5">
        <form method="POST" id="formUser">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label for="email" class="form-label regular">Email</label>
                        <input type="email" class="form-control border" id="email" name="email" value="<?= $email ?? ''; ?>" aria-describedby="emailHelp" placeholder="Entrer votre adresse email">
                        <div id="emailHelp" class="form-text error d-none">Cet email n'est pas valide</div>
                        <span class="regular"><?= $error['email'] ?? '' ?></span>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="password1" class="form-label regular">Mot de passe</label>
                            <input type="password" class="form-control" id="password1" name="password1" value="<?= $password1 ?? ''; ?>" placeholder="Entrer votre mot de passe">
                            <span class="regular"><?= $error['password'] ?? '' ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-2">
                <button class="btn btn-form">Connexion</button>
            </div>
        </form>
    </div>
</div>
