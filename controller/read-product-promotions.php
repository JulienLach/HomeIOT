<?php require_once '../model/product.php';?>

<?php
$products = new Product();
$products->setCategoryName('1');
$products = $products->readproduct();

require_once '../view/promotions.php'
?>