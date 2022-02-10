<?php   
$conn = mysqli_connect("localhost", "root", "", "madin");


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
    
    $nama = $new_user["name"];
    $username = $new_user["username"];
    $email = $new_user["email"];
    $wali_kelas = $new_user["wali_kelas"];
    $password = $new_user["password"];
    $profile = $new_user["profile"];
    $level = "user";

    $query = "INSERT INTO user
                VALUES
                ('', '$nama', '$username','$email', '$password', '$wali_kelas', '$level',  '$profile')
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows( $conn);
}


function add_santri($new_user) {
    global $conn;
    
    $nama = $new_user["nama"];

    $query = "INSERT INTO data_santri
                VALUES
                ('', '$nama', '','', '', '', '',  '', '','', '', '', '', '','', '', '', '', '')
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows( $conn);
}

?>