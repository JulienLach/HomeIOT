<?php require_once 'database.php';?>

<?php class Product {
    public $id;
    public $name;
    public $price;
    public $short_desc;
    public $description;
    public $technical_sheet;
    public $category_name;
    public $image_path;

    public function setId($id) {
        $this->id = $id;
    }
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
    public function getId() {
        return $this->id;
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

    // Méthode pour afficher tous les produits avec leurs images et toutes les catégories
    public function readProduct() {
        $connexion = Database::connect();
        $query = 'SELECT * FROM products WHERE id_categories = :id_categories';
        $statement = $connexion->prepare($query);
        $statement->bindParam(':id_categories', $this->category_name);
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

        // Query pour récupérer la catégorie
        $query = 'SELECT category_name FROM categories WHERE id_categories = :id';
        $statementCategory = $connexion->prepare($query);
        $statementCategory->bindParam(':id', $product['id_categories']);
        $statementCategory->execute();
        $category_name = $statementCategory->fetchColumn();
        $product['category_name'] = $category_name;

        // Troisème query pour récupérer l'image du produit
        $query = 'SELECT image_path FROM image WHERE id_product = :id';
        $statementImage = $connexion->prepare($query);
        $statementImage->bindParam(':id', $id);
        $statementImage->execute();
        $image_path = $statementImage->fetchColumn(); // fetchColumn() retourne une chaîne de caractères
        // Convertir le blob en base64 pour pouvoir l'afficher dans la vue
        $image = 'data:image/jpeg;base64,' . base64_encode($image_path);
        // Comme la fonction retourne $product il faut ajouter ['image'] à $product pour pouvoir l'utiliser dans la vue
        // Je ne peux pas faire return $image et return $product
        // on ajoute la clé 'image' au tableau associatif $product
        $product['image'] = $image;

        return $product;
    }

    // Méthode pour update un produit
    public function updateProduct() {
        $connexion = Database::connect();
        // Requête SQL pour mettre à jour un produit
        $query = 'UPDATE products SET name = :name, price = :price, short_desc = :short_desc, description = :description, technical_sheet = :technical_sheet, id_categories = :id_categories WHERE id_product = :id';
        $statement = $connexion->prepare($query);
        $statement->bindParam(':id', $this->id);
        $statement->bindParam(':name', $this->name);
        $statement->bindParam(':price', $this->price);
        $statement->bindParam(':short_desc', $this->short_desc);
        $statement->bindParam(':description', $this->description);
        $statement->bindParam(':technical_sheet', $this->technical_sheet);
        $statement->bindParam(':id_categories', $this->category_name);
        $statement->execute();

    // TEST Requete changement image, commenter pour modifier le reste
    // Ajouter le update de l'image dans une query séparée seulement si une nouvelle image a été uploadée
        if($this->image_path != null) {
            $query = 'UPDATE image SET image_path = :image_path WHERE id_product = :id';
            $statement = $connexion->prepare($query);
            $statement->bindParam(':id', $this->id);
            $statement->bindParam(':image_path', $this->image_path, PDO::PARAM_LOB);
            $statement->execute();
        }
    }
    // La requete update de l'image est ignorée si l'image n'a pas été uploadée donc si $this->image_path == null

    // Méthode pour rechercher un produit pour le UPDATE/DELETE
    public function searchProduct() {
        if(isset($_POST['search'])) {
            $connexion = Database::connect();
            $query = 'SELECT * FROM products WHERE name LIKE :search';
            $statement = $connexion->prepare($query);
            $statement->bindValue(':search', '%' . $_POST['search'] . '%');
            $statement->execute();
            $products = $statement->fetchAll(PDO::FETCH_ASSOC);
            if(empty($products)) {
                echo 'Aucun produit trouvé';
            }
            foreach ($products as $key => $product) {
                $query = 'SELECT image_path FROM image WHERE id_product = :id';
                $statement = $connexion->prepare($query);
                $statement->bindParam(':id', $product['id_product']);
                $statement->execute();
                $image_path = $statement->fetchColumn();
                $image = 'data:image/jpeg;base64,' . base64_encode($image_path);
        
                $products[$key]['image'] = $image; // Ajouter l'image au tableau associatif
            }
            return $products;
        }
    }

    public function deleteProduct() {
        $connexion = Database::connect();
        // d'abord supprimer l'image
        $query = 'DELETE FROM image WHERE id_product = :id';
        $statement = $connexion->prepare($query);
        $statement->bindParam(':id', $this->id);
        $statement->execute();

        $query = 'DELETE FROM products WHERE id_product = :id';
        $statement = $connexion->prepare($query);
        $statement->bindParam(':id', $this->id);
        $statement->execute();
    }

    // Méthode pour ajouter un produit au panier avec appel à la méthode readProductById
    public function addToCart($id) {
        $product = $this->readProductById($id);
        if(!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }
        array_push($_SESSION['cart'], $product);
    }

    // Méthode pour retirer un produit du panier
    public function removeFromCart($id) {
        $index = array_search($id, array_column($_SESSION['cart'], 'id_product'));
        unset($_SESSION['cart'][$index]);
    }
}
?>