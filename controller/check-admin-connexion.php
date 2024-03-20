<?php require_once '../model/user.php' ?>

<?php
if(isset($_SESSION['id_users'])) {
    $user = new User();
    $user->setId($_SESSION['id_users']);
    $user->checkAdminConnexion();
}

?>