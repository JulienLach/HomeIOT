<?php
session_start();

// Supprimer les informations d'authentification de la session
unset($_SESSION['id_users'], $_SESSION['user_lastname'], $_SESSION['user_firstname'], $_SESSION['user_email'], $_SESSION['user_password'], $_SESSION['user_role']);

header('Location: ../view/index.php');
?>