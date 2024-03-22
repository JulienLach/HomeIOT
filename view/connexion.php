<?php include 'header.php'; ?>

    <!-- CONNEXION SECTION -->
    <section class="connexion">
        <div class="container">
            <div class="connexion-content">
                <div class="connexion-header">
                    <h1>Connexion</h1>
                </div>
                <div>
                    <form class="connexion-form" action="../controller/connexion.php" method="POST">
                        <label for="email">Email :</label>
                        <input class="text-form" type="email" name="user_email" id="" placeholder="Email">
                        <label for="password">Mot de passe :</label>
                        <input class="text-form" type="password" name="user_password" placeholder="Mot de passe">
                        <a class="forgot-password" href="">Mot de passe oublié ?</a>
                        <button class="connexion-btn" type="submit">Connexion</button>
                    </form>
                </div>
                <div>
                    <a class="create-account-link" href="create-account.php">Pas de compte ? Créez-en un</a>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>