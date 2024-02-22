<?php require_once 'database.php';?>
<?php // require_once 'admin-panel-create.php';?>

<?php class ReadProduct {
    public function readProduct() {
        $homeiot = new Database();
        $connexion = $homeiot->connect();
        $query = 'SELECT * FROM products';
        $statement = $connexion->prepare($query);
        $statement->execute();
        $products = $statement->fetchAll();
        return $products;
    }

    public function readProductById($id) {
        $homeiot = new Database();
        $connexion = $homeiot->connect();

        $query = 'SELECT * FROM products WHERE id_product = :id';
        $statement = $connexion->prepare($query);
        $statement->bindParam(':id', $id);
        $statement->execute();
        $product = $statement->fetch();
        return $product;

        // Essayer de faire une deuxième query pour récupérer l'image du produit
        $query = 'SELECT * FROM image JOIN products on image.id_product = products.id_product WHERE products.id_product = :id';
        $statement = $connexion->prepare($query);
        $statement->bindParam(':id', $id);
        $statement->execute();
        $image_path = $statement->fetch();
        return $image_path;
    }
}
?>
