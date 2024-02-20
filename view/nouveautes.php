<?php include 'header.php'; ?>
<?php require_once '../controller/read-product.php';?>


    <!-- TOUTES LES NOUVEAUTES SECTION -->
    <section class="nouveautes">
        <div class="container">

            <div class="nouveautes-header">
                <h1>Toutes les nouveautés</h1>
            </div>

            <div class="nouveautes-items">

            <!-- TEST READ-PRODUCT -->
                <?php foreach ($products->readproduct() as $product) : ?>
                <div class="nouveautes-item">
                    <div>
                        <img src="http://jserveur.local/HomeIOT/img/Arduino_2.png" alt="">
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
                        <button class="add-to-cart-btn">Add to cart</button>
                    </div>
                </div>
                <?php endforeach; ?>

            <!-- FIN TEST READ-PRODUCT -->


                <div class="nouveautes-item">
                    <div>
                        <img src="http://jserveur.local/HomeIOT/img/Arduino_2.png" alt="">
                    </div>
                    <div>
                        <h3>
                            Arduino UNO+
                        </h3>
                        <h3>13,99 €</h3>
                    </div>
                    <div>
                        <button class="add-to-cart-btn">Add to cart</button>
                    </div>
                </div>

                <div class="nouveautes-item">
                    <div>
                        <img src="http://jserveur.local/HomeIOT/img/raspberry_1.png" alt="">
                    </div>
                    <div>
                        <h3>
                            Arduino UNO+
                        </h3>
                        <h3>13,99 €</h3>
                    </div>
                    <div>
                        <button class="add-to-cart-btn">Add to cart</button>
                    </div>
                </div>

                <div class="nouveautes-item">
                    <div>
                        <img src="http://jserveur.local/HomeIOT/img/Arduino_1.png" alt="">
                    </div>
                    <div>
                        <h3>
                            Arduino UNO+
                        </h3>
                        <h3>13,99 €</h3>
                    </div>
                    <div>
                        <button class="add-to-cart-btn">Add to cart</button>
                    </div>
                </div>

                <div class="nouveautes-item">
                    <div>
                        <img src="http://jserveur.local/HomeIOT/img/Arduino_3.png" alt="">
                    </div>
                    <div>
                        <h3>
                            Arduino UNO+
                        </h3>
                        <h3>13,99 €</h3>
                    </div>
                    <div>
                        <button class="add-to-cart-btn">Add to cart</button>
                    </div>
                </div>

                <div class="nouveautes-item">
                    <div>
                        <img src="http://jserveur.local/HomeIOT/img/Arduino_2.png" alt="">
                    </div>
                    <div>
                        <h3>
                            Arduino UNO+
                        </h3>
                        <h3>13,99 €</h3>
                    </div>
                    <div>
                        <button class="add-to-cart-btn">Add to cart</button>
                    </div>
                </div>

                <div class="nouveautes-item">
                    <div>
                        <img src="http://jserveur.local/HomeIOT/img/raspberry_1.png" alt="">
                    </div>
                    <div>
                        <h3>
                            Arduino UNO+
                        </h3>
                        <h3>13,99 €</h3>
                    </div>
                    <div>
                        <button class="add-to-cart-btn">Add to cart</button>
                    </div>
                </div>

                <div class="nouveautes-item">
                    <div>
                        <img src="http://jserveur.local/HomeIOT/img/Arduino_1.png" alt="">
                    </div>
                    <div>
                        <h3>
                            Arduino UNO+
                        </h3>
                        <h3>13,99 €</h3>
                    </div>
                    <div>
                        <button class="add-to-cart-btn">Add to cart</button>
                    </div>
                </div>

                <div class="nouveautes-item">
                    <div>
                        <img src="http://jserveur.local/HomeIOT/img/Arduino_3.png" alt="">
                    </div>
                    <div>
                        <h3>
                            Arduino UNO+
                        </h3>
                        <h3>13,99 €</h3>
                    </div>
                    <div>
                        <button class="add-to-cart-btn">Add to cart</button>
                    </div>
                </div>

                <div class="nouveautes-item">
                    <div>
                        <img src="http://jserveur.local/HomeIOT/img/Arduino_2.png" alt="">
                    </div>
                    <div>
                        <h3>
                            Arduino UNO+
                        </h3>
                        <h3>13,99 €</h3>
                    </div>
                    <div>
                        <button class="add-to-cart-btn">Add to cart</button>
                    </div>
                </div>

                <div class="nouveautes-item">
                    <div>
                        <img src="http://jserveur.local/HomeIOT/img/raspberry_1.png" alt="">
                    </div>
                    <div>
                        <h3>
                            Arduino UNO+
                        </h3>
                        <h3>13,99 €</h3>
                    </div>
                    <div>
                        <button class="add-to-cart-btn">Add to cart</button>
                    </div>
                </div>

                <div class="nouveautes-item">
                    <div>
                        <img src="http://jserveur.local/HomeIOT/img/Arduino_1.png" alt="">
                    </div>
                    <div>
                        <h3>
                            Arduino UNO+
                        </h3>
                        <h3>13,99 €</h3>
                    </div>
                    <div>
                        <button class="add-to-cart-btn">Add to cart</button>
                    </div>
                </div>

                <div class="nouveautes-item">
                    <div>
                        <img src="http://jserveur.local/HomeIOT/img/Arduino_3.png" alt="">
                    </div>
                    <div>
                        <h3>
                            Arduino UNO+
                        </h3>
                        <h3>13,99 €</h3>
                    </div>
                    <div>
                        <button class="add-to-cart-btn">Add to cart</button>
                    </div>
                </div>

            </div>
        </div>
    </section>


<?php include 'footer.php'; ?>