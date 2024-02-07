<?php include 'view/header.php'; ?>

    <!-- ADMIN PANEL CREATE SECTION -->
    <section class="admin-panel">
        <div class="container">
            <div class="admin-panel-content">

                <div class="admin-panel-sumary">
                    <div>
                        <h1>Admin panel</h1>
                    </div>
                    <div class="admin-panel-menu">
                        <h5>Créer un produit</h5>
                        <div class="black-separator"></div>
                        <h5>Modifier/Supprimer</h5>
                        <div class="black-separator"></div>
                        <div>
                            <button class="disconnect-btn">Me déconnecter</button>
                        </div>
                    </div>
                </div>

                <div class="create-product">
                    <div class="create-product-header">
                        <h1>Créer un produit</h1>
                    </div>
                    <div>
                        <form class="create-product-form" action="">
                            <input class="text-form" type="email" name="" id="" placeholder="Nom du produit">
                            <input class=" text-form" type="number" placeholder="Prix du produit">
                            <label for="selectOption">Selectionner une catégorie :</label>
                            <select class="text-form" id="selectOption" name="selectOption">
                                <option value="option1">Kits/Packs</option>
                                <option value="option2">Nouveautés</option>
                                <option value="option3">Promotions</option>
                            </select>
                            <label class="custom-file-label" for="myFile">Ajouter une image</label>
                            <input class="add-file text-form" type="file" id="myFile" name="filename">
                            <button class="create-product-btn" type="submit">Créer le produit</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

<?php include 'view/footer.php'; ?>