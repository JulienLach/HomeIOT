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
    
    // Assigner le résultat de la méthode readProductsInShoppingCart à la variable $productRead
    // var_dump($products);
    // die();    
}

// en suite lire les produits dans le panier en dehor de la condition 
// if(isset($_POST['productId'])) sinon on ne pourra pas lire les produits dans le panier
$products = $product->readProductsInShoppingCart($_SESSION['id_users']);

header('Location: ../view/shopping-cart.php');
?>