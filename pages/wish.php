<?php
    include('../class/function.php');
    $wish = new cinetech();

    

    if(isset($_POST['show'])){
        $data = $_POST['show'];
        $id = $_COOKIE['id'];
        $json =  $selectWish = $wish->selectwish($id);
        echo json_encode($json);
    }

?>