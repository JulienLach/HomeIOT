<?php require_once '../model/user.php'; ?>

<?php
$user_email = $_POST['user_email'];
$user_password = $_POST['user_password'];

$user = new User();
$user->setEmail($user_email);
$user->setPassword($user_password);

if ($user->checkUser() == true) {
    echo 'Connecté en tant que' . $_SESSION['user_firstname'] . ' ' . $_SESSION['user_lastname'];
} else {
    var_dump($user->checkUser());
}


?>