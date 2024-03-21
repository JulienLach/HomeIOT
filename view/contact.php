<?php include 'header.php'; ?>


    <!-- CONTACT SECTION -->
    <section class="contact">
        <div class="container">
            <div class="contact-content">
                <div class="contact-header">
                    <h1>Contact</h1>
                </div>
                <div>
                    <form class="contact-form" action="">
                        <label for="lastname">Nom :</label>
                        <input class="text-form" type="name" name="lastname" placeholder="Nom">
                        <label for="firstname">Prénom :</label>
                        <input class="text-form" type="name" name="firstname" placeholder="Prénom">
                        <label for="email">Email :</label>
                        <input class="text-form" type="email" name="email" placeholder="Email">
                        <label for="message">Message :</label>
                        <textarea name="" id="" cols="30" rows="8" placeholder="Votre message"></textarea>
                        <button class="contact-submit-btn" type="submit">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


<?php include 'footer.php'; ?>