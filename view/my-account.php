<?php include 'header.php'; ?>

<?php if(!isset($_SESSION['user_lastname']) && !isset($_SESSION['user_firstname'])) {
    echo '<script>window.location.href = "connexion.php";</script>';
    exit();
}
?>

    <!-- MY ACCOUNT SECTION -->
    <section class="my-account">
        <div class="container">
            <div class="my-account-content">

                <div class="my-account-sumary">
                    <div>
                        <h1>Mon compte</h1>
                    </div>
                    <div class="my-account-menu">
                        <h5><a href="my-account.php">Mes commandes</a></h5>
                        <div class="black-separator"></div>
                        <h5><a href="my-account-informations.php">Mes informations</a></h5>
                        <div class="black-separator"></div>
                        <?php require_once '../controller/check-admin-link.php' ?>
                        <?php if($_SESSION['isAdmin'] == true): ?>
                            <h5><a href="admin-panel-update-delete-search.php">Admin panel</a></h5>
                            <div class="black-separator"></div>
                        <?php endif; ?>
                        <div>
                            <button class="disconnect-btn">Me déconnecter</button>
                        </div>
                    </div>
                </div>

                <div class="my-account-purchases">

                    <div>
                        <h1>Mes commandes</h1>
                    </div>

                    <div class="items-purchased">

                        <?php require_once '../controller/read-confirmed-orders.php'?>
                        <?php foreach($orders as $order): ?>
                            <div class="item-purchased">
                            <div class="item-info">
                                <img style="height: 50px;" src="http://jserveur.local/HomeIOT/img/order-confirmed.png" alt="">
                                <p>Numéro de commande : <span><?= $order['id_order'] ?></span></p>
                                <p>Quantité d'articles : <span><?= $order['quantity'] ?></span></p>
                            </div>
                            <div class="item-price">
                                <p>Total : <span><?= $order['total'] ?></span> €</p>
                            </div>
                        </div>
                        <hr>
                        <?php endforeach; ?>

                        <!-- <div class="item-purchased">
                            <div class="item-info">
                                <img style="height: 50px;" src="http://jserveur.local/HomeIOT/img/Arduino_3.png" alt="">
                                <p>Arduino Uno+</p>
                                <p>Numéro de commande : NSH565FRDF45</p>
                            </div>
                            <div class="item-price">
                                <p>Total : 12,99 €</p>
                            </div>
                        </div> -->

                    </div>
                </div>
            </div>
        </div>
    </section>


<?php include 'footer.php'; ?>