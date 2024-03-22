<?php require_once '../model/product.php'?>

<?php
$products = new Product();
$products = $products->readAllProducts();


require_once '../view/all-products.php'

?>