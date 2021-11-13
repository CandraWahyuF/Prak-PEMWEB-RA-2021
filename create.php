<?php
include "connection.php";

$nim=$_POST["nim"];
$nama=$_POST["nama"];
$prodi=$_POST["prodi"];
$angkatan=$_POST["angkatan"];

$sql="insert into data_mhs (nim,nama,prodi,angkatan) values ('$nim','$nama','$prodi','$angkatan')";

$hasil=mysqli_query($koneksi,$sql);

?>