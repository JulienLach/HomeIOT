<?php
require_once '../model/user.php';

session_start(); // Si je ne refais pas un session_start() les infos ne sont pas mises à jour

if (isset($_POST['id_users']) && isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['zipcode']) && isset($_POST['city'])) {
    $id_users = $_POST['id_users'];
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $zipcode = $_POST['zipcode'];
    $city = $_POST['city'];

    $user = new User();
    $user->setId($id_users);
    $user->setLastname($lastname);
    $user->setFirstname($firstname);
    $user->setEmail($email);
    $user->setAddress($address);
    $user->setZipcode($zipcode);
    $user->setUsercity($city);
    $user->updateUser();

    // Mettre à jour les informations de session de l'utilisateur après le update du User
    $_SESSION['id_users'] = $id_users;
    $_SESSION['user_lastname'] = $lastname;
    $_SESSION['user_firstname'] = $firstname;
    $_SESSION['user_email'] = $email;
    $_SESSION['user_address'] = $address;
    $_SESSION['user_zipcode'] = $zipcode;
    $_SESSION['user_city'] = $city;

    header('Location: ../view/index.php');
    exit;
}

?>