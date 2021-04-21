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
    .btn{text-decoration: none;}
    .btn-delete{color:red}
    .btn-edit{color:blue}
</style>
<html>
    <head>
        <meta charset="utf-8">
        <title>Informasi kereta</title>
        <link rel="stylesheet" href="indexall.css">
    </head>
    <body>
        <div class="atas">
            <a href="index2.php"><img class="g-a" src="atas.png" title="Ticketkeretaku"></a>
            <div class="navbar">
                    <ul>
                        <li><a href="index2.php">Home</a></li>
                        <li class="dropdown"><a href="#">Menu Informasi</a>
                            <ul class="menu-dropdown">
                                <li><a href="jadwal.php">Jadwal Keberangkatan</a></li>
                                <li><a href="kereta.php">Informasi Kereta</a></li>
                                <li><a href="agen.php">Informasi Agen</a></li>
                            </ul>
                        </li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="logout.php">Log Out</a></li>
                    </ul>
            </div>
        </div>
        <div class="content3">
            <h1>Informasi kereta</h1>
            <div align="center">
                <table class="tagen">
                    <thead>
                        <tr>
                            <th>Kode Kereta</th>
                            <th>Nama Kereta</th>
                            <th>Nama Kelas</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        require_once "models/modelKereta.php";
                        $object = new modelKereta();
                        $object->setdata();
                        $dataneagen=$object->setdata();
                        foreach($dataneagen as $see){
                                
                    ?>
                        <tr>
                            <td><?php echo $see['kode_kereta'];?></td>
                            <td><?php echo $see['nama_kereta'];?></td>
                            <td><?php echo $see['nama_kelas'];?></td>
                            <td>|| 
                            <a class="btn btn-edit" href="forms/updateKereta.php?id=<?php echo$see['kode_kereta']?>">Update</a> || 
                            <a class="btn btn-delete" href="proses/prosesKereta.php?aksi=hapus&id=<?php echo$see['kode_kereta']?>">Delete</a> ||
                            </td>
                        </tr>
                    <?php }?>
                    
                    </tbody>
                </table>
                <button onclick="peringatan()" class="tambahku">Tambah Record</button><br>
                <a href="file/upload.php" class="btn"><button class="tambahku">Upload File</button></a>
                <a href="file/download.php" class="btn"><button class="tambahku">Download File</button></a>
            </div>
        </div>
        <footer class="kaki">
            <p align="center">Yusup Maulana 13.2018.1.00724</p>
        </footer>
    </body>
</html>
<script>
    var akun = "<?php print($username) ?>"
    function peringatan(){
        if(akun =='admin'){
            alert("Anda memiliki izin untuk mengubah data karena anda adalah Admin");
            window.location.href = "forms/formKereta.php";
        }
        else if(akun =='member'){
            alert("Mohon maaf, anda tidak memiliki izin untuk mengubah data karena anda bukanlah Admin")
        }

    }
</script>