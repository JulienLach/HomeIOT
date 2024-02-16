<?php
require_once '../model/admin-panel-update-delete.php';

if (isset($_POST['name']) && isset($_POST['price']) && isset($_POST['short_desc']) && isset($_POST['description']) && isset($_POST['technical_sheet']) && isset($_POST['category_name']) && isset($_POST['image_path'])) {

    $name = $_POST['name'];
    $price = $_POST['price'];
    $short_desc = $_POST['short_desc'];
    $description = $_POST['description'];
    $technical_sheet = $_POST['technical_sheet'];
    $category_name = $_POST['category_name'];
    $image_path = $_POST['image_path'];

    $updateProduct = new UpdateProduct();
    $updateProduct->setName($name);
    $updateProduct->setPrice($price);
    $updateProduct->setShortDesc($short_desc);
    $updateProduct->setDescription($description);
    $updateProduct->setTechnicalSheet($technical_sheet);
    $updateProduct->setCategoryName($category_name);
    $updateProduct->setImagePath($image_path);

    $updateProduct->updateProduct();

    header("Location: ../view/admin-panel-update-delete.php");
}

?>