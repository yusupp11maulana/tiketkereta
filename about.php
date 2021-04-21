<?php
session_start();
if(isset($_SESSION['username'])){
    $username=$_SESSION['username'];
}
else{
        echo header("location:index.php");
    }
?>
 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>About Us</title>
        <link rel="stylesheet" href="indexall.css">
    </head>
    <body>
        <div class="atas">
            <a href="index2.php"><img class="g-a" src="atas.png" title="TicketKeretaku"></a>
            <div class="navbar">   
                <ul>
                        <li><a href="index2.php">Home</a></li>
                        <li class="dropdown"><a href="#">Menu Informasi</a>
                            <ul class="menu-dropdown">
                                <li><a href="jadwal.php">Jadwal Keberangkatan</a></li>
                                <li><a href="kereta.php">Informasi Kereta </a></li>
                                <li><a href="agen.php">Informasi Agen</a></li>
                            </ul>
                        </li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="logout.php">Log Out</a></li>
                    </ul>
            </div>
        </div>
        <div>
            <h1 style="font-family:Helvetica; color:#206D8E ">TicketKeretaku</h1>
            <p class="abut">adalah sebuah website yang menyediakan layanan pesan tiket kereta secara online. Selain itu di dalam website ini tersedia berbagai informasi seperti jadwal keberangkatan, informasi kereta dan juga informasi stasiun</p>
        </div>
        <footer class="kaki" style="margin-top: 215px">
            <p align="center">Yusup Maulana 13.2018.1.00724</p>
        </footer>
    </body>
    <style>
        .abut{width: 50%; font-family: Verdana; margin-left: 3%; margin-top: -1%}
    </style>
</html>