<?php include 'header.php'; ?>
<?php include '../model/database.php'; ?>


    <!-- ADMIN PANEL UPDATE DELETE SECTION -->
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
                        <h5> <a href="admin-panel-update-delete-search.php">Modifier/Supprimer</a></h5>
                        <div class="black-separator"></div>
                        <div>
                            <button class="disconnect-btn">Me déconnecter</button>
                        </div>
                    </div>
                </div>

                <div class="create-product">
                    <div class="create-product-header">
                        <h1>Modifier/Supprimer</h1>
                    </div>
                    <div>
                        <form class="create-product-form" action="../controller/admin-panel-update-delete.php" method="POST">
                            <input class="text-form" type="number" name="productId" placeholder="ID du produit" value="<?php ?>">
                            <input class="text-form" type="text" name="name" placeholder="Arduino UNO+">
                            <input class=" text-form" type="number" name="price" placeholder="13,99 €">
                            <textarea class="text-form" name="short_desc" rows="4" style="resize: vertical;" placeholder="Description courte"></textarea>
                            <textarea class="text-form" name="description" rows="5" style="resize: vertical;" placeholder="Description"></textarea>
                            <textarea class="text-form" name="technical_sheet" rows="5" style="resize: vertical;" placeholder="Fiche technique"></textarea>
                            <label for="category_name">Selectionner une catégorie :</label>
                            <select class="text-form" id="" name="category_name">
                                <option value="Kits/Packs">Kits/Packs</option>
                                <option value="Nouveautés">Nouveautés</option>
                                <option value="Promotions">Promotions</option>
                            </select>
                            <div class="product-preview-images">
                                <img src="http://jserveur.local/HomeIOT/img/Arduino_1.png" alt="">
                                <img src="http://jserveur.local/HomeIOT/img/Arduino_2.png" alt="">
                                <img src="http://jserveur.local/HomeIOT/img/Arduino_3.png" alt="">
                            </div>
                            <label class="custom-file-label" for="filename">Ajouter une image</label>
                            <input class="add-file text-form" type="file" name="filename" id="">
                            <div class="update-delete-btns">
                                <button class="update-product-btn create-product-btn" type="submit">Modifier le
                                    produit</button>
                                <button class="delete-product-btn" type="submit">Supprimer le
                                    produit</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>