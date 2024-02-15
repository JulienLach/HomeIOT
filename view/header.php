<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- GOOGLE FONT NOTO SANS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- FAVICON -->
    <link rel="shortcut icon" href="http://jserveur.local/HomeIOT/HomeIOT-logos/favicon.ico" type="image/x-icon" />
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
                    <img src="http://jserveur.local/HomeIOT/HomeIOT-logos/HomeIOT-logos-cropped.jpeg" alt="">
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
                        <a href="index.php">Acceuil</a>
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
                <form action="">
                    <input type="text" placeholder="" name="search">
                    <a href="search.php"><img style="height: 20px;" src="http://jserveur.local/HomeIOT/img/loupe.png" alt=""></a>
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
                        <img style="height: 20px;" src="http://jserveur.local/HomeIOT/img/utilisateur.png" alt="">
                        <a href="connexion.php">Connexion</a>
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