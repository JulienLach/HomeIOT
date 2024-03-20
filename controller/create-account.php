<?php
require_once '../model/user.php';

if (isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['address']) && isset($_POST['zipcode']) && isset($_POST['city'])) {
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $zipcode = $_POST['zipcode'];
    $city = $_POST['city'];
    $password = $_POST['password'];

    $user = new User();
    $user->setLastname($lastname);
    $user->setFirstname($firstname);
    $user->setEmail($email);
    $user->setAddress($address);
    $user->setZipcode($zipcode);
    $user->setUsercity($city);
    $user->setPassword($password);

    $user->addUser();

    header("Location: ../view/index.php");
}
?>