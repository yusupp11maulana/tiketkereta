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
            <h1>Download File</h1>
            <table class="tabel4">
                <thead>
                    <tr>
                        <th style="width: 150px">Nama File</th>
                        <th>Description</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require_once "modelDownload.php";
                        $object = new modelDownload();
                        $object->tampilkan();
                        $datane=$object->tampilkan();
                        foreach($datane as $data){
                    ?>
                        <tr>
                            <td> <img src="folderup/<?php echo $data['nama_files'];?>" alt="" style="width: 200px;"></td>
                            <td><?php echo $data['deskripsi'];?></td>
                            <td style="width: 100px;"><a href="yukDownload.php?nama=<?php echo $data['nama_files'];?>" style="text-decoration: none; color: blue">Download File</a></td>
                        </tr>
                    <?php }?>
                </tbody>
            <table>         
        </div>
        <footer class="kaki" style="margin-top: 130px">
            <p align="center">Yusup Maulana 13.2018.1.00724</p>
        </footer>
    </body>
</html>