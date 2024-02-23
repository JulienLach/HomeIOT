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

        // Faire une deuxième query pour récupérer l'image du produit
        $queryImage = 'SELECT image_path FROM image WHERE id_product = :id';
        $statementImage = $connexion->prepare($queryImage);
        $statementImage->bindParam(':id', $id);
        $statementImage->execute();
        $image_path = $statementImage->fetchColumn();

        // Convertir le blob en base64 pour pouvoir l'afficher dans la vue
        $image = 'data:image/jpeg;base64,' . base64_encode($image_path);

        // Comme la fonction retourne $product il faut ajouter ['image'] à $product pour pouvoir l'utiliser dans la vue
        // Je ne peux pas faire return $image et return $product
        $product['image'] = $image;

    
        return $product;
    }
}
?>
