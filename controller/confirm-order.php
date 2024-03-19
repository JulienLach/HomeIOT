<?php require_once '../model/product.php'; ?>
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if(isset($_SESSION['id_users'])) {
    $product = new Product();
    $product->confirmOrder($_SESSION['id_users']);

    $orderId = $product->getIdOrder();


    header('Location: ../view/order-confirmed.php?order_id=' . $orderId);
    exit;
}

?>