<?php
    session_start();
    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $objArray = array();
        foreach($_SESSION['cart'] as $key=>$val){
            if($key != $name) $objArray[$key] = $val;
            print_r($key); echo "\n";
            print_r($val); echo "\n";
        }
        session_unset();
        // session_start();
        $_SESSION['cart'] = new stdClass();
        foreach($objArray as $key=>$val){
            $_SESSION['cart']->$key=$val;
            // print_r($key.'\n');  
        }
        // unset($_SESSION['cart']->$name);
    }
    if(isset($_POST['name'])){

    }
?>