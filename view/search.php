<?php include 'header.php'; ?>
<?php require_once '../controller/search.php'; ?>


    <!-- SEARCH SECTION -->
    <section class="kits-packs">
        <div class="container">

            <div class="kits-packs-header">
                <h1>Resultats pour " <?= $_POST['search'] ?> "</h1>
            </div>

            <div class="kits-packs-items">

                <?php foreach ($products as $product): ?>
                <div class="kits-packs-item product-id" data-product-id="<?php echo $product['id_product'];?>">
                    <div>
                        <img src="<?= $product['image'];?>" alt="">
                    </div>
                    <div>
                        <h3>
                            <?= $product['name'];?>
                        </h3>
                        <h3>
                            <?= $product['price'] . " €";?>
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