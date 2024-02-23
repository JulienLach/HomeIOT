<?php include 'header.php'; ?>


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
                    <form class="create-account-form" action="../controller/create-account.php" method="POST">
                        <div>
                            <input class="text-form" type="text" name="lastname" id="" placeholder="Nom" value="Lach">
                            <input class="text-form" type="text" name="firstname" id="" placeholder="Prénom" value="Julien">
                        </div>
                        <input class="text-form" type="email" name="email" placeholder="Email" value="julien.lach@outlook.com">
                        <button class="create-account-btn" type="submit">Mettre à jour mes informations</button>
                    </form>
                </div>
            </div>
        </div>
            </div>
        </div>
    </section>


<?php include 'footer.php'; ?>