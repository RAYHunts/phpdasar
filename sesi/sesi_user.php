<?php
    if( !isset($_SESSION["login"])){
    header("Location: auth/login.php");

    }    