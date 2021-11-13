<?php
include "connection.php";

$id = $_POST['deleteData'];

$sql = "delete from data_mhs where nim='$id'";
$hasil=mysqli_query($koneksi,$sql);
?>