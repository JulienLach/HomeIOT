<?php include 'header.php'; ?>
<?php require_once '../controller/read-product-kits-packs.php';?>


    <!-- KITS/PACKS SECTION -->
    <section class="kits-packs">
        <div class="container">

            <div class="kits-packs-header">
                <h1>Tous les Kits/Packs</h1>
            </div>

            <div class="kits-packs-items">

                <!-- Affichage des produits avec le controlleur qui filtre la catégorie kits/packs-->
                <?php foreach ($products as $product) : ?>
                <div class="kits-packs-item product-id" data-product-id="<?php echo $product['id_product'];?>">
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
                        <form action="../controller/add-to-shopping-cart.php" method="POST">
                            <input type="hidden" name="productId" value="<?= $product['id_product'];?>">
                            <button type="submit" class="add-to-cart-btn">Ajouter au panier</button>
                        </form>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>


<?php include 'footer.php'; ?>