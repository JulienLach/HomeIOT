<?php include 'header.php'; ?>
<?php require_once '../controller/read-product.php';?>

<section class="contact">
    <div class="container">
        <h2>Datatest</h2>
        <ul>
            <?php foreach($products->readProduct() as $product): ?>
                <li><?php echo $product['name'] . " " . $product['price'] . "€"; ?></li>
            <?php endforeach; ?>
            <?php foreach($products->readProduct() as $product): ?>
                <li><?php echo $product['short_desc']; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>


<?php include 'footer.php'; ?>