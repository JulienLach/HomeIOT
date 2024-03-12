<?php
require_once '../model/product.php';

if($_POST['productId']) {
    $productId = $_POST['productId'];

    $product = new Product();
    $product->setId($productId);
    $product->addToCart($productId);

    if(print_r($_SESSION['cart'])) {
        echo "Produit ajouté au panier";
    }
}


?>