<?php require_once 'header.php'; ?>
<?php require_once '../controller/add-to-shopping-cart.php';?>

<?php if(!isset($_SESSION['user_lastname']) && !isset($_SESSION['user_firstname'])) {
    echo '<script>window.location.href = "connexion.php";</script>';
    exit();
}
?>

    <!-- CART SECTION -->
    <section class="shopping-cart">
        <div class="container">
            <div class="shopping-cart-content">

                <div class="shopping-cart-pending-items">

                    <div>
                        <h1>Mon panier</h1>
                    </div>

                    <div class="items-pending">
                    
                    <?php 
                    // echo $_SESSION['id_users'];
                    // require_once '../controller/add-to-shopping-cart.php';
                    // print_r($products);
                        // if(isset($_SESSION['id_users'])) {
                        //     foreach ($products as $product) {
                        //         echo $product['name'] . " " . $product['price'] ." €" ."<br>";
                        //         echo '<img src="' . $product['image'] . '" alt="' . $product['name'] . '">';
                        //     }
                        // }
                    ?>

                        <!--afficher les détails des produits dans le panier -->
                        <?php if(isset($_SESSION['id_users'])) {
                            foreach ($products as $product) { ?>
                        <div class="item-pending">
                            <div class="item-info">
                                <img style="height: 50px;" src="<?= $product['image']?>">
                                <p><?= $product['name']?></p>
                                <p>Code article : <?= $product['id_product']?></p>
                            </div>
                            <div class="item-price">
                                <input type="number" class="quantity-selector" id="quantity-selector" name="quantity"
                                    min="1" max="5" value="<?= $product['quantity']?>">
                                <p>Total : <?= $product['price']?> €</p>
                            </div>
                        </div>
                        <?php }?>
                        <?php }?>
                                
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
                            <a href="order.php">
                                <button class="shopping-cart-validate-btn">Valider mon panier</button>
                            </a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>


<?php include 'footer.php'; ?>