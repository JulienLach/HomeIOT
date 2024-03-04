<?php require_once '../model/product.php';?>

<?php
$product = new Product();
$product = $product->readProductById($_GET['id']);

// require_once '../view/product.php'
?>