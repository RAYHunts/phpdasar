<?php
session_start();
if(isset($_SESSION['login'])){
    header("Location: ../index.php");
}

require '../function.php';

if( isset($_POST["login"])){

    $username = $_POST["username"];
    $email= $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' OR email = '$email'");

    if( mysqli_num_rows($result) === 1) {

        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])){
            //set session
            if($row["level"] == "admin"){
                $_SESSION['admin'] = true;
            } 
                
            $_SESSION['login'] = true;
            
            
            header("Location: ../index.php");
            exit;
        }

    }

    $error = true;
}


?>


<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Login Form | CodingLab</title> -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <div class="title"><span>Login Form</span></div>

            <form action="" method="POST">
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" placeholder="Email or Username" required>
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="pass"><?php if(isset($error)) :?>
                    <p class="invalid">username / password salah</p>
                    <?php endif ?>
                </div>
                <div class="row button">
                    <input type="submit" name="login" value="Login">
                </div>
            </form>
        </div>
    </div>

</body>

</html>