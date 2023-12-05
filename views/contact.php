<!-- formulaire de contact -->
<div class="container col-12 col-md-6 mt-3">
    <h1 class="text-center font-title fw-bold">FORMULAIRE DE CONTACT</h1>
    <form method="POST">
        <div class="form-group">
            <label for="inputname" class="form-label regular">Nom</label>
            <input type="text" class="form-control" id="inputname"  name="inputname" value="<?=$inputname ?? '';?>" placeholder="Entrer votre nom">
            <span class="regular"><?= $error['inputname'] ?? '' ?></span>
        </div>
        <div class="form-group">
            <label for="inputemail" class="form-label regular">Email</label>
            <input type="mail" class="form-control" id="inputemail" name="inputemail" value="<?=$inputemail ?? '';?>" placeholder="Entrer votre adresse mail">
            <span class="regular"><?= $error['inputemail'] ?? '' ?></span>
        </div>
        <div class="form-group">
            <label for="inputphonenumber" class="form-label regular">Numéro de téléphone</label>
            <input type="text" class="form-control" id="inputphonenumber" name="inputphonenumber" value="<?=$inputphonenumber ?? '';?>" placeholder="Entrer votre numéro de téléphone">
            <span class="regular"><?= $error['inputphonenumber'] ?? '' ?>
        </div>
        <div class="form-group">
            <label for="contatcmessage" class="form-label regular">Message</label>
            <textarea type="text" class="form-control" rows="8" id="contatcmessage" name="contatcmessage" value="<?=$contatcmessage ?? '';?>" placeholder="Entrer votre message"></textarea>
            
        </div>
        <div class="mb-2 form-check">
            <input type="checkbox" class="form-check-input" id="check" name="check" value="<?=$chek ?? '';?>">
            <label class="form-check-label regular" for="check">En soumettant ce formulaire, j'accepte
                que mes informations soient utilisées uniquement dans le cadre de ma demande.</label>
                <span class="regular"><?= $error['check'] ?? '' ?></span>
        </div>
        <div class="row ">
            <p><button type="submit" class="col-12 col-md-6 btn btn-form">Envoyer</button></p>
        </div>
    </form>
</div>
