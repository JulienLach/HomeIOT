<?php include 'header.php'; ?>
<?php require_once '../controller/check-admin-connexion.php' ?>

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
                        <h5> <a href="admin-panel-update-delete-search.php">Modifier/Supprimer</a></h5>
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
                        <form class="create-product-form" action="../controller/admin-panel-create.php" method="POST" enctype="multipart/form-data">
                            <label for="name">Nom du produit :</label>    
                            <input class="text-form" type="text" name="name" placeholder="Nom du produit">
                            <label for="price">Prix :</label>
                            <input class=" text-form" type="number" name="price" step="0.01" placeholder="Prix du produit">
                            <label for="short_desc">Description courte :</label>
                            <textarea class="text-form" name="short_desc" rows="4" style="resize: vertical;" placeholder="Description courte"></textarea>
                            <label for="description">Description :</label>
                            <textarea class="text-form" name="description" rows="5" style="resize: vertical;" placeholder="Description"></textarea>
                            <label for="technical_sheet">Fiche technique :</label>
                            <textarea class="text-form" name="technical_sheet" rows="5" style="resize: vertical;" placeholder="Fiche technique"></textarea>
                            <label for="category_name">Selectionner une catégorie :</label>
                            <select class="text-form" name="category_name">
                                <option value="3">Kits/Packs</option>
                                <option value="2">Nouveautés</option>
                                <option value="1">Promotions</option>
                            </select>
                            <label class="custom-file-label" for="filename">Ajouter une image</label>
                            <input class="add-file text-form" type="file" accept=".jpeg" name="image_path" >
                            <button class="create-product-btn" type="submit">Créer le produit</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>