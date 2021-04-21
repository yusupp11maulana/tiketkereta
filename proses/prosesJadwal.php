<?php
require '../models/modelJadwal.php';
class prosesJadwal{
    private $aksi;

    function __construct(){
        $this->aksi=$_GET['aksi'];
    }

    function proses(){
        $model=new modelJadwal();
        if($this->aksi=="tambah"){
            $id=$_POST['nojd'];
            $kd=$_POST['kodeket'];
            $tgl=$_POST['tgl'];
            $wkt=$_POST['jam'];
            $model->inputan($id,$kd,$tgl,$wkt);
            header("Location:../jadwal.php");
        }
        else if($this->aksi=="ubah"){
            $tgl=$_POST['tgl'];
            $jam=$_POST['jam'];
            $id=$_GET['id'];
            $kd=$_GET['kd'];
            $model->updatean($tgl,$jam,$id,$kd);
            header("Location:../jadwal.php");
        }
        else if($this->aksi=="hapus"){
            $id=$_GET['id'];
            $model->deletean($id);
            header("Location:../jadwal.php");    
        }
    }
}
$object = new prosesJadwal();
$object->proses();
?>