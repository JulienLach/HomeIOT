<?php
require_once '../model/product.php';

if (isset($_POST['name']) && isset($_POST['price']) && isset($_POST['short_desc']) && isset($_POST['description']) && isset($_POST['technical_sheet']) && isset($_POST['category_name']) && isset($_FILES['image_path'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $short_desc = $_POST['short_desc'];
    $description = $_POST['description'];
    $technical_sheet = $_POST['technical_sheet'];
    $category_name = $_POST['category_name'];
    $image_path = file_get_contents($_FILES['image_path']['tmp_name']); 
    $product = new Product();
    $product->setName($name);
    $product->setPrice($price);
    $product->setShortDesc($short_desc);
    $product->setDescription($description);
    $product->setTechnicalSheet($technical_sheet);
    $product->setCategoryName($category_name);
    $product->setImagePath($image_path);
    $product->addProduct();

    header("Location: ../view/admin-panel-create.php");
}






?>