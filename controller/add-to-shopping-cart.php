<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once '../model/product.php';

if(isset($_POST['productId'])) {
    $productId = $_POST['productId'];
    $product = new Product();
    $product->setId($productId);
    $product->addToCart($productId);

    header('Location: ../view/shopping-cart.php');
}


?>