<?php
class connected{
    protected $koneksi;
    function __construct(){
        $sambunganDB = mysql_connect("localhost","root","");
        $koneksi=mysql_select_db("tiket_kereta");
    }
}
$object=new connected();
?>