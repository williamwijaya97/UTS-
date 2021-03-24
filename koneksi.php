<?php<?php
$konek = mysqli_connect("localhost","root","");

if($konek){echo "koneksi host berhasil.<br/>";}
else{echo "koneksi gagal.<br/>";}

$database = mysqli_select_db($konek, "covid19_db"); 
if($database){echo "koneksi database berhasil.";}
else{echo "koneksi database gagal.";}
?>