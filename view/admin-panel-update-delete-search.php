<?php include 'header.php'; ?>
<?php require_once '../controller/check-admin-connexion.php' ?>


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
                        <h1>Modifier un produit</h1>
                    </div>
                    <div>
                        <form class="create-product-form" action="../view/admin-panel-update-delete-list.php" method="POST">
                            <input class="text-form" type="search" name="search" placeholder="Rechercher un produit" value="<?php ?>" required>
                            <div class="update-delete-btns">
                                <button class="update-product-btn create-product-btn" type="submit">Rechercher</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>