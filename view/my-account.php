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

                        <div class="item-purchased">
                            <div class="item-info">
                                <img style="height: 50px;" src="http://jserveur.local/HomeIOT/img/Arduino_2.png" alt="">
                                <p>Arduino Uno+</p>
                                <p>Numéro de commande : NSH565FRDF45</p>
                            </div>
                            <div class="item-price">
                                <p>Total : 13,99 €</p>
                            </div>
                        </div>

                        <div class="item-purchased">
                            <div class="item-info">
                                <img style="height: 50px;" src="http://jserveur.local/HomeIOT/img/Arduino_1.png" alt="">
                                <p>Arduino Uno+</p>
                                <p>Numéro de commande : NSH565FRDF45</p>
                            </div>
                            <div class="item-price">
                                <p>Total : 23,99 €</p>
                            </div>
                        </div>

                        <div class="item-purchased">
                            <div class="item-info">
                                <img style="height: 50px;" src="http://jserveur.local/HomeIOT/img/raspberry_1.png" alt="">
                                <p>Arduino Uno+</p>
                                <p>Numéro de commande : NSH565FRDF45</p>
                            </div>
                            <div class="item-price">
                                <p>Total : 16,99 €</p>
                            </div>
                        </div>

                        <div class="item-purchased">
                            <div class="item-info">
                                <img style="height: 50px;" src="http://jserveur.local/HomeIOT/img/Arduino_3.png" alt="">
                                <p>Arduino Uno+</p>
                                <p>Numéro de commande : NSH565FRDF45</p>
                            </div>
                            <div class="item-price">
                                <p>Total : 12,99 €</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


<?php include 'footer.php'; ?>