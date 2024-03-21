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
                    
                        <!--afficher les détails des produits dans le panier -->
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
                            <div>
                                <form action="../controller/remove-from-shopping-cart.php" method="POST">
                                    <input type="hidden" name="productId" value="<?= $product['id_product']?>">
                                    <button type="submit" class="delete-item-btn">❌</button>
                                </form>
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
                        <h5>Sous total : <span><?= empty($products) ? 0 : end($products)['total'] ?> €</span></h5>                        <div>
                            <?php if(!isset($products)) {
                            echo '<a href="index.php"><button class="shopping-cart-validate-btn">Retour à l\'accueil</button></a>';
                            } else {
                            echo '<a href="../controller/confirm-shopping-cart.php"><button class="shopping-cart-validate-btn">Valider mon panier</button></a>';
                            }
                            ?>
                            
                            <!-- <a href="../controller/confirm-shopping-cart.php">
                                <button class="shopping-cart-validate-btn">Valider mon panier</button>
                            </a> -->
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>


<?php include 'footer.php'; ?>