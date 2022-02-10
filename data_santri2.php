<?php

 require 'function.php';
 $users = query( "SELECT * FROM data_santri");

 if ( isset ($_POST["submit"])){
    if (add_santri($_POST) > 0) {
        echo "santri berhasil ditambahkan";
    } else {
        echo "santri gagal ditambahkan";
    }

 }

 
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
      rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="img/rayhunts.jpg" alt="logo">
                    <h2 class="text-muted">MADIN<span class="danger">DWK</span></h2>
                </div>
                <div class="close" id="close-btn">
                <span class="material-icons-sharp">close</span>
                </div>
            </div>

            <div class="sidebar">
                <a href="#">
                <span class="material-icons-sharp">dashboard</span>
                <h3>Dashboard</h3>
                </a>
                <a href="#">
                <span class="material-icons-sharp">admin_panel_settings</span>
                <h3>Admin</h3>
                </a>
                <a href="#">
                <span class="material-icons-sharp">groups</span>
                <h3>Data Santri</h3>
                </a>
                <a href="#">
                <span class="material-icons-sharp">insights</span>
                <h3>Absensi</h3>
                </a>
                <a href="#">
                <span class="material-icons-sharp">logout</span>
                <h3>Log Out</h3>
                </a>
            </div>
        </aside>
    </div>
</body>
</html>