        <h1 class="font-title text-center fw-bold mt-5">INSCRIPTION</h1>
        <div class="row pt-3 mb-5">
            <div class="col-lg-8 offset-lg-2 col-12 pt-5">
                <form>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="nom" class="regular">Nom</label>
                                <input id="nom" class="form-control" type="text" name="" placeholder="Entrer votre nom">
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="username" class="form-label regular mb-0">Nom d'utilisateur</label>
                                    <input type="text" class="form-control border" id="username" name="username" placeholder="Nom d'utilisateur">
                                    <div id="usernameHelp" class="form-text error d-none">Ce nom d'utilisateur n'est pas valide</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="password1" class="form-label regular">Mot de passe</label>
                                <input type="password" class="form-control" id="password1" placeholder="Entrer votre mot de passe">
                                <div id="nudge">
                                    <span class="badge  regular d-none">Faible</span>
                                    <span class="badge  regular d-none">Moyen</span>
                                    <span class="badge regular d-none">Fort</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="password2" class="form-label regular">Confirmation du mot de passe</label>
                        <input type="password" class="form-control" id="password2" placeholder="Confirmer votre mot de passe">
                        <div id="password2Help" class="form-text regular d-none">Les mots de passe doivent correspondre</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="email" class="form-label regular">Email</label>
                                <input type="email" class="form-control border" id="email" aria-describedby="emailHelp" placeholder="Entrer votre adresse email">
                                <div id="emailHelp" class="form-text error d-none">Cet email n'est pas valide</div>
                            </div>
                            <div class="col-md-6">
                                <label for="numéro" class="regular mt-2">Numéro de téléphone</label>
                                <input id="numéro" class="form-control" type="text" name=""
                                    placeholder="Entrer votre numéro de téléphone">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12">
                                <label for="adresse"class="regular">Adresse</label>
                                <input id="adresse" class="form-control" type="text" name=""
                                    placeholder="Entrer votre adresse">
                            </div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <button class="btn btn-form">S'inscrire</button>
                    </div>
                </form>
            </div>
        </div>