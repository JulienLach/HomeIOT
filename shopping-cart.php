<?php include 'view/header.php'; ?>


    <!-- CART SECTION -->
    <section class="shopping-cart">
        <div class="container">
            <div class="shopping-cart-content">

                <div class="shopping-cart-pending-items">

                    <div>
                        <h1>Mon panier</h1>
                    </div>

                    <div class="items-pending">

                        <div class="item-pending">
                            <div class="item-info">
                                <img style="height: 50px;" src="img/Arduino_2.png" alt="">
                                <p>Arduino Uno+</p>
                                <p>Code article : 08975</p>
                            </div>
                            <div class="item-price">
                                <input type="number" class="quantity-selector" id="quantity-selector" name="quantity"
                                    min="1" max="5" placeholder="1">
                                <p>Total : 13,99 €</p>
                            </div>
                        </div>

                        <div class="item-pending">
                            <div class="item-info">
                                <img style="height: 50px;" src="img/Arduino_1.png" alt="">
                                <p>Arduino Uno+</p>
                                <p>Code article : 74935</p>
                            </div>
                            <div class="item-price">
                                <input type="number" class="quantity-selector" id="quantity-selector" name="quantity"
                                    min="1" max="5" placeholder="1">
                                <p>Total : 23,99 €</p>
                            </div>
                        </div>

                        <div class="item-pending">
                            <div class="item-info">
                                <img style="height: 50px;" src="img/raspberry_1.png" alt="">
                                <p>Arduino Uno+</p>
                                <p>Code article : 67939</p>
                            </div>
                            <div class="item-price">
                                <input type="number" class="quantity-selector" id="quantity-selector" name="quantity"
                                    min="1" max="5" placeholder="1">
                                <p>Total : 16,99 €</p>
                            </div>
                        </div>

                        <div class="item-pending">
                            <div class="item-info">
                                <img style="height: 50px;" src="img/Arduino_3.png" alt="">
                                <p>Arduino Uno+</p>
                                <p>Code article : 36576</p>
                            </div>
                            <div class="item-price">
                                <input type="number" class="quantity-selector" id="quantity-selector" name="quantity"
                                    min="1" max="5" placeholder="1">
                                <p>Total : 12,99 €</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="shopping-cart-sumary">
                    <div>
                        <h1>Total panier</h1>
                    </div>
                    <div class="shopping-cart-menu">
                        <div class="black-separator"></div>
                        <h5>Sous total :<span> 59,89 €</span></h5>
                        <div>
                            <a href="order.html">
                                <button class="shopping-cart-validate-btn">Valider mon panier</button>
                            </a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>


<?php include 'view/footer.php'; ?>