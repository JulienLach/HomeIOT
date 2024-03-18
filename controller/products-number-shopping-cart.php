<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once '../model/product.php';

$products = new Product();

if(isset($_SESSION['id_users'])) {
    $numberOfProducts = $products->getNumberOfProductsInShoppingCart($_SESSION['id_users']);
} else {
    $numberOfProducts = 0;
}
?>