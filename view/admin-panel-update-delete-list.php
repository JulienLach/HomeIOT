<?php include 'header.php'; ?>
<?php require_once '../controller/check-admin-connexion.php' ?>
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
                    echo "Résultats pour : \"". $_POST['search'] . "\"". "<br>";
                    echo "<br>";

                    foreach ($products as $product) {
                        echo '<div class="item-pending">';
                        echo '<div class="item-info">';
                        echo '<img style="height: 50px;" src="' . $product['image'] . '">';
                        echo '<p><a class="update-product-list" href="http://jserveur.local/HomeIOT/view/product.php?id=' . $product['id_product'] . '">' . $product['name'] . '</a></p>';
                        echo '<p>Code article : ' . $product['id_product'] . '</p>';
                        echo '<p>' . "Prix : ". $product['price'] . " €". '</p>';
                        echo '</div>';
                        echo '<div class="item-price">';
                        echo '<button class="update-delete-btn" onclick="location.href=\'admin-panel-update-delete.php?id=' . $product['id_product'] . '\'" type="button">Modifier/Supprimer</button>';
                        echo '</div>';
                        echo '</div>';
                        echo "<hr>";
                    }
                    ?>
                    
                    <div>

                    </div>
                </div>

            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>