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

    // Gestion de l'image
    $image_path = null; // initialiser la variable image_path à null
    if(isset($_FILES['image_path']['tmp_name']) && $_FILES['image_path']['tmp_name'] != '') {
        $image_path = file_get_contents($_FILES['image_path']['tmp_name']);
    }
    $product->setImagePath($image_path);
    $product = $product->updateProduct();
}

header("Location: ../view/index.php");

?>