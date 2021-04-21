<?php
session_start();
if(isset($_SESSION['username'])){
    $username=$_SESSION['username'];
}
else{
        echo header("location:../index.php");
    }
?>

<!DOCTYPE html>
<style>
    .tagen{background-color: rgb(23, 23, 75); border-radius: 5px; }
    .tagen th,.tagen tbody{background-color: thistle;}
    .tambahku{border-radius: 5px; font-size: 15px; margin-top: 20px; width: 140px; height: 30px; font-family: 'Gill Sans MT'; background-color: #206D8E; color: white}
    .tambahku:hover{color: midnightblue; background-color: rgb(43, 134, 253)}
</style>
<html>
    <head>
        <meta charset="utf-8">
        <title>Insert Jadwal</title>
        <link rel="stylesheet" href="../indexall.css">
    </head>
    <body>
        <div class="atas">
            <a href="../index2.php"><img class="g-a" src="../atas.png" title="TiketPesawat.com"></a>
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
        <h1>Insert jadwal</h1>
        <form action="../proses/prosesJadwal.php?aksi=tambah" method="post">
            <label >Masukkan ID Jadwal :</label>
            <input type="text" id="nojd" name="nojd" placeholder="ID Jadwal" style="margin-left: 8px"><br><br>
            <label >Kode Kereta :</label>
            <input type="text" id="kodeket" name="kodeket" placeholder="Kode Kereta" style="margin-left: 62px"><br><br>
            <label >Tgl Keberangkatan :</label>
            <input type="text" id="tgl" name="tgl" placeholder="Tanggal Keberangkatan" style="margin-left: 20px"><br><br>
            <label >Waktu Keberangkatan :</label>
            <input type="text" id="jam" name="jam" placeholder="Keberangkatan" style="margin-left: 1px"><br>
            
            <br>
            <div style="margin-top: 10px">
                <button type="button"><a href="../jadwal.php" style="text-decoration: none; color: black">Back</a></button>
                <button onclick="kosong()">Submit</button>
            </div>
        </form>
        <footer class="kaki">
            <p align="center">Yusup Maulana 13.2018.1.00724</p>
        </footer>
    </body>
    <script>
        //Chechk
        function kosong(){
            var kosongkan = false;
            id = document.getElementById("nojd").value,
            kode = document.getElementById("kodeket").value,
            tgl = document.getElementById("tgl").value,
            jam = document.getElementById("jam").value;        
            if(id==""){
                alert("Isilah data dengan benar");
                kosongkan = true;
            }
            else if(kode==""){
                alert("Isilah data dengan benar");
                kosongkan = true;
            }
            else if(tgl==""){
                alert("Isilah data dengan benar");
                kosongkan = true;
            }else if(jam==""){
                alert("Isilah data dengan benar");
                kosongkan = true;
            }
            else{
                alert("Data Berhasil di Insert");
                window.location.href = "../proses/prosesJadwal.php";
            }
            return kosongkan;
        }
    </script>
</html>
