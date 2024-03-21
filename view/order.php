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
                                    min="1" max="10" value="<?= $product['quantity']?>" readonly>
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
                        <label for="lastname">Nom</label>
                        <input type="text" name="lastname" id="" placeholder="Nom" value="<?= $_SESSION['user_firstname'];?>" readonly>
                        <label for="firstname">Prénom</label>
                        <input type="text" name="firstname" id="" placeholder="Prénom" value="<?= $_SESSION['user_lastname'];?>" readonly>
                        <label for="email">Email</label>
                        <input type="text" name="email" id="" placeholder="Email" value="<?= $_SESSION['user_email'];?>" readonly>
                        <label for="phone">Adresse</label>
                        <input type="text" name="address" id="" placeholder="Adresse" value="<?= $_SESSION['user_address'];?>" readonly>
                        <label for="city">Ville</label>
                        <input type="text" name="city" id="" placeholder="Ville" value="<?= $_SESSION['user_city'];?>">
                        <label for="zipcode">Code postal</label>
                        <input type="text" name="zipcode" id="" placeholder="Code postal" value="<?= $_SESSION['user_zipcode'];?>" readonly>
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
                                <label for="cardNumber">Numéro de carte :</label>
                                <input class="text-form" type="text" name="cardNumber" placeholder="Numéro de carte" pattern="\d{16}" required>
                                <label for="expiryDate">Date d'expiration :</label>
                                <input class="text-form" type="text" name="expiryDate" placeholder="Date d'expiration" pattern="(0[1-9]|1[0-2])\/\d{2}" required>
                                <label for="cvv">Cryptogramme visuel :</label>
                                <input class="text-form" type="text" name="cvv" placeholder="Cryptogramme visuel" pattern="\d{3}" required>
                                <button type="submit" class="order-validate-btn">Valider ma commande</button>
                            </form>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </section>


<?php include 'footer.php'; ?>