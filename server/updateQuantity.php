<?php
    session_start();
    if(isset($_SESSION['cart'])){
        $data = file_get_contents("php://input");
        $objData = json_decode($data);
        $objArray = array();
        $name = $objData->name;
        $_SESSION['cart']->$name->chosenQuantity = $objData->quantity;
        print_r($_SESSION['cart']);
    }
?>