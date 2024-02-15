<?php
require_once '../model/create-account.php';

if (isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['email']) && isset($_POST['password'])) {
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = new Utilisateur();
    $user->setLastname($lastname);
    $user->setFirstname($firstname);
    $user->setEmail($email);
    $user->setPassword($password);

    $user->addUser();

    header("Location: ../view/index.php");
}
?>


<!-- controleur -> modele -> controleur -> vue -->