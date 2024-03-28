<?php include 'header.php'; ?>
<?php require_once '../controller/read-product-by-id.php';?>


<!-- PRODUCT SECTION -->
    <section class="product">
        <div class="container">
            <div class="product-content">

                <div class="product-images">
                    <img class="product-main-image" src="<?= $product['image'];?>" alt="">
                    <div class="product-preview-images">
                        <!-- <img src="http://jserveur.local/HomeIOT/img/Arduino_1.png" alt="">
                        <img src="http://jserveur.local/HomeIOT/img/Arduino_2.png" alt="">
                        <img src="http://jserveur.local/HomeIOT/img/Arduino_3.png" alt=""> -->
                    </div>
                </div>
                <?php ?>
                <div class="product-infos">
                    <div>
                        <h1><?= $product['name'] ?></h1>
                    </div>
                    <div>
                        <h3><?= $product['price'] . " €" ?></h3>
                    </div>
                    <div>
                        <p>
                            <?= $product['short_desc'] ?>
                        </p>
                    </div>
                    <div>
                        <form action="../controller/add-to-shopping-cart.php" method="POST">
                            <input type="hidden" name="productId" value="<?= $product['id_product'];?>">
                            <button type="submit" class="add-to-cart-btn">Ajouter au panier</button>
                        </form>
                    </div>
                </div>

            </div>

            <div class="product-buttons">
                <button class="description-btn" id="technical-sheet-btn">Fiche technique</button>
                <button class="description-btn" id="description-btn">Description détaillée</button>
            </div>

            <div class="product-description">
                <div>
                    <div id="technical-sheet-paragraph">
                        <h3>Fiche technique</h3>
                        <p>
                            <?= $product['technical_sheet'] ?>
                        </p>
                    </div>
                    <div id="description-paragraph">
                        <h3>Description détaillée</h3>
                        <p> 
                            <?= $product['description'] ?>
                        </p>
                    </div>

                </div>
            </div>

        </div>
    </section>


<?php include 'footer.php'; ?>