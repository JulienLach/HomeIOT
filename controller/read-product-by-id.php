<?php require_once '../model/read-product.php';?>
<?php require_once '../model/database.php';?>

<?php
$product = new ReadProduct();
$product = $product->readProductById($_GET['id']);

require_once '../view/product.php'
?>