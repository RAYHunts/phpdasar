<?php

 require 'function.php';
 $users = query( "SELECT * FROM user");

 if ( isset ($_POST["submit"])){
    if (add_user($_POST) > 0) {
        echo "pengguna berhasil ditambahkan";
    } else {
        echo "pengguna gagal ditambahkan";
    }

 }

 
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Halaman Admin</title>
</head>

<body>
    <h1>Selamat Datang User</h1>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" id="username">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="wali_kelas" class="form-label">Wali Kelas</label>
                        <input type="text" class="form-control" name="wali_kelas" id="wali_kelas">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                    <div class="mb-3">
                        <label for="password2" class="form-label">Konfirmasi Password</label>
                        <input type="password" class="form-control" name="password2" id="password2">
                    </div>
                    <div class="mb-3">
                        <label for="profile" class="form-label">Profile</label>
                        <input type="text" class="form-control" name="profile" id="profile">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col">
                <table class="table">
                    <thead>
                        <tr class="table-primary">
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Username</th>
                            <th scope="col">Wali Kelas</th>
                            <th scope="col">Profile</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ( $users as $user) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $user["name"]; ?></td>
                            <td><?= $user["email"]; ?></td>
                            <td><?= $user["username"]; ?></td>
                            <td><?= $user["wali_kelas"]; ?></td>
                            <td>
                                <img src="img/<?= $user["profile"]; ?>" alt="<?= $user["profile"]; ?>" width="100px">
                            </td>
                            <td><a href="http://"><img
                                        src="https://img.icons8.com/external-vitaliy-gorbachev-blue-vitaly-gorbachev/60/000000/external-bin-mother-earth-day-vitaliy-gorbachev-blue-vitaly-gorbachev-1.png" /></a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>