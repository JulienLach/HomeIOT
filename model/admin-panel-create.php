<?php
require_once 'database.php';

class Product {
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

    // Méthode pour ajouter un produit à la base de données
    public function addProduct() {
        // Connexion à la base de données
        $homeiot = new Database();
        $connexion = $homeiot->connect();

        // Atraper les clés étangère avant de insert into le produit

        // Requête SQL pour ajouter un produit à la base de données
        $query = 'INSERT INTO products (name, price, short_desc, description, technical_sheet, id_categories) VALUES (:name, :price, :short_desc, :description, :technical_sheet, :id_categories)';
        $statement = $connexion->prepare($query);
        $statement->bindParam(':name', $this->name);
        $statement->bindParam(':price', $this->price);
        $statement->bindParam(':short_desc', $this->short_desc);
        $statement->bindParam(':description', $this->description);
        $statement->bindParam(':technical_sheet', $this->technical_sheet);
        $statement->bindParam(':id_categories', $this->category_name);
        $statement->execute();

        // Attraper le dernier id de la table products créé pour ensuite faire la query
        // de l'image et insérer l'image avec la clé étrangère id du produit
        $query = 'SELECT LAST_INSERT_ID() FROM products';
        $statement = $connexion->prepare($query);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        $last_id = $result['LAST_INSERT_ID()']; // stocker le dernier id de la table products dans une variable
        // echo "ID du produit $last_id";
        // die();
    

        // attraper le dernier id de la table products pour ensuite faire la query
        // insérer dans la table image

        // ensuite aller choper l'id du produit que je viens d'ajouter pour pouvoir affecter l'image 
        // pour ne pas avoir l'erreur clé étrangère inconnu

        // Je peux faire plusieur queries pour ajouter les images et les catégories dans les autres tables correspondantes
        // Refaire la requette image qui ne se fait pas bien, il faut un JOIN ou autre pour dire que si cat
        // catégorie choisi = promo alors id_cat = 1, si catégorie choisi = nouveauté alors id_cat = 2, si catégorie choisi = kit/pack alors id_cat = 3
        $query = 'INSERT INTO image (id_product, image_path) VALUES (:id_product, :image_path)';
        $statement = $connexion->prepare($query);
        $statement->bindParam(':id_product', $last_id);
        $statement->bindParam(':image_path', $this->image_path, PDO::PARAM_LOB);
        $statement->execute();

        // Faire la query de la catégorie
        // $query = 'INSERT INTO products (id_categories) VALUES (:id_categories)';
        // $statement = $connexion->prepare($query);
        // $statement->bindParam(':id_categories', $this->category_name);
        // $statement->execute();
        // Quand je créé le produit, attraper la value de la catégorie du formulaire
        // ensuite dans le controller elle est assigné grâce à setCategoryName
        // Si catéorie = 1 alors insérer dans id_categorie 1 et le nom de la catégorie va s'afficher dans la BDD
        // pour savoir si 1 = promotions , je dois SELECT * FROM categories pour
        // savoir quel id correspond à quelle catégorie avant d'assigner la catégorie au produit
        
    }


    // Méthode pour update un produit
    // public function updateProduct() {
    //     // Connexion à la base de données
    //     $homeiot = new Database();
    //     $connexion = $homeiot->connect();

    //     // Requête SQL pour update un produit de la base de données
    //     $query = 'UPDATE products SET name = :name, price = :price, short_desc = :short_desc, description = :description, technical_sheet = :technical_sheet, id_categories = :id_categories WHERE id = :id';
    //     $statement = $connexion->prepare($query);
    //     $statement->bindParam(':name', $this->name);
    //     $statement->bindParam(':price', $this->price);
    //     $statement->bindParam(':short_desc', $this->short_desc);
    //     $statement->bindParam(':description', $this->description);
    //     $statement->bindParam(':technical_sheet', $this->technical_sheet);
    //     $statement->bindParam(':id_categories', $this->category_name);
    //     $statement->execute();

    // }

}
?>