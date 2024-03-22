<?php include 'header.php'; ?>

    <!-- CREATE ACCOUNT SECTION -->
    <section class="create-account">
        <div class="container">
            <div class="create-account-content">
                <div class="create-account-header">
                    <h1>Créer un compte</h1>
                </div>
                <div>
                    <form class="create-account-form" action="../controller/create-account.php" method="POST">
                        <label for="lastname">Nom :</label>
                        <input class="text-form" type="text" name="lastname" id="" placeholder="Nom" required>
                        <label for="firstname">Prénom :</label>
                        <input class="text-form" type="text" name="firstname" id="" placeholder="Prénom" required>
                        <label for="email">Email :</label>
                        <input class="text-form" type="email" name="email" placeholder="Email" required>
                        <label for="address">Adresse :</label>
                        <input class="text-form" type="text" name="address" placeholder="Adresse" required>
                        <label for="zipcode">Code postal :</label>
                        <input class="text-form" type="text" name="zipcode" placeholder="Code postal" required>
                        <label for="city">Ville :</label>
                        <input class="text-form" type="text" name="city" placeholder="Ville" required>
                        <label for="password">Mot de passe :</label>
                        <input class="text-form" type="password" name="password" placeholder="Mot de passe" required>
                        <label for="password">Confirmer le mot de passe :</label>
                        <input class="text-form" type="password" name="password" placeholder="Confirmer le mot de passe" required>
                        <button class="create-account-btn" type="submit">Créer mon compte</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


<?php include 'footer.php'; ?>