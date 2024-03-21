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
                <div class="container">
            <div class="create-account-content">
                <div class="create-account-header">
                    <h1>Mes informations</h1>
                </div>
                <div>
                    
                    <?php 
                    if(isset($_SESSION['user_lastname']) && isset($_SESSION['user_firstname'])) {
                    
                    ?>
                        <form class="create-account-form" action="../controller/my-account-informations-update.php" method="POST">
                            <input class="text-form" type="text" name="id_users" value="<?= $_SESSION['id_users'];?>" hidden>
                            <label class="" for="lastname">Nom :</label>
                            <input class="text-form" type="text" name="lastname" placeholder="Nom" value="<?= $_SESSION['user_lastname'];?>">
                            <label class="" for="firstname">Prénom :</label>
                            <input class="text-form" type="text" name="firstname" placeholder="Prénom" value="<?= $_SESSION['user_firstname'];?>">
                            <label class="" for="email">Email :</label>
                            <input class="text-form" type="email" name="email" placeholder="Email" value="<?= $_SESSION['user_email'];?>">
                            <label class="" for="address">Adresse :</label>
                            <input class="text-form" type="text" name="address" placeholder="Adresse" value="<?= $_SESSION['user_address'];?>">
                            <label class="" for="zipcode">Code postal :</label>
                            <input class="text-form" type="text" name="zipcode" placeholder="Code postal" value="<?= $_SESSION['user_zipcode'];?>">
                            <label class="" for="city">Ville :</label>
                            <input class="text-form" type="text" name="city" placeholder="Ville" value="<?= $_SESSION['user_city'];?>">
                            <button class="create-account-btn" type="submit">Mettre à jour mes informations</button>
                        </form>
                    <?php 
                    }
                    ?>
                    
                </div>
            </div>
        </div>
            </div>
        </div>
    </section>


<?php include 'footer.php'; ?>