<?php require_once '../model/product.php'?>

<?php
if(isset($_SESSION['id_users'])) {
$products = new Product();
$orders = $products->readConfirmedOrders($_SESSION['id_users']);
}
?>