<?php
    include('../class/function.php');
    $wish = new cinetech();

    

    if(isset($_POST['show'])){
        $data = $_POST['show'];
        $json =  $selectWish = $wish->selectwish(5);
        echo json_encode($json);
    }

?>