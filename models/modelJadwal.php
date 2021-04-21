<?php
include_once 'konek.php';

class modelJadwal extends connected{
    private $dataagen;

    function setdata(){
        $query = "SELECT*FROM jadwal";
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

    function inputan($id,$kd,$tgl,$wkt){
        $query = "INSERT INTO jadwal VALUES('$id','$kd','$tgl','$wkt')";
        $panggil=mysql_query($query);
    }

    function updatean($tgl,$wkt,$id,$kd){
        $query = "UPDATE jadwal SET tgl_keberangkatan='$tgl',jam_keberangkatan='$wkt',kode_kereta='$kd' WHERE id_jadwal='$id'";
        $panggil=mysql_query($query);
    }

    function deletean($id){
        $query = "DELETE FROM jadwal WHERE id_jadwal='$id'";
        $panggil=mysql_query($query);
    }
}
// $object=new modelJadwal();
// $object->inputan(k1,sdbc,20200606,190000);
?>