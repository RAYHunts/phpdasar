<?php
session_start();
require 'sesi/sesi_user.php';
require 'function.php';

$id = $_GET["id"];

if ( hapus($id) > 0 ){
        echo "
                <script>
                alert('user berhasil dihapus!');
                document.location.href = 'admin1.php';
                </script>
            ";
    } else {
        echo "
                <script>
                alert('user gagal dihapus!');
                document.location.href = 'admin1.php';
                </script>
        ";
    }
?>