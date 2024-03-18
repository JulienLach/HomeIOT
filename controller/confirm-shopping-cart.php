<?php require_once '../model/product.php'; ?>
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if(isset($_SESSION['id_users'])) {
    $product = new Product();
    $product = $product->confirmShoppingCart($_SESSION['id_users']);
    header('Location: ../view/order.php');
    exit();
}

?>