<?php require_once '../model/product.php';?>

<?php
$products = new Product();
$products->setCategoryName('2');
$products = $products->readproduct();

require_once '../view/nouveautes.php'
?>