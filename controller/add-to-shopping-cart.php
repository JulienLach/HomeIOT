<?php
require_once '../model/product.php';

if(isset($_POST['productId'])) {


    header('Location: ../view/shopping-cart.php');
}


?>