<?php require_once '../model/product.php'; ?>

<?php

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $product = new Product();
    $product = $product->readProductById($id);
}


?>