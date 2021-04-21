<?php
session_start();
if(isset($_SESSION['username'])){
    $username=$_SESSION['username'];
}
else{
        echo header("location:index.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TicketKeretaku</title>
        <link rel="stylesheet" href="../indexall.css">
    </head>
    <body>
        <div class="atas">
            <a href="../index2.php"><img class="g-a" src="../atas.png" title="TicketKeretaku"></a>
            <div class="navbar">   
                <ul>
                    <li><a href="../index2.php">Home</a></li>
                        <li class="dropdown"><a href="#">Menu Informasi</a>
                            <ul class="menu-dropdown">
                                <li><a href="../jadwal.php">Jadwal Keberangkatan</a></li>
                                <li><a href="../kereta.php">Informasi Kereta</a></li>
                                <li><a href="../agen.php">Informasi Agen</a></li>
                            </ul>
                        </li>
                    <li><a href="../about.php">About Us</a></li>
                    <li><a href="../logout.php">Log Out</a></li>
                </ul>
            </div>
        </div>
        <div class="content">
            <h1>Upload File</h1>
            <form enctype="multipart/form-data" method="POST" action="hasilupload.php">
                <label>Silahkan Upload File : </label>
                <input type="file" name="fileupload"><br>
                <label>Keterangan File : </label><br>
                <textarea name="deskripsi" rows="8" cols="100"></textarea><br>
                <input type=submit value="upload">
            </form>           
        </div>
        <footer class="kaki" style="margin-top: 130px">
            <p align="center">Yusup Maulana 13.2018.1.00724</p>
        </footer>
    </body>
</html>