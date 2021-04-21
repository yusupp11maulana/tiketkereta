<?php
include_once 'konek.php';

class modelAgen extends connected{
    private $dataagen;

    function setdata(){
        $query = "SELECT*FROM agen_tiket";
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

    function inputan($id,$nama,$jk,$al,$telp,$st){
        $query = "INSERT INTO agen_tiket VALUES('$id','$nama','$jk','$al','$telp','$st')";
        $panggil=mysql_query($query);
    }

    function updatean($nama,$jk,$al,$telp,$st,$id){
        $query = "UPDATE agen_tiket SET nama_agen='$nama',jenis_kelamin='$jk',alamat='$al',telepon='$telp',stts='$st' WHERE id_agen='$id'";
        $panggil=mysql_query($query);
    }

    function deletean($id){
        $query = "DELETE FROM agen_tiket WHERE id_agen='$id'";
        $panggil=mysql_query($query);
    }
}
// $object=new modelAgen();
// $object->setdata();
// $object->tampil();
?>