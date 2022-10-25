<?php
if(isset($_POST["save"])){

$nama = $_POST["nama"];
$nim =  $_POST["nim"];
$studi = $_POST["studi"];

}
    if ($nama == "" || $nim == "" || $studi == ""){
        echo "<p> isi semua data, Klick <a href='input.html'> disini</a> untuk kembali</p>";
        die;
    }
        echo "<p>Hai, perkenalkan Nama saya adalah : ".$nama.", dengan Nim :".$nim." saya adalah mahasiswa dari program studi : ".$studi."<p>";

?>