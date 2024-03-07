<!DOCTYPE html>
<html lang="fr">

<?php
// Débug
session_start(); // à enlever
if (isset($_SESSION['user_firstname']) && isset($_SESSION['user_lastname'])) {
    echo 'Connecté en tant que : ' . $_SESSION['user_firstname'] . ' ' . $_SESSION['user_lastname']. ' |';
} else {
    echo 'Non connecté |';
}
?>
<a href="../controller/logout.php" style="color: orangered">Se déconnecter</a>
<a href="http://jserveur.local/HomeIOT/view/admin-panel-update-delete-search.php" style="font-weight: bold;">| Admin panel 🛠️</a>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- GOOGLE FONT NOTO SANS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- FAVICON -->
    <link rel="shortcut icon" href="http://jserveur.local/HomeIOT/img/favicon.ico" type="image/x-icon" />
    <!-- STYLE.CSS -->
    <link rel="stylesheet" href="http://jserveur.local/HomeIOT/css/style.css">
    <title>HomeIOT</title>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar">
        <div class="container">

            <!-- LOGO -->
            <div class=" logo">
                <a href="index.php">
                    <img src="http://jserveur.local/HomeIOT/img/HomeIOT-logos-cropped.jpeg" alt="">
                </a>
            </div>

            <!-- HAMBURGER ICONS MENU MOBILE -->
            <div>
                <img class="icon-menu" src="http://jserveur.local/HomeIOT/img/icon-menu.png" alt="">
                <img class="icon-close" src="http://jserveur.local/HomeIOT/img/icon-close.png" alt="">
            </div>

            <!--HAMBURGER MENU MOBILE-->
            <div class="mobile-menu">
                <ul>
                    <li>
                        <img class="chevron-mobile-menu" src="http://jserveur.local/HomeIOT/img/chevron-mobile-menu.png" alt="">
                        <a href="index.php">Accueil</a>
                    </li>
                    <li>
                        <img class="chevron-mobile-menu" src="http://jserveur.local/HomeIOT/img/chevron-mobile-menu.png" alt="">
                        <a href="kits-packs.php">Catégories</a>
                    </li>
                    <li>
                        <img class="chevron-mobile-menu" src="http://jserveur.local/HomeIOT/img/chevron-mobile-menu.png" alt="">
                        <a href="nouveautes.php">Nouveautés</a>
                    </li>
                    <li>
                        <img class="chevron-mobile-menu" src="http://jserveur.local/HomeIOT/img/chevron-mobile-menu.png" alt="">
                        <a href="promotions.php">Promotions</a>
                    </li>
                    <li>
                        <a href="shopping-cart.php"><button class="add-to-cart-btn"><span>0 </span>Mon
                                panier</button></a>
                    </li>
                    <li>
                        <a href="connexion.php"><button class="add-to-cart-btn">Connexion</button></a>
                    </li>
                </ul>
            </div>

            <!-- SEARCH CONTAINER -->
            <div class="search-container">
                <form action="../view/search.php" method="POST">
                    <input type="text" name="search" placeholder="Rechercher un produit" value="<?php ?>">
                    <button class="search-button" type="submit"><img style="height: 20px;" src="http://jserveur.local/HomeIOT/img/loupe.png" alt=""></button>
                </form>
            </div>

            <!-- MAIN MENU -->
            <div class="main-menu">
                <ul>
                    <li>
                        <span>0</span>
                        <img style="height: 20px;" src="http://jserveur.local/HomeIOT/img/shopping_cart_white.png" alt="">
                        <a href="shopping-cart.php">Mon panier</a>
                    </li>
                    <li>
                        <?php
                        // session_start(); à rétablir et enelver le session start du début en haut de la page
                        if(isset($_SESSION['user_firstname']) && isset($_SESSION['user_lastname'])) {
                            echo '<img style="height: 20px;" src="http://jserveur.local/HomeIOT/img/deconnexion.png" alt="">
                            <a href="../controller/logout.php">Déconnexion</a>';
                        } else {
                            echo '<img style="height: 20px;" src="http://jserveur.local/HomeIOT/img/utilisateur.png" alt="">
                            <a href="connexion.php">Connexion</a>';
                        }
                        ?>
                    </li>
                </ul>
            </div>


        </div>
    </nav>

    <!-- CATEGORIES NAVBAR -->
    <section class="categories">
        <div class="container">
            <div class="categories-menu">
                <div class="categories-links">
                    <ul>
                        <li>
                            <img src="http://jserveur.local/HomeIOT/img/white_hamburger_menu.png" alt="">
                            <a class="categories-menu-link" href="kits-packs.php">Catégories</a>
                            <!-- DROPDOWN MENU -->
                            <div class="dropdown-menu">
                                <ul>
                                    <li><img class="chevron-categories-menu" src="http://jserveur.local/HomeIOT/img/chevron-mobile-menu.png" alt=""><a
                                            href="kits-packs.php">Kits/Packs</a></li>
                                    <li><img class="chevron-categories-menu" src="http://jserveur.local/HomeIOT/img/chevron-mobile-menu.png" alt=""><a
                                            href="nouveautes.php">Nouveautés</a></li>
                                    <li><img class="chevron-categories-menu" src="http://jserveur.local/HomeIOT/img/chevron-mobile-menu.png" alt=""><a
                                            href="">Promotions</a></li>
                                </ul>
                            </div>
                            <img src="http://jserveur.local/HomeIOT/img/chevron-down-white.png" alt="">
                        </li>
                        <li>
                            <a href="nouveautes.php">Nouveautés</a>
                        </li>
                        <li>
                            <a href="promotions.php">Promotions</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>