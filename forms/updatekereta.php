<?php
session_start();
if(isset($_SESSION['username'])){
    $username=$_SESSION['username'];
}
else{
        echo header("location:../index.php");
    }
?>
<?php
    $kodene=$_GET['id'];
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
        <title>Insert Kereta</title>
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
        <h1>Update Kereta</h1>
        <form action="../proses/prosesKereta.php?aksi=ubah&id=<?php echo $kodene?>" method="post">
            <label >Kode Kereta :</label>
            <input type="text" id="kodeket" name="kodeket" value="<?php echo $kodene?>" disabled style="margin-left: 5px"><br><br>
            <label >Nama Kereta :</label>
            <input type="text" id="namaker" name="namaker" placeholder="Nama Kereta" style="margin-left: 1px"><br><br>
            <label>Kelas :</label><select id="kelas" name="kelas" style="margin-left: 53px">
                    <option value="">Pilihan</option>
                    <option value="C1">Bisnis</option>
                    <option value="C2">Ekonomi</option>
                </select>
            <br>
            <div style="margin-top: 10px">
                <button type="button"><a href="../kereta.php" style="text-decoration: none; color: black">Back</a></button>
                <button type="submit" onclick="kosong()">Submit</button>
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
            kode = document.getElementById("kodeket").value,
            namaker = document.getElementById("namaker").value,
            namaker = document.getElementById("kelas").value;

            if(kode==""){
                alert("Isilah data dengan benar");
                kosongkan = true;
            }
            else if(namaker==""){
                alert("Isilah data dengan benar");
                kosongkan = true;
            }else if(kelas==""){
                alert("Isilah data dengan benar");
                kosongkan = true;
            }
            else{
                alert("Data Berhasil di Insert");
            }
            return kosongkan;
        }
    </script>
</html>