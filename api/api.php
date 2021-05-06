<?php
require '../class/function.php';
$cinetech = new cinetech();

if(isset($_GET['connexion'])){
    $user = $_GET['user'];
    $password = $_GET['password'];
    echo $cinetech->connexion($user, $password);
}

if(isset($_GET['inscription'])){
    $user = $_GET['user'];
    $email = $_GET['email'];
    $password = $_GET['password'];
    echo $cinetech->inscription($email, $user, $password);
}

?>