<?php
session_start();
if( !isset($_SESSION["admin"])){
    header("Location: index.php");

} 
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
                <a class="active" href="admin1.php">
                    <span class="material-icons-sharp">admin_panel_settings</span>
                    <h3>Admin</h3>
                </a>
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
                <h2>Recent Updates</h2>
                <div class="updates">
                    <div class="update">
                        <div class="profile-photo">
                            <img src="img/barok.png" alt="" />
                        </div>
                        <div class="message">
                            <p><b>Mike</b> received his order of night lion tech gps drone</p>
                            <small class="text-muted">2 minutes ago</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="img/barok.png" alt="" />
                        </div>
                        <div class="message">
                            <p><b>Mike</b> received his order of night lion tech gps drone</p>
                            <small class="text-muted">2 minutes ago</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="img/barok.png" alt="" />
                        </div>
                        <div class="message">
                            <p><b>Mike</b> received his order of night lion tech gps drone</p>
                            <small class="text-muted">2 minutes ago</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <h1>Dashboard</h1>


            <div class="recent-orders">
                <table class="add">
                    <thead>
                        <tr>
                            <th>Tambah User</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <tr>
                                <td>
                                    <input type="text" name="name" placeholder="Name" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" name="email" placeholder="Email" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" name="username" placeholder="Username" required
                                        autocomplete="off">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" name="wali_kelas" placeholder="Wali Kelas" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="password" name="password" placeholder="Password" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="password" name="password2" placeholder="Konfirmasi Password" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="profile-photo" src="img/nophoto.jpg; ?>" alt="nophoto.jpg; ?>">
                                    <label for="profile"><span class="material-icons-sharp">
                                            add_circle
                                        </span></label>
                                    <input style="display: none; visibility: none;" type="file" name="profile"
                                        id="profile" placeholder="Profile" required onchange="getImage(this.value);">
                                    <script type="text/javascript">
                                    function getImage(imagename) {
                                        var newimg = imagename.replace(/^.*\\/, "");
                                        $('#display-image').html(newimg);
                                    }
                                    </script>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="submit" name="submit"><span class="material-icons-sharp">
                                            add_circle
                                        </span></button>
                                </td>
                            </tr>
                        </form>
                    </tbody>
                </table>
            </div>

        </div>
        <!-- ===============main end============ -->
        <script src="darkmode.js"></script>
        <script src="index.js">
        </script>

</body>

</html>