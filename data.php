<?php include 'view/header.php'; ?>

<?php
// Récupérer les données du formulaire de connexion et les afficher
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
}

if (isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['email']) && isset($_POST['password'])){
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
}

if (isset($_POST['productName']) && isset($_POST['productPrice']) && isset($_POST['categorieOption']) && isset($_POST['filename'])){
  $productName = $_POST['productName'];
  $productPrice = $_POST['productPrice'];
  $categorieOption = $_POST['categorieOption'];
  $filename = $_POST['filename'];
}

if (isset($_POST['productId']) && isset($_POST['productName']) && isset($_POST['productPrice']) && isset($_POST['categorieOption']) && isset($_POST['filename'])){
  $productId = $_POST['productId'];
  $productName = $_POST['productName'];
  $productPrice = $_POST['productPrice'];
  $categorieOption = $_POST['categorieOption'];
  $filename = $_POST['filename'];
}

?>

<section class="about">
      <div class="container">
        <div class="about-content">

          <div class="about-header">
            <h4>$_POST Formulaire connexion</h4>
          </div>
          <div class="about-infos">
            <p>
                <?php
                echo "Email: " . $email . "<br>";
                echo "Password: " . $password . "<br>";
                ?>
            </p>
          </div>

          <div class="about-header">
            <h4>$_POST Formulaire inscription</h4>
          </div>
          <div class="about-infos">
            <p>
                <?php
                echo "Lastname: " . $lastname . "<br>";
                echo "Firstname: " . $firstname . "<br>";
                echo "Email: " . $email . "<br>";
                echo "Password: " . $password . "<br>";
                ?>
            </p>
          </div>

          <div class="about-header">
            <h4>$_POST Formulaire Créer un produit</h4>
          </div>
          <div class="about-infos">
            <p>
                <?php
                echo "Nom du produit: " . $productName . "<br>";
                echo "Prix: " . $productPrice . " €". "<br>";
                echo "Categorie: " . $categorieOption . "<br>";
                echo "Nom du fichier: " . $filename . "<br>";
                ?>
            </p>
          </div>

          <div class="about-header">
            <h4>$_POST Formulaire Modifier/Supprimer un produit</h4>
          </div>
          <div class="about-infos">
            <p>
                <?php
                echo "ID du produit: " . $productId . "<br>";
                echo "Nom du produit: " . $productName . "<br>";
                echo "Prix: " . $productPrice . " €". "<br>";
                echo "Categorie: " . $categorieOption . "<br>";
                echo "Nom du fichier: " . $filename . "<br>";
                ?>
            </p>
          </div>

        </div>
      </div>
    </section>

<?php include 'view/footer.php'; ?>
