<?php
    session_start();
    if(isset($_SESSION['cart'])){
        $data = file_get_contents("php://input");
        $objData = json_decode($data);
        $objArray = array();
        foreach($objData as $key=>$val){
            $objArray[$key] = $val;
        }
        $name = $objArray['name'];
        $_SESSION['cart']->$name = $objData;
        foreach($_SESSION['cart'] as $key=>$val){
            print_r(json_encode($val));
        }
    }
    else{
        $_SESSION['cart'] = new stdClass();
    }
?>