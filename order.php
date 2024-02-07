<?php include 'view/header.php'; ?>


    <!-- ORDER SECTION -->
    <section class="order">
        <div class="container">
            <div class="order-content">

                <div class="order-pending-items">

                    <div>
                        <h1>Ma commande</h1>
                    </div>

                    <div class="items-pending">

                        <div class="item-pending">
                            <div class="item-info">
                                <img style="height: 50px;" src="img/Arduino_2.png" alt="">
                                <p>Arduino Uno+</p>
                                <p>Code article : 08975</p>
                            </div>
                            <div class="item-price">
                                <p>x 1</p>
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
                                <p>x 1</p>
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
                                <p>x 2</p>
                                <p>Total : 33,98 €</p>
                            </div>
                        </div>

                        <div class="item-pending">
                            <div class="item-info">
                                <img style="height: 50px;" src="img/Arduino_3.png" alt="">
                                <p>Arduino Uno+</p>
                                <p>Code article : 36576</p>
                            </div>
                            <div class="item-price">
                                <p>x 1</p>
                                <p>Total : 12,99 €</p>
                            </div>
                        </div>

                    </div>

                    <div>
                        <h1 class="billing-form-header">Facturation & expédition</h1>
                    </div>

                    <!-- BILLING FORM -->
                    <form class="billing-form" action="">
                        <input type="text" name="name" id="" placeholder="Nom / Prénom">
                        <input type="text" name="name" id="" placeholder="Adresse posale">
                        <input type="text" name="name" id="" placeholder="Ville">
                        <input type="text" name="name" id="" placeholder="Code postal">
                    </form>

                </div>

                <div class="order-sumary">
                    <div>
                        <h1>Total</h1>
                    </div>
                    <div class="order-menu">
                        <div class="black-separator"></div>
                        <h5>Sous total :<span> 59,89 €</span></h5>

                        <!-- CARD FORM -->
                        <div class="card-form">
                            <form class="card-form-content" action="">
                                <input class="text-form" type="text" name="" id="" placeholder="Numéro de carte">
                                <input class="text-form" type="text" placeholder="Date d'expiration">
                                <input class="text-form" type="text" placeholder="Cryptogramme visuel">
                            </form>
                        </div>

                        <div>
                            <a href="order-confirmed.php">
                                <button class="order-validate-btn">Valider ma commande</button>
                            </a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>


<?php include 'view/footer.php'; ?>