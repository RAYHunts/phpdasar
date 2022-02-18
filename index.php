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
                <a class="active" href="index.php">
                    <span class="material-icons-sharp">dashboard</span>
                    <h3>Dashboard</h3>
                </a>
                <?php
                if(isset($_SESSION["admin"])) : ?>
                <a href="admin1.php">
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

            <div class="insight">

                <div class="sales">
                    <span class="material-icons-sharp">bar_chart</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Sales</h3>
                            <h1>Rp20.000,-</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <div class="income">
                    <span class="material-icons-sharp">bar_chart</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Income</h3>
                            <h1>Rp20.000,-</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <div class="expenses">
                    <span class="material-icons-sharp">bar_chart</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Expenses</h3>
                            <h1>Rp20.000,-</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
            </div>

            <div class="recent-orders">
                <h2>Recent Orders</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Product Number</th>
                            <th>Paymnent</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Foldable Mini Drone</td>
                            <td>3875</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>

                        </tr>
                        <tr>
                            <td>Foldable Mini Drone</td>
                            <td>3875</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>

                        </tr>
                        <tr>
                            <td>Foldable Mini Drone</td>
                            <td>3875</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>

                        </tr>
                        <tr>
                            <td>Foldable Mini Drone</td>
                            <td>3875</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>

                        </tr>
                        <tr>
                            <td>Foldable Mini Drone</td>
                            <td>3875</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>

                        </tr>
                        <tr>
                            <td>Foldable Mini Drone</td>
                            <td>3875</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>

                        </tr>
                        <tr>
                            <td>Foldable Mini Drone</td>
                            <td>3875</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>

                        </tr>
                        <tr>
                            <td>Foldable Mini Drone</td>
                            <td>3875</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>

                        </tr>
                        <tr>
                            <td>Foldable Mini Drone</td>
                            <td>3875</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>

                        </tr>
                        <tr>
                            <td>Foldable Mini Drone</td>
                            <td>3875</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>

                        </tr>
                        <tr>
                            <td>Foldable Mini Drone</td>
                            <td>3875</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>

                        </tr>
                        <tr>
                            <td>Foldable Mini Drone</td>
                            <td>3875</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>

                        </tr>
                        <tr>
                            <td>Foldable Mini Drone</td>
                            <td>3875</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>

                        </tr>
                        <tr>
                            <td>Foldable Mini Drone</td>
                            <td>3875</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>

                        </tr>
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

                <div class="profile">
                    <div class="theme-toggler">
                        <span id="darkBtn" onclick="setDarkMode()" class="material-icons-sharp active">dark_mode</span>
                    </div>
                    <div class="info">
                        <p>Hey, <b><?= $data_user['name'] ?></b></p>
                        <small class="text-muted"><?= $data_user['wali_kelas'] ?></small>
                    </div>
                    <div class="profile-photo">
                        <img src="img/<?=$data_user["profile"] ?>" alt="rayhunts" />
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
            <div class="sales-analytics">
                <h2>Sales analytics</h2>
                <div class="icon">
                    <span class="material-icons-sharp active">shopping_cart</span>
                </div>

            </div>
        </div>
    </div>
    <script src="index.js"></script>
    <script src="darkmode.js"></script>

</body>

</html>