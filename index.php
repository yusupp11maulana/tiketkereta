<?php
session_start();
if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['pass'];
 
    // validasi login
    if($username == 'admin' AND $password == 'admin'){ 
        $_SESSION['username'] = $username;
        header('Location: index2.php');
    }
    else if($username == 'member' AND $password == 'member'){
        $_SESSION['username'] = $username;
        header('Location: index2.php');
    }
    else{
        $pesan = "Username atau Password yang anda masukkan salah";
        echo "<script type='text/javascript'>alert('$pesan');</script>";
    }
}
 
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Login</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="loginyuk.css">
    </head>

    <body>
        <div align="center">
            <div class="formku">
                <img class="g-l" src="loginku.png">
                <form method="post" action="index.php">
                    <div align="center">
                        <input type="text" name="username" class="inputan" style="margin-top: 35.82px" placeholder="Username">
                        <input type="password" name="pass" class="inputan" style="margin-top: 17px" placeholder="Password">
                        <input type="submit" name="submit" value="Login Your Account" class="log">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>