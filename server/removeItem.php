<?php
    session_start();
    if(isset($_SESSION['cart'])){
        $data = file_get_contents("php://input");
        $objData = json_decode($data);
        $name = $objData->name;
        unset($_SESSION['cart']->$name);
        print_r($_SESSION['cart']);
    }
?>