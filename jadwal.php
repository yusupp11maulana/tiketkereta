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
<style>
    .tagen{background-color: rgb(23, 23, 75); border-radius: 5px; }
    .tagen th,.tagen tbody{background-color: thistle;}
    .tambahku{border-radius: 5px; font-size: 15px; margin-top: 20px; width: 140px; height: 30px; font-family: 'Gill Sans MT'; background-color: #206D8E; color: white}
    .tambahku:hover{color: midnightblue; background-color: rgb(43, 134, 253)}
    .btn{text-decoration: none; height: 50px; width: 100px}
    .btn-delete{color:red}
    .btn-edit{color:blue}
</style>
<html>
    <head>
        <meta charset="utf-8">
        <title>Jadwal Keberangkatan</title>
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
                                <li><a href="jadwal.php">Jadwal keberangkatan</a></li>
                                <li><a href="kereta.php">Informasi Kereta</a></li>
                                <li><a href="agen.php">Informasi Agen</a></li>
                            </ul>
                        </li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="logout.php">Log Out</a></li>
                    </ul>
            </div>
        </div>
        <div class="content2">
            <h1>Jadwal Keberangkatan</h1>
            <div align="center">
                <table class="tagen">
                    <thead>
                        <tr>
                            <th>ID Jadwal</th>
                            <th>Kode Kereta</th>
                            <th>Tanggal Keberangkatan</th>
                            <th>Waktu Keberangkatan</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        require_once "models/modelJadwal.php";
                        $object = new modelJadwal();
                        $object->setdata();
                        $dataneagen=$object->setdata();
                        foreach($dataneagen as $see){
                                
                    ?>
                        <tr>
                            <td><?php echo $see['id_jadwal'];?></td>
                            <td><?php echo $see['kode_kereta'];?></td>
                            <td><?php echo $see['tgl_keberangkatan'];?></td>
                            <td><?php echo $see['jam_keberangkatan'];?></td>                           
                            <td>|| 
                            <a class="btn btn-edit" href="forms/updateJadwal.php?id=<?php echo$see['id_jadwal']?>&kode=<?php echo$see['kode_kereta']?>">Update</a> || 
                            <a class="btn btn-delete" href="proses/prosesJadwal.php?aksi=hapus&id=<?php echo$see['id_jadwal']?>">Delete</a> ||
                            </td>
                        </tr>
                    <?php }?>
                    
                    </tbody>
                </table>
                <button onclick="peringatan()" class="tambahku">Tambah Record</button>
            </div>
        </div>
        <footer class="kaki">
            <p align="center">Yusup Maulana 13.2018.1.00724</p>
        </footer>
    </body>
    <script>
        var akun = "<?php print($username) ?>"
        function peringatan(){
            if(akun =='admin'){
                alert("Anda memiliki izin untuk mengubah data karena anda adalah Admin");
                window.location.href = "forms/formJadwal.php";
            }
            else if(akun =='member'){
                alert("Mohon maaf, anda tidak memiliki izin untuk mengubah data karena anda bukanlah Admin")
            }

        }
    </script>
</html>