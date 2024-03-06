<?php include 'header.php'; ?>
<?php require_once '../controller/read-product-promotions.php'; ?>


    <!-- TOUTES LES PROMOTIONS SECTION -->
    <section class="promotions">
        <div class="container">

            <div class="promotions-header">
                <h1>Toutes les promotions</h1>
            </div>

            <div class="promotions-items">

                <!-- Affichage des produits avec le controlleur qui filtre la catégorie promotions-->
                <?php foreach ($products as $product) : ?>
                <div class="promotions-item product-id" data-product-id="<?php echo $product['id_product'];?>">
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