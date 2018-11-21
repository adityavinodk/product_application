<?php
    session_start();
    if(isset($_SESSION['cart'])){
        print_r(json_encode($_SESSION['cart']));
    }
    else{
        echo "No Cart";
    }
?>