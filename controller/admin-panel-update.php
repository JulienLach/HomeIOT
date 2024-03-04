<?php require_once '../model/product.php'; ?>


<?php
if(isset($_POST['productId'])) {
    $product = new Product();
    $product->setId($_POST['productId']);
    $product->setName($_POST['name']);
    $product->setPrice($_POST['price']);
    $product->setShortDesc($_POST['short_desc']);
    $product->setDescription($_POST['description']);
    $product->setTechnicalSheet($_POST['technical_sheet']);
    $product->setCategoryName($_POST['category_name']);
    // $product->setImagePath($_POST['image_path']);
    $product = $product->updateProduct();
}

header("Location: ../view/nouveautes.php");

?>