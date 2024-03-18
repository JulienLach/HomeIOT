<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once '../model/product.php';
// echo $_SESSION['id_users'];
// die();

$product = new Product();

$products = $product->readProductsInShoppingCart($_SESSION['id_users']);



?>