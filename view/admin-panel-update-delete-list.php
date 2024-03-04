<?php include 'header.php'; ?>
<?php include '../model/database.php'; ?>
<?php require_once '../controller/admin-panel-update-delete-list.php'; ?>


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
                        <h1>Rechercher un produit</h1>
                    </div>

                    <?php 
                    
                    foreach ($products as $product) {
                        echo '<div>';
                        echo '<h1>' . $product['name'] . '</h1>';
                        echo '<p>' . $product['price'] . '</p>';
                        echo '<p>' . $product['short_desc'] . '</p>';
                        echo '<p>' . $product['description'] . '</p>';
                        echo '<p>' . $product['technical_sheet'] . '</p>';
                        echo '<p>' . $product['category_name'] . '</p>';
                        echo '<img src="' . $product['image_path'] . '" alt="">';
                        echo '</div>';
                    }

                    ?>
                    
                    <div>

                    </div>
                </div>

            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>