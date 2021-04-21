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
    <style>
    .tagen{background-color: rgb(23, 23, 75); border-radius: 5px; }
    .tagen th,.tagen tbody{background-color: thistle;}
    .tambahku{border-radius: 5px; font-size: 15px; margin-top: 20px; width: 140px; height: 30px; font-family: 'Gill Sans MT'; background-color: #206D8E; color: white}
    .tambahku:hover{color: midnightblue; background-color: rgb(43, 134, 253)}
    .btn{text-decoration: none;}
    .btn-delete{color:red}
    .btn-edit{color:blue}
</style>
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
        <div align="center">
            <div class="content3">
                <?php
                    include '../models/konek.php';
                    $format = array('png','jpg');
                    $nama = $_FILES['fileupload']['name'];
                    $desc = $_POST['deskripsi'];
                    $x = explode('.', $nama);
                    $eksistensi = strtolower(end($x));
                    $lokasi = $_FILES['fileupload']['tmp_name'];

                    if(in_array($eksistensi, $format) === true){
                        move_uploaded_file($lokasi, 'folderup/'.$nama);
                        $query = "INSERT INTO upload VALUES (NULL,'$nama','$desc')";
                        $panggil = mysql_query($query);

                        if($panggil){
                            echo '<br><br>FILE BERHASIL DI UPLOAD<br>';
                        }
                        else{
                            echo '<br><br>GAGAL MENGUPLOAD GAMBAR<br>';
                        }
                    }
                    else{
                        echo '<br><br>Format tidak sesuai<br>';
                    }
                ?>
                <a href="upload.php"><button class="tambahku" style="margin-left: 5px">Upload Lagi</button></a>
                <a href="../kereta.php" ><button class="tambahku" style="margin-left: 20px">BACK</button></a><br>
            </div>
        </div>
        <footer class="kaki" style="margin-top: 130px">
            <p align="center">Yusup Maulana 13.2018.1.00724</p>
        </footer>
    </body>
</html>