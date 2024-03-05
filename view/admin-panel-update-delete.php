<?php include 'header.php'; ?>
<?php require_once '../controller/admin-panel-update-delete.php'; ?>


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
                        <form class="create-product-form" action="../controller/admin-panel-update.php" method="POST" enctype="multipart/form-data">
                            <input class="text-form" type="number" name="productId" value="<?= $product['id_product']?>" readonly>
                            <input class="text-form" type="text" name="name" value="<?= $product['name']?>">
                            <input class="text-form" type="number" name="price" value="<?= $product['price']?>">
                            <textarea class="text-form" name="short_desc" rows="4" style="resize: vertical;"><?= $product['short_desc']?></textarea>
                            <textarea class="text-form" name="description" rows="5" style="resize: vertical;"><?= $product['description']?></textarea>
                            <textarea class="text-form" name="technical_sheet" rows="5" style="resize: vertical;"><?= $product['technical_sheet']?></textarea>
                            <label for="category_name">Selectionner une catégorie :</label>
                            <select class="text-form" name="category_name">
                                <option value="3" <?= $product['category_name'] == 'Kits/Packs' ? 'selected' : '' ?>>Kits/Packs</option>
                                <option value="2" <?= $product['category_name'] == 'Nouveautés' ? 'selected' : '' ?>>Nouveautés</option>
                                <option value="1" <?= $product['category_name'] == 'Promotions' ? 'selected' : '' ?>>Promotions</option>
                            </select>
                            <div class="product-preview-images">
                                <img src="<?= $product['image']?>" alt="">
                            </div>

                            <label class="custom-file-label" for="filename">Ajouter une image</label>
                            <input class="add-file text-form" type="file" accept=".jpeg" name="image_path">
                            <div class="update-delete-btns">
                                <button class="update-product-btn create-product-btn" type="submit">Modifier le produit</button>
                            </div>
                            <!-- Faire un deuxième formulaire avec l'ID caché et juste le boutton supprimer -->
                        </form>
                        <form class="create-product-form" action="../controller/admin-panel-delete.php" method="POST">
                        <input class="text-form" type="number" name="productId" value="<?= $product['id_product']?>" hidden>
                        <button class="delete-product-btn" type="submit">Supprimer le produit</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>