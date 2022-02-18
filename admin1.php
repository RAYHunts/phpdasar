<?php
session_start();
require 'sesi/sesi_admin.php';
require 'function.php';
$users = query( "SELECT * FROM user");
 
 if ( isset ($_POST["submit"])){

    if (add_user($_POST) > 0) {
        echo "
                <script>
                alert('user berhasil ditambahkan!');
                document.location.href = 'admin1.php';
                </script>
            ";
    } else {
        echo "
                <script>
                alert('user gagal ditambahkan!');
                document.location.href = 'admin1.php';
                </script>
        ";
    }
}
 ?>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="container">
        <!-- SIDE BAR START -->
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="img/rayhunts.jpg" alt="logo" />
                    <h2 class="text-muted">MADIN<span class="danger">DWK</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                </div>
            </div>

            <div class="sidebar">
                <a href="index.php">
                    <span class="material-icons-sharp">dashboard</span>
                    <h3>Dashboard</h3>
                </a>
                <?php
                if(isset($_SESSION["admin"])) : ?>
                <a class="active" href="admin1.php">
                    <span class="material-icons-sharp">admin_panel_settings</span>
                    <h3>Admin</h3>
                </a>
                <?php endif?>
                <a href="data_santri1.php">
                    <span class="material-icons-sharp">groups</span>
                    <h3>Data Santri</h3>
                </a>
                <a href="absensi.php">
                    <span class="material-icons-sharp">insights</span>
                    <h3>Absensi</h3>
                </a>
                <a href="auth/logout.php">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Log Out</h3>
                </a>
            </div>
        </aside>
        <!-- SIDE BAR END -->
        <main>
            <h1>Dashboard</h1>

            <div class="date">
                <?= $today ?>
            </div>

            <div class="recent-orders">
                <h2>Daftar User</h2>
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Wali Kelas</th>
                            <th>Profile</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ( $users as $user) : ?>
                        <tr>
                            <th><?= $i; ?></th>
                            <td class="nama"><?= $user["name"]; ?></td>
                            <td class="nama"><?= $user["email"]; ?></td>
                            <td><?= $user["username"]; ?></td>
                            <td><?= $user["wali_kelas"]; ?></td>
                            <td class="profile">
                                <img class="profile-photo" src="img/<?= $user["profile"]; ?>"
                                    alt="<?= $user["profile"]; ?>" width="100px">
                            </td>
                            <td>
                                <a href="hapus.php?id=<?= $user["id"]?>"><span
                                        class="material-icons-sharp">delete_forever</span></a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>


        </main>
        <div class="right">
            <!-- =========top=========== -->
            <div class="top">
                <button id="menu-btn">
                    <span class="material-icons-sharp">menu</span>
                </button>
                <div class="theme-toggler">
                    <span onclick="setDarkMode(false)" class="material-icons-sharp d-none">light_mode</span>
                    <span onclick="setDarkMode(true)" class="material-icons-sharp active">dark_mode</span>
                </div>
                <div class="profile">
                    <div class="info">
                        <p>Hey, <b>Daniel</b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="img/pathol.png" alt="rayhunts" />
                    </div>
                </div>
            </div>
            <!-- ===========endtop======== -->
            <div class="recent-updates">
                <h2>Tambah User</h2>
                <div class="updates">
                    <div class="update">
                        <form action="" method="POST" enctype="multipart/form-data"><input type="text" name="name"
                                placeholder="Name" required>
                            <input type="text" name="email" placeholder="Email" required><input type="text"
                                name="username" placeholder="Username" required autocomplete="off"><input type="text"
                                name="wali_kelas" placeholder="Wali Kelas" required>




                            <input type="password" name="password" placeholder="Password" required>

                            <input type="password" name="password2" placeholder="Konfirmasi Password" required>

                            <img class="profile-photo" src=" img/nophoto.png" alt="nophoto.jpg" id="profileDisplay">
                            <label for="profile" onclick="triggerClick()"><span class=" material-icons-sharp">
                                    add_circle
                                </span></label>
                            <input class="d-none" onchange="displayImage(this)" type="file" name="profile" id="profile"
                                placeholder="Profile">

                            <button type="submit" name="submit"><span class="material-icons-sharp">
                                    add_circle
                                </span></button>
                    </div>
                    </form>

                </div>
            </div>
        </div>



    </div>
    <!-- ===============main end============ -->
    <script src="darkmode.js"></script>
    <script src="index.js">
    </script>

</body>

</html>