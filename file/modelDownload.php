<?php
include_once '../models/konek.php';

class modelDownload extends connected{
    private $dataku;

    function tampilkan(){
        $query = "SELECT*FROM upload";
        $panggil = mysql_query($query);

        if($panggil === FALSE) { 
            die(mysql_error()); // TODO: better error handling
        }

        while($tampil = mysql_fetch_array($panggil)){
            $sementara[]=$tampil;
        }
        $this->dataku=$sementara;
        return $this->dataku;
    }
}                        
?>