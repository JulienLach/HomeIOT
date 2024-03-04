<?php require_once 'database.php';?>

<?php class Product {
    public $name;
    public $price;
    public $short_desc;
    public $description;
    public $technical_sheet;
    public $category_name;
    public $image_path;

    public function setName($name) {
        $this->name = $name;
    }
    public function setPrice($price) {
        $this->price = $price;
    }
    public function setShortDesc($short_desc) {
        $this->short_desc = $short_desc;
    }
    public function setDescription($description) {
        $this->description = $description;
    }
    public function setTechnicalSheet($technical_sheet) {
        $this->technical_sheet = $technical_sheet;
    }
    public function setCategoryName($category_name) {
        $this->category_name = $category_name;
    }
    public function setImagePath($image_path) {
        $this->image_path = $image_path;
    }
    public function getName() {
        return $this->name;
    }
    public function getPrice() {
        return $this->price;
    }
    public function getShortDesc() {
        return $this->short_desc;
    }
    public function getDescription() {
        return $this->description;
    }
    public function getTechnicalSheet() {
        return $this->technical_sheet;
    }
    public function getCategoryName() {
        return $this->category_name;
    }
    public function getImagePath() {
        return $this->image_path;
    }

    // Méthode pour ajouter un produit
    public function addProduct() {
        $connexion = Database::connect();
        $query = 'INSERT INTO products (name, price, short_desc, description, technical_sheet, id_categories) VALUES (:name, :price, :short_desc, :description, :technical_sheet, :id_categories)';
        $statement = $connexion->prepare($query);
        $statement->bindParam(':name', $this->name);
        $statement->bindParam(':price', $this->price);
        $statement->bindParam(':short_desc', $this->short_desc);
        $statement->bindParam(':description', $this->description);
        $statement->bindParam(':technical_sheet', $this->technical_sheet);
        $statement->bindParam(':id_categories', $this->category_name);
        $statement->execute();

        $query = 'SELECT LAST_INSERT_ID() FROM products';
        $statement = $connexion->prepare($query);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        $last_id = $result['LAST_INSERT_ID()'];

        $query = 'INSERT INTO image (id_product, image_path) VALUES (:id_product, :image_path)';
        $statement = $connexion->prepare($query);
        $statement->bindParam(':id_product', $last_id);
        $statement->bindParam(':image_path', $this->image_path, PDO::PARAM_LOB);
        $statement->execute();
    }

    // Méthode pour afficher tous les produits avec leurs images toutes les catégories
    public function readProduct() {
        $connexion = Database::connect();
        $query = 'SELECT * FROM products';
        $statement = $connexion->prepare($query);
        $statement->execute();
        $products = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($products as $key => $product) {
            $query = 'SELECT image_path FROM image WHERE id_product = :id';
            $statement = $connexion->prepare($query);
            $statement->bindParam(':id', $product['id_product']);
            $statement->execute();
            $image_path = $statement->fetchColumn();
            $image = 'data:image/jpeg;base64,' . base64_encode($image_path);
    
            $products[$key]['image'] = $image;
        }
        return $products;
    }

    // Méthode pour lire un produit unique avec son ID stocké dans un $_GET
    public function readProductById($id) {
        $connexion = Database::connect();
        $query = 'SELECT * FROM products WHERE id_product = :id';
        $statement = $connexion->prepare($query);
        $statement->bindParam(':id', $id);
        $statement->execute();
        $product = $statement->fetch(); // fetch retourne un tableau associatif

        // Deuxième query pour récupérer l'image du produit
        $query = 'SELECT image_path FROM image WHERE id_product = :id';
        $statementImage = $connexion->prepare($query);
        $statementImage->bindParam(':id', $id);
        $statementImage->execute();
        $image_path = $statementImage->fetchColumn(); // fetchColumn() retourne une chaîne de caractères
        // Convertir le blob en base64 pour pouvoir l'afficher dans la vue
        $image = 'data:image/jpeg;base64,' . base64_encode($image_path);
        // Comme la fonction retourne $product il faut ajouter ['image'] à $product pour pouvoir l'utiliser dans la vue
        // Je ne peux pas faire return $image et return $product
        $product['image'] = $image;

        return $product;
    }

    // Méthode pour update un produit
    public function updateProduct() {
        $connexion = Database::connect();
        // Requête SQL pour mettre à jour un produit
        $query = 'UPDATE products SET name = :name, price = :price, short_desc = :short_desc, description = :description, technical_sheet = :technical_sheet, id_categories = :id_categories, image_path = :image_path WHERE id = :id';
        $statement = $connexion->prepare($query);
        $statement->bindParam(':name', $this->name);
        $statement->bindParam(':price', $this->price);
        $statement->bindParam(':short_desc', $this->short_desc);
        $statement->bindParam(':description', $this->description);
        $statement->bindParam(':technical_sheet', $this->technical_sheet);
        $statement->bindParam(':id_categories', $this->category_name);
        $statement->bindParam(':image_path', $this->image_path);
        $statement->execute();
    }
}
?>