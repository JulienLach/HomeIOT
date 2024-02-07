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
                        <h1>Modifier/Supprimer</h1>
                    </div>
                    <div>
                        <form class="create-product-form" action="">
                            <input class="text-form" type="email" name="" id="" placeholder="ID du produit">
                            <input class="text-form" type="email" name="" id="" placeholder="Arduino UNO+">
                            <input class=" text-form" type="password" placeholder="13,99 €">
                            <label for="selectOption">Selectionner une catégorie :</label>
                            <select class="text-form" id="selectOption" name="selectOption">
                                <option value="option1">Kits/Packs</option>
                                <option value="option2">Nouveautés</option>
                                <option value="option3">Promotions</option>
                            </select>
                            <label class="custom-file-label" for="myFile">Ajouter une image</label>
                            <input class="add-file text-form" type="file" id="myFile" name="filename">
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

<?php include 'view/footer.php'; ?>