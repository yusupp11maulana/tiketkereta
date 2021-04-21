<?php
require '../models/modelKereta.php';

class prosesKereta{
    private $aksi;

    function __construct(){
        $this->aksi=$_GET['aksi'];
    }

    function proses(){
        $model=new modelKereta();
        if($this->aksi=="tambah"){
            $id=$_POST['kodeket'];
            $nama=$_POST['namaker'];
            $kelas=$_POST['kelas'];
            $model->inputan($id,$nama,$kelas);
            header("Location:../kereta.php");
        }
        else if($this->aksi=="ubah"){
            $nama=$_POST['namaker'];
            $kelas=$_POST['kelas'];
            $id=$_GET['id'];
            $model->updatean($nama,$kelas,$id);
            header("Location:../kereta.php");
        }
        else if($this->aksi=="hapus"){
            $id=$_GET['id'];
            $model->deletean($id);
            header("Location:../kereta.php");    
        }
    }
}
$object = new prosesKereta();
$object->proses();
?>