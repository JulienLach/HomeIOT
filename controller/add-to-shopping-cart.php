<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once '../model/product.php';
// echo $_SESSION['id_users'];
// die();

$product = new Product();

// d'abord ajouter un produit dans le panier
if(isset($_POST['productId'])) {
    $product->addToShoppingCart($_POST['productId']);

    // var_dump($products);
    // die();   
    // mettre le header dans le if avant de lire les produits dans le panier
    // sinon erreur de header
    header('Location: ../view/shopping-cart.php');

}


// en suite lire les produits dans le panier en dehor de la condition 
// if(isset($_POST['productId'])) sinon on ne pourra pas lire les produits dans le panier
$products = $product->readProductsInShoppingCart($_SESSION['id_users']);

?>