<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once '../model/product.php';

if(isset($_POST['productId'])) {
    if (!isset($_SESSION['id_users'])) {
        header('Location: ../view/connexion.php');
        exit;
    }

    $productId = $_POST['productId'];
    $product = new Product();
    $product->addToShoppingCart($productId);

    // echo "ok";
    // die();

    header('Location: ../view/shopping-cart.php');
}
?>