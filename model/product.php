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
    public $id_order;

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
    public function setIdOrder($id_order) {
        $this->id_order = $id_order;
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
    public function getIdOrder() {
        return $this->id_order;
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

    // Méthode pour ajouter un produit au panier + mettre à jour la table orders et la table Contient
    public function addToShoppingCart($id) {
        $connexion = Database::connect();
        $product = $this->readProductById($id);

        // Vérifier si l'utilisateur a déjà un panier
        $query = 'SELECT * FROM orders WHERE id_users = :id_users';
        $statement = $connexion->prepare($query);
        $statement->bindParam(':id_users', $_SESSION['id_users']);
        $statement->execute();
        $order = $statement->fetch();

        // Si l'utilisateur a déjà un panier on ajoute le produit à ce panier
        if ($order) {
            $this->id_order = $order['id_order'];
        // Si l'utilisateur n'a pas de panier on crée un nouveau panier
        } else {
            $query = 'INSERT INTO orders (quantity, total, id_users) VALUES (0, 0, :id_users)';
            $statement = $connexion->prepare($query);
            $statement->bindParam(':id_users', $_SESSION['id_users']);
            $statement->execute();

            $this->id_order = $connexion->lastInsertId();
        }

        // ensuite on ajoute le produit au panier
        $query = 'SELECT * FROM Contient WHERE id_order = :id_order AND id_product = :id_product';
        $statement = $connexion->prepare($query);
        $statement->bindParam(':id_order', $this->id_order);
        $statement->bindParam(':id_product', $product['id_product']);
        $statement->execute();
        $contains = $statement->fetch();

        // requete pour augmenter la quantité total dans la table order avant de faire le update de la quantité dans la table contient
        $queryOrder = 'UPDATE orders SET quantity = quantity + 1, total = total + :price WHERE id_order = :id_order';
        $statementOrder = $connexion->prepare($queryOrder);
        $statementOrder->bindParam(':id_order', $this->id_order);
        $statementOrder->bindParam(':price', $product['price']);
        $statementOrder->execute();

        // Si le produit est déjà dans le panier on incrémente la quantité
        if ($contains) {
            $query = 'UPDATE Contient SET quantity = quantity + 1 WHERE id_order = :id_order AND id_product = :id_product';
        } 
        // Sinon on ajoute le produit au panier
        else {
            $query = 'INSERT INTO Contient (id_order, id_product, quantity) VALUES (:id_order, :id_product, 1)';
        }

        // exécuter la requête pour ajouter le produit au panier
        $statement = $connexion->prepare($query);
        $statement->bindParam(':id_order', $this->id_order);
        $statement->bindParam(':id_product', $product['id_product']);
        $statement->execute();

        return $this->id_order;
    }



    // Méthode pour afficher les produits dans le panier en fonction de lID de l'utilisateur
    public function readProductsInShoppingCart($id_users) {
        $connexion = Database::connect();
    
        // Obtenir l'id_order correspondant à l'id_users
        $query = 'SELECT id_order FROM orders WHERE id_users = :id_users';
        $statement = $connexion->prepare($query);
        $statement->bindParam(':id_users', $id_users);
        $statement->execute();
        $order = $statement->fetch();
    
        if ($order) {
            $this->id_order = $order['id_order'];
    
            // Obtenir les produits dans le panier sous forme de tableau associatif
            $query = 'SELECT * FROM Contient WHERE id_order = :id_order';
            $statement = $connexion->prepare($query);
            $statement->bindParam(':id_order', $this->id_order);
            $statement->execute();
            $products = $statement->fetchAll(PDO::FETCH_ASSOC);
    
            if (empty($products)) {
                // Si la commande existe mais ne contient pas de produits
                echo '<div class="quantity-selector">Votre panier est vide</div>';
                return null;
            }
    
            foreach ($products as $key => $product) { // Pour chaque produit dans le tableau associatif $products
                $query = 'SELECT * FROM products WHERE id_product = :id';
                $statement = $connexion->prepare($query);
                $statement->bindParam(':id', $product['id_product']);
                $statement->execute();
                $product = $statement->fetch();
                $products[$key] = $product; // ajouter chaque information du produit au tableau associatif $products
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
    
            foreach ($products as $key => $product) {
                $query = 'SELECT quantity FROM Contient WHERE id_order = :id_order AND id_product = :id_product';
                $statement = $connexion->prepare($query);
                $statement->bindParam(':id_order', $this->id_order);
                $statement->bindParam(':id_product', $product['id_product']);
                $statement->execute();
                $quantity = $statement->fetchColumn();
                $products[$key]['quantity'] = $quantity; // Ajouter la quantité au tableau associatif
            
                // Aller chercher le total de la commande dans la table orders
                $query = 'SELECT total FROM orders WHERE id_order = :id_order';
                $statement = $connexion->prepare($query);
                $statement->bindParam(':id_order', $this->id_order);
                $statement->execute();
                $total = $statement->fetchColumn();
                // Ajouter le total au tableau associatif $products
                $products[$key]['total'] = $total;
            }
            return $products;
        } else {
            // Si la commande n'existe pas
            echo '<div class="quantity-selector">Votre panier est vide</div>';
            return null;
        }
    }


    // Méthode pour supprimer un produit du panier
    public function removeFromShoppingCart($id_product) {
        $connexion = Database::connect();
        // Obtenir l'id_order correspondant à l'id_users
        $query = 'SELECT id_order FROM orders WHERE id_users = :id_users';
        $statement = $connexion->prepare($query);
        $statement->bindParam(':id_users', $_SESSION['id_users']);
        $statement->execute();
        $order = $statement->fetch();
        $this->id_order = $order['id_order'];

        // Obtenir la quantité du produit dans le panier
        $query = 'SELECT quantity FROM Contient WHERE id_order = :id_order AND id_product = :id_product';
        $statement = $connexion->prepare($query);
        $statement->bindParam(':id_order', $this->id_order);
        $statement->bindParam(':id_product', $id_product);
        $statement->execute();
        $quantity = $statement->fetchColumn();

        // Obtenir le prix du produit
        $query = 'SELECT price FROM products WHERE id_product = :id_product';
        $statement = $connexion->prepare($query);
        $statement->bindParam(':id_product', $id_product);
        $statement->execute();
        $price = $statement->fetchColumn();

        // Mettre à jour la quantité et le total dans la table orders
        $total = $price * $quantity;
        $query = 'UPDATE orders SET quantity = quantity - :quantity, total = total - :total WHERE id_order = :id_order';
        $statement = $connexion->prepare($query);
        $statement->bindParam(':quantity', $quantity);
        $statement->bindParam(':total', $total);
        $statement->bindParam(':id_order', $this->id_order);
        $statement->execute();

        // Supprimer le produit du panier
        $query = 'DELETE FROM Contient WHERE id_order = :id_order AND id_product = :id_product';
        $statement = $connexion->prepare($query);
        $statement->bindParam(':id_order', $this->id_order);
        $statement->bindParam(':id_product', $id_product);
        $statement->execute();
    }
}
?>