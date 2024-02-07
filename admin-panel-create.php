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
                        <h5><a href="admin-panel-create.php">Créer un produit</a></h5>
                        <div class="black-separator"></div>
                        <h5> <a href="admin-panel-update-delete.php">Modifier/Supprimer</a></h5>
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
                        <form class="create-product-form" action="data.php" method="POST">
                            <input class="text-form" type="text" name="productName" id="" placeholder="Nom du produit">
                            <input class=" text-form" type="number" name="productPrice" placeholder="Prix du produit">
                            <label for="selectOption">Selectionner une catégorie :</label>
                            <select class="text-form" id="selectOption" name="categorieOption">
                                <option value="Kits/Packs">Kits/Packs</option>
                                <option value="Nouveautés">Nouveautés</option>
                                <option value="Promotions">Promotions</option>
                            </select>
                            <label class="custom-file-label" for="filename">Ajouter une image</label>
                            <input class="add-file text-form" type="file" name="filename" id="">
                            <button class="create-product-btn" type="submit">Créer le produit</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

<?php include 'view/footer.php'; ?>