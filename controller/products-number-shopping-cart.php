<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once '../model/product.php';

$products = new Product();

$numberOfProducts = $products->getNumberOfProductsInShoppingCart($_SESSION['id_users']);
?>