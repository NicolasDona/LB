<h1 class="font-title text-center fw-bold mt-5">Ajouter un produit</h1>
<div class="row pt-3 mb-5">
    <div class="col-lg-8 offset-lg-2 col-12 pt-5">
        <form method="POST" id="formUser">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label for="name" class="regular">Nom</label>
                        <input id="name" class="form-control" type="text" name="name" value="<?= $name ?? ''; ?>" placeholder="Entrer le nom du produit">
                        <span class="regular"><?= $error["name"] ?? '' ?></span>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="mb-3">
                            <label for="price" class="regular"> Prix</label>
                            <input id="price" class="price-style" type="text" size="10" name="price" value="<?= $productprice ?? ''; ?>" placeholder="Entrer le prix">
                            <label for="stock" class="regular"> Prix</label>
                            <input id="stock" class="price-style" type="text" size="10" name="stock" value="<?= $sotck; ?>" placeholder="Entrer le prix">
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-12">
                        <label for="description" class="regular">Description</label>
                        <textarea id="description" class="form-control" type="text" name="description" value="<?= $description ?? ''; ?>" placeholder="Entrer la description du produit"></textarea>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-12 regular">
                        <input type="checkbox" name="promostick"> Promotion</input>
                    </div>
                </div>
            </div>
            <div class="mt-2 regular">
                <label for="picture">Choisir une image : </label>
                <input
                        name="picture"
                        id="picture"
                        type="file"
                        class="form-control"
                        placeholder="Photo d'illustration"
                        accept="image/png, image/jpeg"
                    >
                    <small id="pictureHelp" class="form-text error"><?= $error['picture'] ?? '' ?></small>
            </div>
            <div class="row ">
            <p><button type="submit" class="btn btn-form mt-3">Envoyer</button></p>
        </div>
        </form>
    </div>
</div>