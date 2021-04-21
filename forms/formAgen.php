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
        <title>Informasi Agen</title>
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
        <h1>Insert Agen</h1>
        <form action="../proses/prosesAgen.php?aksi=tambah" method="post">
            <label >Masukkan ID Agen :</label>
            <input type="text" id="noagen" name="noagen" placeholder="ID Agen"><br><br>
            <label >Nama Agen :</label>
            <input type="text" id="namagen" name="namagen" placeholder="Nama Agen" style="margin-left: 50px"><br><br>
            <label >Jenis Kelamin :</label>
            <input type="radio" id="jk" name="jenisk" value="Laki-laki" style="margin-left: 35px"><label>Laki-laki</label>
            <input type="radio" id="jk" name="jenisk" value="Perempuan"><label>Perempuan</label><br><br>
            <label >Alamat :</label>
            <input type="text" id="almt" name="almt" placeholder="Alamat" style="margin-left: 78px"><br><br>
            <label >No. Telp :</label>
            <input type="text" id="notelp" name="notelp" placeholder="No. Telp" style="margin-left: 70px"><br>
            <label><br>Status karyawan :</label><br>
            <input type="checkbox" id="status1" name="status" value="Tetap"><label>Tetap</label><br>
            <input type="checkbox" id="status2" name="status" value="Tidak Tetap"><label>Tidak Tetap</label>
            <br>
            <div style="margin-top: 10px">
                <button type="button"><a href="../agen.php" style="text-decoration: none; color: black">Back</a></button>
                <button type="submit">Submit</button>
            </div>
        </form>
        <footer class="kaki">
            <p align="center">Yusup Maulana 13.2018.1.00724</p>
        </footer>
    </body>
    <script>
        function klik(){
            var jka = "";
        
            if(document.getElementById('jk1').checked){
                jka = "Laki-laki";
            } else if(document.getElementById('jk2').checked){
                jka = "Perempuan";
            }

            var status="";
            if(document.getElementById('status1').checked){
                status="Tetap";
            } else if(document.getElementById('status2').checked){
                status="Tidak Tetap";
            }

            var kosongkan = false;
            id = document.getElementById("noagen").value,
            nama = document.getElementById("namagen").value;
            alamat = document.getElementById("almt").value,
            telp = document.getElementById("notelp").value;
            
            if(id==""){
                alert("Isilah data dengan benar");
                kosongkan = true;
            }
            else if(nama==""){
                alert("Isilah data dengan benar");
                kosongkan = true;
            }
            else if(jka==""){
                alert("Isilah data dengan benar");
                kosongkan = true;
            }else if(alamat==""){
                alert("Isilah data dengan benar");
                kosongkan = true;
            }else if(telp==""){
                alert("Isilah data dengan benar");
                kosongkan = true;
            }else if(status==""){
                alert("Isilah data dengan benar");
                kosongkan = true;
            }else{
                alert("Data Berhasil di Insert");
            }
            return kosongkan;
        }
    </script>
</html>
