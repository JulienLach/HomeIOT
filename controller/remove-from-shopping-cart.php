<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once '../model/product.php';

if (isset($_POST['id_product_removed'])) {
    $productId = $_POST['id_product_removed'];
    $product = new Product();
    $product->removeFromCart($productId);

    header('Location: ../view/shopping-cart.php');
}

?>