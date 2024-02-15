<?php
require_once 'database.php';

class Utilisateur {
    public $lastname;
    public $firstname;
    public $email;
    public $password;

    // Définir les données de l'utilisateur
    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }
    public function setFirstname($firstname) {
        $this->firstname = $firstname;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    public function setPassword($password) {
        $this->password = password_hash($password, PASSWORD_DEFAULT); // hacher le mot de passe
    }

    // Méthode pour ajouter un utilisateur à la base de données
    public function addUser() {
        // Connexion à la base de données 
        $homeiot = new Database(); // Créer une nouvelle instance de la classe Database
        $connexion = $homeiot->connect(); // Appeler la méthode connect de la classe Database pour se connecter à la base de données ici $connexion est un objet PDO

        // Requête SQL pour ajouter un utilisateur à la base de données
        $query = 'INSERT INTO users (user_lastname, user_firstname, user_email, user_password) VALUES (:user_lastname, :user_firstname, :user_email, :user_password)';
        $statement = $connexion->prepare($query);
        $statement->bindParam(':user_lastname', $this->lastname);
        $statement->bindParam(':user_firstname', $this->firstname);
        $statement->bindParam(':user_email', $this->email);
        $statement->bindParam(':user_password', $this->password);
        $statement->execute();
    }
}

?>