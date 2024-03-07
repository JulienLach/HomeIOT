<?php
require_once 'database.php';

class User {
    public $lastname;
    public $firstname;
    public $email;
    public $password;

    // Définir les seters du user
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
        $this->password = $password;
    }
    // Définir les geters du user
    public function getLastname() {
        return $this->lastname;
    }
    public function getFirstname() {
        return $this->firstname;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getPassword() {
        return $this->password;
    }


    // Méthode pour ajouter un utilisateur
    public function addUser() {
        // Connexion à la base de données en Singleton
        $connexion = Database::connect();
        // Requête SQL pour ajouter un utilisateur à la base de données
        $query = 'INSERT INTO users (user_lastname, user_firstname, user_email, user_password) VALUES (:user_lastname, :user_firstname, :user_email, :user_password)';
        $statement = $connexion->prepare($query);
        $statement->bindParam(':user_lastname', $this->lastname);
        $statement->bindParam(':user_firstname', $this->firstname);
        $statement->bindParam(':user_email', $this->email);
        // Hacher le mot de passe avant de l'insérer dans la base de données
        $hashedPassword = password_hash($this->password, PASSWORD_DEFAULT);
        $statement->bindParam(':user_password', $hashedPassword);
        $statement->execute();
    }

    // Méthode pour vérifier si le user est dans la BDD et si les identifiants sont corrects
    // avec fonction de vérif du password hashé
    public function checkUser() {
        $connexion = Database::connect();
        // d'abord vérifier l'email et ensuite voir si le mot de passe correspond
        $query = 'SELECT * FROM users WHERE user_email = :user_email';
        $statement = $connexion->prepare($query);
        $statement->bindParam(':user_email', $this->email);
        $statement->execute();
        $user = $statement->fetch(PDO::FETCH_ASSOC);

        if($user && password_verify($this->password, $user['user_password'])) {
            // l'utilisateur est connecté
            $_SESSION['user_firstname'] = $user['user_firstname'];
            $_SESSION['user_lastname'] = $user['user_lastname'];
            $_SESSION['user_email'] = $user['user_email'];
            return true;
        } else {
            return false;
        }
    }

    // Méthode pour update les informations de l'utilisateur
    public function updateUser() {

    }
}

?>