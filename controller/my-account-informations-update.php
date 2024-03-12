<?php
require_once '../model/user.php';

session_start(); // Si je ne refais pas un session_start() les infos ne sont pas mises à jour

if (isset($_POST['id_users']) && isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['email'])) {
    $id_users = $_POST['id_users'];
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];

    $user = new User();
    $user->setId($id_users);
    $user->setLastname($lastname);
    $user->setFirstname($firstname);
    $user->setEmail($email);
    $user->updateUser();

    // Mettre à jour les informations de session de l'utilisateur après le update du User
    $_SESSION['id_users'] = $id_users;
    $_SESSION['user_lastname'] = $lastname;
    $_SESSION['user_firstname'] = $firstname;
    $_SESSION['user_email'] = $email;

    header('Location: ../view/index.php');
    exit;
}

?>