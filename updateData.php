<?php
include "connection.php";
$id=$_GET['id'];
 
$sql="select * from data_mhs WHERE nim='$id'";

$hasil=mysqli_query($koneksi,$sql);
 
$data=mysqli_fetch_array($hasil);

?>

<link rel="stylesheet" href="style.css">
<form method="post" id="form_mhs_update">
      <table>
        <tr>
          <td>NIM</td>
          <td><input type="text" name="nim" value="<?php echo $data['nim'];?>"></td>
        </tr>

        <tr>
          <td>NAMA</td>
          <td><input type="text" name="nama" value="<?php echo $data['nama'];?>"></td>
        </tr>

        <tr>
          <td>PRODI</td>
          <td><input type="text" name="prodi" value="<?php echo $data['prodi'];?>"></td>
        </tr>

        <tr>
          <td>ANGKATAN</td>
          <td><input type="text" name="angkatan" value="<?php echo $data['angkatan'];?>"></td>
        </tr>

        <tr>
            <td></td>
            <td><button id="btn_submitUpdate" type="submit" value="Update" id="btn-ubah1">Ubah Data</button></td>
        </tr>
      </table>
    </form>