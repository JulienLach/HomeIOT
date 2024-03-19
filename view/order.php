<?php include 'header.php'; ?>
<?php require_once '../controller/order.php';?>


    <!-- ORDER SECTION -->
    <section class="order">
        <div class="container">
            <div class="order-content">

                <div class="order-pending-items">

                    <div>
                        <h1>Ma commande</h1>
                    </div>

                    <div class="items-pending">

                        <?php if(isset($_SESSION['id_users']) && isset($products)) {
                            foreach ($products as $product) { ?>
                        <div class="item-pending">
                            <div class="item-info">
                                <img style="height: 50px;" src="<?= $product['image']?>">
                                <p><?= $product['name']?></p>
                                <p>Code article : <?= $product['id_product']?></p>
                            </div>
                            <div class="item-price">
                                <input type="number" class="quantity-selector" id="quantity-selector" name="quantity"
                                    min="1" max="10" value="<?= $product['quantity']?>">
                                <p>Total : <?= $product['price'] * $product['quantity']?> €</p>
                            </div>
                        </div>
                        <?php }?>
                        <?php }?>


                    </div>

                    <div>
                        <h1 class="billing-form-header">Facturation & expédition</h1>
                    </div>

                    <!-- BILLING FORM -->
                    <form class="billing-form" action="">
                        <input type="text" name="name" id="" placeholder="Nom" value="<?= $_SESSION['user_firstname'];?>">
                        <input type="text" name="name" id="" placeholder="Prénom" value="<?= $_SESSION['user_lastname'];?>">
                        <input type="text" name="name" id="" placeholder="Email" value="<?= $_SESSION['user_email'];?>">
                        <input type="text" name="name" id="" placeholder="Adresse">
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
                        <h5>Sous total : <span><?= empty($products) ? 0 : end($products)['total'] ?> €</span></h5>                        <div>

                        <!-- CARD FORM -->
                        <div class="card-form">
                            <form class="card-form-content" action="../controller/confirm-order.php">
                                <input class="text-form" type="text" name="" id="" placeholder="Numéro de carte">
                                <input class="text-form" type="text" placeholder="Date d'expiration">
                                <input class="text-form" type="text" placeholder="Cryptogramme visuel">                                      
                                <button type="sumbit" class="order-validate-btn">Valider ma commande</button>
                            </form>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </section>


<?php include 'footer.php'; ?>