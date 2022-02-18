<?php
    if( isset($_SESSION["login"])){
        $data_user = $_SESSION["login"];
     } else{
         echo "
         <script>
         alert('silahkan login terlebih dahulu');
         document.location.href = 'auth/login.php'</script>";


    }    