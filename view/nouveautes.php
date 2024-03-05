<?php include 'header.php'; ?>
<?php require_once '../controller/read-product-nouveautes.php';?>


    <!-- TOUTES LES NOUVEAUTES SECTION -->
    <section class="nouveautes">
        <div class="container">

            <div class="nouveautes-header">
                <h1>Toutes les nouveautés</h1>
            </div>

            <div class="nouveautes-items">

                <!-- Affichage des produits avec le controlleur qui filtre la catégorie nouveautés-->
                <?php foreach ($products as $product) : ?>
                <div class="nouveautes-item" data-product-id="<?php echo $product['id_product'];?>">
                    <div>
                        <img src="<?php echo $product['image']; ?>" alt="">
                    </div>
                    <div>
                        <h3>
                            <?= $product['name'] ?>
                        </h3>
                        <h3>
                            <?= $product['price'] . " €"?>
                        </h3>
                    </div>
                    <div>
                        <button class="add-to-cart-btn">Ajouter au panier</button>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>


<?php include 'footer.php'; ?>