<?php require_once '../model/product.php'; ?>


<?php
if(isset($_POST['productId'])) {
    $product = new Product();
    $product->setId($_POST['productId']);
    $product = $product->deleteProduct();
}

header("Location: ../view/nouveautes.php");

?>