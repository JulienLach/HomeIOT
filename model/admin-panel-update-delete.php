<?php
require_once 'database.php';
require_once 'admin-panel-create.php';

class UpdateProduct extends Product { // On hérite de la classe Product pour pouvoir utiliser ses méthodes et ses propriétés
    
    // Méthode pour update un produit
    public function updateProduct() {
        // Connexion à la base de données
        $connexion = Database::connect();

        // Requête SQL pour mettre à jour un produit dans la base de données
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





// 






?>