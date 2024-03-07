<?php
require_once '../model/user.php';
session_start();

$user_email = $_POST['user_email'];
$user_password = $_POST['user_password'];

$user = new User();
$user->setEmail($user_email);
$user->setPassword($user_password);

if ($user->checkUser()) {
    header('Location: ../view/index.php');
    exit;
} else {
    echo 'Mauvais identifiants';
}
?>