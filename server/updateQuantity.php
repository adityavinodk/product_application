<?php
    session_start();
    if(isset($_SESSION['cart'])){
        $data = file_get_contents("php://input");
        $objData = json_decode($data);
        $objArray = array();
        foreach($_SESSION['cart'] as $key=>$val){
            if($key==$objData['name'] && $objData['quantity']!=0){
                $val['chosenQuantity']=$objData['quantity'];
            }
        }
    }
?>