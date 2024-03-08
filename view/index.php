<?php include 'header.php'; ?>

    <!-- HEADER BANNER -->
    <section class="banner">
        <div class="container">
            <div class="header-banner">
                <img class="slide active" src="http://jserveur.local/HomeIOT/img/header-banner.png" alt="">
                <img class="slide" src="http://jserveur.local/HomeIOT/img/header-banner-2.png" alt="">
            </div>
        </div>
    </section>

    <!-- MOBILE HEADER BANNER -->
    <section class="banner">
        <div class="container">
            <div class="mobile-header-banner">
                <img src="http://jserveur.local/HomeIOT/img/header-mobile-banner.png" alt="">
            </div>
        </div>
    </section>


    <!-- TOP SELLER SECTION -->

    <section class="top-sellers">
        <div class="container">

            <div class="top-sellers-header">
                <h1>Kits/Packs</h1>
            </div>

            <div class="top-sellers-items">
            <?php require_once '../controller/read-product-kits-packs-index.php';?>

                <!-- Affichage des produits avec le controlleur qui filtre la catégorie kits/packs-->
                <?php foreach ($products as $product) : ?>
                <div class="nouveautes-item product-id" data-product-id="<?php echo $product['id_product'];?>">
                    <div>
                        <img src="<?php echo $product['image']; ?>" alt="">
                    </div>
                    <div>
                        <h3>
                            <?= $product['name'] ?>
                        </h3>
                        <h3>
                            <?= $product['price'] . " €"?>
                        </h3>
                    </div>
                    <div>
                        <button class="add-to-cart-btn">Ajouter au panier</button>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>


    <!-- SMALL BANNERS SECTION -->

    <section class="small-banners">
        <div class="container">
            <div class="small-banners-content">
                <div class="small-banner-nouveautes">
                    <img src="http://jserveur.local/HomeIOT/img/nouveautes_banner.png" alt="">
                </div>
                <div class="small-banner-promotions">
                    <img src="http://jserveur.local/HomeIOT/img/promotions_banner.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- NOUVEAUTES SECTION -->

    <section class="nouveautes">
        <div class="container">

            <div class="nouveautes-header">
                <h1>Nouveautés</h1>
            </div>

            <div class="nouveautes-items">
            <?php require_once '../controller/read-product-nouveautes-index.php';?>

                <!-- Affichage des produits avec le controlleur qui filtre la catégorie nouveautés-->
                <?php foreach ($products as $product) : ?>
                <div class="nouveautes-item product-id" data-product-id="<?php echo $product['id_product'];?>">
                    <div>
                        <img src="<?php echo $product['image']; ?>" alt="">
                    </div>
                    <div>
                        <h3>
                            <?= $product['name'] ?>
                        </h3>
                        <h3>
                            <?= $product['price'] . " €"?>
                        </h3>
                    </div>
                    <div>
                        <button class="add-to-cart-btn">Ajouter au panier</button>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>


    <!-- PROMOTIONS SECTION -->

    <section class="promotions">
        <div class="container">

            <div class="promotions-header">
                <h1>Promotions</h1>
            </div>

            <div class="promotions-items">
            <?php require_once '../controller/read-product-promotions-index.php';?>

                <!-- Affichage des produits avec le controlleur qui filtre la catégorie promotions-->
                <?php foreach ($products as $product) : ?>
                <div class="promotions-item product-id" data-product-id="<?php echo $product['id_product'];?>">
                    <div>
                        <img src="<?php echo $product['image']; ?>" alt="">
                    </div>
                    <div>
                        <h3>
                            <?= $product['name'] ?>
                        </h3>
                        <h3>
                            <?= $product['price'] . " €"?>
                        </h3>
                    </div>
                    <div>
                        <button class="add-to-cart-btn">Ajouter au panier</button>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>


    <!-- CTA CONTACT SECTION -->

    <section class="cta-contact">
        <div class="container">
            <div class="cta-contact-content">
                <p>
                    Notre catalogue nous permet de répondre à vos besoins les plus précis. Si vous chercher un produit
                    en
                    partiulier, nous pouvrons vous le trouver.
                </p>
                <a href="contact.php"><button class="contact-btn">Contact</button></a>
            </div>
        </div>
    </section>


<?php include 'footer.php'; ?>