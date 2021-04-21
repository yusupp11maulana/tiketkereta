<?php
include_once 'konek.php';

class modelKereta extends connected{
    private $dataagen;

    function setdata(){
        $query = "SELECT kode_kereta, nama_kereta, nama_kelas FROM kereta, kelas WHERE kereta.kode_kelas = kelas.kode_kelas";
        $panggil = mysql_query($query);

        if($panggil === FALSE) { 
            die(mysql_error()); // TODO: better error handling
        }

        while($tampil = mysql_fetch_array($panggil)){
            $sementara[]=$tampil;
        }
        $this->dataagen=$sementara;
        return $this->dataagen;
    }

    function inputan($id,$nama,$kelas){
        $query = "INSERT INTO kereta VALUES('$id','$nama','$kelas')";
        $panggil=mysql_query($query);
    }

    function updatean($nmp,$ap,$np){
        $query = "UPDATE kereta SET nama_kereta='$nmp',kode_kelas='$ap' WHERE kode_kereta='$np'";
        $panggil=mysql_query($query);
    }

    function deletean($id){
        $query = "DELETE FROM kereta WHERE kode_kereta='$id'";
        $panggil=mysql_query($query);
    }
}
// $object=new modelJadwal();
// $object->setdata();
// $object->tampil();
?>