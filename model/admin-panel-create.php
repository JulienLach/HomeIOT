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

        // Requête SQL pour ajouter un produit à la base de données

        // atraper les clés étangère avant de insert into le produit

        $query = 'INSERT INTO products (name, price, short_desc, description, technical_sheet) VALUES (:name, :price, :short_desc, :description, :technical_sheet)';
        $statement = $connexion->prepare($query);
        $statement->bindParam(':name', $this->name);
        $statement->bindParam(':price', $this->price);
        $statement->bindParam(':short_desc', $this->short_desc);
        $statement->bindParam(':description', $this->description);
        $statement->bindParam(':technical_sheet', $this->technical_sheet);
        $statement->execute();

        // ensuite aller choper l'id du produit que je viens d'ajouter pour pouvoir affecter l'image pour ne pas avoir l'erreur clé étrangère inconnu

        // Je peux faire plusieur queries pour ajouter les images et les catégories dans les autres tables correspondantes
        // Refaire la requette image qui ne se fait pas bien, il faut un JOIN ou autre pour dire que si cat
        // catégorie choisi = promo alors id_cat = 1, si catégorie choisi = nouveauté alors id_cat = 2, si catégorie choisi = kit/pack alors id_cat = 3
        $query = 'INSERT INTO image (image_path) VALUES (:image_path)';
        $statement = $connexion->prepare($query);
        $statement->bindParam(':image_path', $this->image_path);
        $statement->execute();
    }
}
?>