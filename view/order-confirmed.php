<?php include 'header.php'; ?>

    <!-- ORDER-CONFIRMED SECTION -->
    <section class="order-confirmed">
        <div class="container">
            <div class="order-confirmed-content">
                <div class="order-confirmed-header">
                    <h1>Commande validée</h1>
                </div>
                <div class="order-confirmed-infos">
                    <div>
                        <h3>Votre commande a été enregistrée.</h3>
                    </div>
                    <div>
                        <p>Numéro de commande :<span> <?= $_GET['order_id'];?></span> </p>
                    </div>
                    <div>
                        <p>Merci pour votre commande ! Elle est bien enregistrée, nous la préparons.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php include 'footer.php'; ?>