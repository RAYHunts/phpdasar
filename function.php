<?php 
date_default_timezone_set('Asia/Jakarta');
$date = date("Y-m-d");
$time = date("H:i:s");  
$today = date("l, d F Y");  
$conn = mysqli_connect("localhost", "hunf8754_madin", "hunf8754_madin", "hunf8754_madin");


function query( $query) {
    global $conn;
    $result = mysqli_query( $conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc( $result)){
        $rows[] = $row;
    }
    return $rows;
}

function add_user($new_user) {
    global $conn;
    
    $nama = htmlspecialchars(mysqli_real_escape_string($conn, $new_user["name"]));
    $username = strtolower(stripslashes(htmlspecialchars(mysqli_real_escape_string($conn, $new_user["username"]))));
    $email = strtolower(htmlspecialchars(mysqli_real_escape_string($conn,$new_user["email"])));
    $wali_kelas = htmlspecialchars(mysqli_real_escape_string($conn,$new_user["wali_kelas"]));
    $password = mysqli_real_escape_string($conn, $new_user["password"]);
    $password2 = mysqli_real_escape_string($conn, $new_user["password2"]);

    $sameUser = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    $sameEmail = mysqli_query($conn, "SELECT email FROM user WHERE email = '$email'");

    if( mysqli_fetch_assoc($sameUser)){
        echo "<script>
        alert('username telah terdaftar');
        </script>";
        return false;
    }

    if( mysqli_fetch_assoc($sameEmail)){
        echo "<script>
        alert('Email telah terdaftar');
        </script>";
        return false;
    }

    if ($password !== $password2){
        echo "<script>
        alert('konfirmasi password tidak sesuai');
        </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);


    //upload gambar 
    $profile = upload();
    if (!$profile) {
        return false;
    }
    
    $level = "user";

    $query = "INSERT INTO user
                VALUES
                ('', '$nama', '$username','$email', '$password', '$wali_kelas', '$level',  '$profile')
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows( $conn);


}

function upload(){
    $namaFile = $_FILES['profile']['name'];
    $ukuranFile = $_FILES['profile']['size'];
    $error = $_FILES['profile']['error'];
    $tmpName = $_FILES['profile']['tmp_name'];

    if( $error === 4 ) {
        echo "
                <script>
                alert('silahkan upload profile');
                </script>";
        return false;
        
    }

    $ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'gif'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if( !in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
        alert('format gambar tidak didukung');
        </script>";
        return false;
    }

    //limit file size
    if( $ukuranFile > 2000000){
        echo "<script>
        alert('ukuran gambar tidak boleh melebihi 2MB');
        </script>";
        return false;
    }
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
    return $namaFileBaru;
    
}


function add_santri($new_user) {
    global $conn;
    $nama = htmlspecialchars(mysqli_real_escape_string($conn,$new_user["nama"]));
    $kelas = htmlspecialchars(mysqli_real_escape_string($conn,$new_user["kelas"]));

    $query = "INSERT INTO data_santri 
                    VALUES
             (null, '$nama', '$kelas','0', '0', '0', '0',  '0', '0','0', '0', '0', '0', '0','0', '0', '0', '0', '0')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows( $conn);
}

function hapus_santri($id) {
    global $conn;
    mysqli_query( $conn, "DELETE FROM data_santri WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function hapus_kelas($kelas) {
    global $conn;
    $kelas = mysqli_real_escape_string($conn,$kelas);
    mysqli_query( $conn, "DELETE FROM data_santri WHERE kelas = '$kelas'");

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;
    mysqli_query( $conn, "DELETE FROM user WHERE id = $id");

    return mysqli_affected_rows($conn);
    
}

function update_absensi($update) {
    global $conn;


    $hadir1 = htmlspecialchars($update["hadir1"]);
    $sakit1 = htmlspecialchars($update["sakit1"]);
    $izin1 = htmlspecialchars($update["izin1"]);
    $alpha1 = htmlspecialchars($update["alpha1"]);


    $query = "UPDATE data_santri SET

                hadir1 = '$hadir1',
                sakit1 = '$sakit1',
                izin1 = '$izin1',
                alpha1 = '$alpha1',
                ";


    mysqli_query($conn, $query);

    return mysqli_affected_rows( $conn);
}

function hapus_absensi($reset) {
    global $conn;
    $reset = 0;

    $query = "UPDATE data_santri SET

                hadir1 = '$reset',
                sakit1 = '$reset',
                izin1 = '$reset',
                alpha1 = '$reset',
                ";


    mysqli_query($conn, $query);

    return mysqli_affected_rows( $conn);
}


?>