<?php include 'header.php'; ?>
<?php require_once '../controller/read-product.php';?>

<section class="contact">
    <div class="container">
        <h2>Datatest</h2>
        <?php foreach($products->readProduct() as $product) 
            echo $product['name'];
        ?>

    </div>
</section>


<?php include 'footer.php'; ?>