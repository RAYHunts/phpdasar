<?php
    if( !isset($_SESSION["admin"])){
            echo"
                <script>
                alert('dilarang mengakses');
                document.location.href = 'index.php'</script>";

    } else {
        $data_user = $_SESSION["login"];
    }