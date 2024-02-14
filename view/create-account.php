<?php include 'header.php'; ?>


    <!-- CREATE ACCOUNT SECTION -->
    <section class="create-account">
        <div class="container">
            <div class="create-account-content">
                <div class="create-account-header">
                    <h1>Créer un compte</h1>
                </div>
                <div>
                    <form class="create-account-form" action="create-account.php" method="POST">
                        <div>
                            <input class="text-form" type="text" name="lastname" id="" placeholder="Nom">
                            <input class="text-form" type="text" name="firstname" id="" placeholder="Prénom">
                        </div>
                        <input class="text-form" type="email" name="email" placeholder="Email">
                        <input class="text-form" type="password" name="password" placeholder="Mot de passe">
                        <input class="text-form" type="password" name="password" placeholder="Confirmer le mot de passe">
                        <button class="create-account-btn" type="submit">Créer mon compte</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


<?php include 'footer.php'; ?>