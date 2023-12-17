<h1 class="font-title text-center fw-bold mt-5">Ajouter un produit</h1>
<div class="row pt-3 mb-5">
    <div class="col-lg-8 offset-lg-2 col-12 pt-5">
        <form method="POST" id="formUser">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label for="nameproduct" class="regular">Nom</label>
                        <input id="nameproduct" class="form-control" type="text" name="nameproduct" value="<?= $nameproduct ?? ''; ?>" placeholder="Entrer le nom du produit">
                        <span class="regular"><?= $error["nameproduct"] ?? '' ?></span>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="mb-3">
                            <span class="regular">&nbsp;Catégorie</span>
                            <select name="" id="" class="select-style">
                                <option selected value="femme">Femme</option>
                                <option value="homme">Homme</option>
                                <option value="enfant">Enfant</option>
                            </select>
                            <label for="productprice" class="regular"> Prix</label>
                            <input id="productprice" class="price-style" type="text" size="10" name="productprice" value="<?= $productprice ?? ''; ?>" placeholder="Entrer le prix">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-12">
                        <label for="description" class="regular">Description</label>
                        <textarea id="description" class="form-control" type="text" name="adress" value="<?= $description ?? ''; ?>" placeholder="Entrer la description du produit"></textarea>
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