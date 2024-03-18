<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once '../model/product.php';



header('Location: ../view/order-confirmed.php');