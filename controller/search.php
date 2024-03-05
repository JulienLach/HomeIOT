<?php require_once '../model/product.php';?>

<?php

if(isset($_POST['search'])) {
    $products = new Product();
    $products = $products->searchProduct();
}

?>