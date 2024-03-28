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
                        <input class="text-form" type="text" name="lastname" placeholder="Nom" required pattern="^[a-zA-Z\s]*$">
                        <label for="firstname">Prénom :</label>
                        <input class="text-form" type="text" name="firstname" placeholder="Prénom" required pattern="^[a-zA-Z\s]*$">
                        <label for="email">Email :</label>
                        <input class="text-form" type="email" name="email" placeholder="Email" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}">
                        <label for="address">Adresse :</label>
                        <input class="text-form" type="text" name="address" placeholder="Adresse" required pattern="">
                        <label for="zipcode">Code postal :</label>
                        <input class="text-form" type="text" name="zipcode" placeholder="Code postal" required pattern="\d{5}">                        
                        <label for="city">Ville :</label>
                        <input class="text-form" type="text" name="city" placeholder="Ville" required pattern="^[a-zA-Z]+[\s\-a-zA-Z]*$">                        
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