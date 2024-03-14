<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once '../model/product.php';
// echo $_SESSION['id_users'];
// die();
if(isset($_POST['productId'])) {
    $product = new Product();
    $product->addToShoppingCart($_POST['productId']);
    
    header('Location: ../view/shopping-cart.php');
}
?>