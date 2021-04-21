<?php
require '../models/modelAgen.php';
class prosesAgen{
    private $aksi;

    function __construct(){
        $this->aksi=$_GET['aksi'];
    }

    function proses(){
        $model=new modelAgen();
        if($this->aksi=="tambah"){
            $id=$_POST['noagen'];
            $nama=$_POST['namagen'];
            $jk=$_POST['jenisk'];
            $al=$_POST['almt'];
            $telp=$_POST['notelp'];
            $st=$_POST['status'];

            $model->inputan($id,$nama,$jk,$al,$telp,$st);
            header("Location:../agen.php");
        }
        else if($this->aksi=="ubah"){
            $id=$_GET['id'];
            $nama=$_POST['namagen'];
            $jk=$_POST['jenisk'];
            $al=$_POST['almt'];
            $telp=$_POST['notelp'];
            $st=$_POST['status'];

            $model->updatean($nama,$jk,$al,$telp,$st,$id);
            header("Location:../agen.php");
        }
        else if($this->aksi=="hapus"){
            $id=$_GET['id'];
            $model->deletean($id);
            header("Location:../agen.php");    
        }
    }
}
$object = new prosesAgen();
$object->proses();
?>