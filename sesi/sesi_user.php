<?php
    if( isset($_SESSION["login"])){
        $data_user = $_SESSION["login"];
     } else{
    header("Location: auth/login.php");


    }    