<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once '../model/product.php';

$product = new Product();

if(isset($_POST['productId'])) {
    $product->removeFromShoppingCart($_POST['productId']);
    header('Location: ../view/shopping-cart.php');
}

$products = $product->readProductsInShoppingCart($_SESSION['id_users']);

?>