<?php
session_start();
require 'sesi/sesi_user.php';
 require 'function.php';
 $users = query( "SELECT * FROM data_santri");

 if ( isset ($_POST["submit"])){
    if (add_santri($_POST) >
0) { echo "santri berhasil ditambahkan"; } else { echo "santri gagal ditambahkan"; } } ?>

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
                <a href="admin1.php">
                    <span class="material-icons-sharp">admin_panel_settings</span>
                    <h3>Admin</h3>
                </a>
                <a href="data_santri1.php">
                    <span class="material-icons-sharp">groups</span>
                    <h3>Data Santri</h3>
                </a>
                <a class="active" href="absensi.php">
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
                <h2>Recent Orders</h2>
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Hadir</th>
                            <th>Izin</th>
                            <th>Sakit</th>
                            <th>Aplha</th>
                            <th>Pecentage</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ( $users as $user) : ?>
                        <form action="" method="POST">
                            <tr>
                                <td><?= $i; ?></td>
                                <td class="nama"><?= $user["nama"]; ?></td>
                                <td>
                                    <input type="number" value="<?= $user["hadir1"]; ?>">
                                </td>
                                <td>
                                    <input type="number" value="<?= $user["izin1"]; ?>">
                                </td>
                                <td>
                                    <input type="number" value="<?= $user["sakit1"]; ?>">
                                </td>
                                <td>
                                    <input type="number" value="<?= $user["alpha1"]; ?>">
                                </td>
                                <td>
                                    100%
                                </td>
                            </tr>
                        </form>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </main>
        <!-- ===============main end============ -->
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
    </div>
    <script src="index.js"></script>
    <script src="darkmode.js"></script>
</body>

</html>