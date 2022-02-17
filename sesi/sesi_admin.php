<?php
    if( !isset($_SESSION["admin"])){
            echo"
                <script>
                alert('dilarang mengakses');
                </script>";
    header("Location: index.php");

    } 