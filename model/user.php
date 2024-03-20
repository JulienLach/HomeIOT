<?php
require_once 'database.php';

class User {
    public $lastname;
    public $firstname;
    public $email;
    public $address;
    public $zipcode;
    public $city;
    public $password;
    public $id;

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
    public function setAddress($address) {
        $this->address = $address;
    }
    public function setZipcode($zipcode) {
        $this->zipcode = $zipcode;
    }
    public function setUsercity($city) {
        $this->city = $city;
    }
    public function setPassword($password) {
        $this->password = $password;
    }
    public function setId($id) {
        $this->id = $id;
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
    public function getAddress() {
        return $this->address;
    }
    public function getZipcode() {
        return $this->zipcode;
    }
    public function getCity() {
        return $this->city;
    }
    public function getPassword() {
        return $this->password;
    }
    public function getId() {
        return $this->id;
    }

    // Méthode pour ajouter un utilisateur
    public function addUser() {
        // Connexion à la base de données en Singleton
        $connexion = Database::connect();
        // Requête SQL pour ajouter un utilisateur à la base de données
        $query = 'INSERT INTO users (user_lastname, user_firstname, user_email, user_address, user_zipcode, user_city ,user_password) VALUES (:user_lastname, :user_firstname, :user_email, :user_address, :user_zipcode, :user_city, :user_password)';
        $statement = $connexion->prepare($query);
        $statement->bindParam(':user_lastname', $this->lastname);
        $statement->bindParam(':user_firstname', $this->firstname);
        $statement->bindParam(':user_email', $this->email);
        $statement->bindParam(':user_address', $this->address);
        $statement->bindParam(':user_zipcode', $this->zipcode);
        $statement->bindParam(':user_city', $this->city);
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
            $_SESSION['user_address'] = $user['user_address'];
            $_SESSION['user_zipcode'] = $user['user_zipcode'];
            $_SESSION['user_city'] = $user['user_city'];
            $_SESSION['id_users'] = $user['id_users'];
            return true;
        } else {
            return false;
        }
    }

    // Méthode pour update les informations de l'utilisateur en fonction de son id
    public function updateUser() {
        $connexion = Database::connect();
        $query = 'UPDATE users SET user_lastname = :user_lastname, user_firstname = :user_firstname, user_email = :user_email, user_address = :user_address, user_zipcode = :user_zipcode, user_city = :user_city WHERE id_users = :id_users';
        $statement = $connexion->prepare($query);
        $statement->bindParam(':user_lastname', $this->lastname);
        $statement->bindParam(':user_firstname', $this->firstname);
        $statement->bindParam(':user_email', $this->email);
        $statement->bindParam(':user_address', $this->address);
        $statement->bindParam(':user_zipcode', $this->zipcode);
        $statement->bindParam(':user_city', $this->city);
        $statement->bindParam(':id_users', $this->id);
        $statement->execute();
    }

    // Méthode pour vérifer que le User est admin ou non
    public function checkAdminConnexion() {
        // requete pour chercher si le user est admin
        $connexion = Database::connect();
        $query = 'SELECT * FROM users WHERE id_users = :id_users AND is_admin = 1';
        $statement = $connexion->prepare($query);
        $statement->bindParam(':id_users', $_SESSION['id_users']);
        $statement->execute();
        $user = $statement->fetch(PDO::FETCH_ASSOC);
        if($user) {
            return true;
        } else {
            return false;
        }
    }
}

?>