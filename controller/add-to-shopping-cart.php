<?php
session_start();
require_once '../model/product.php';

if(isset($_POST['productId'])) {
    $productId = $_POST['productId'];

    $product = new Product();
    $product->setId($productId);
    $product->addToCart($productId);

    print_r($_SESSION['cart']);

    header('Location: ../view/shopping-cart.php');
    // exit;
}


?>