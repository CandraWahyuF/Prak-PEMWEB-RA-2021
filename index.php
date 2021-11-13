<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- MY CSS, JS, JQuery -->
    <link rel="stylesheet" href="style.css">
    <script src="myjs.js"></script>
    <script type="text/javascript" src="jquery-3.5.1.min.js"></script>

    <title>Tugas 4 - 119140009</title>
  </head>

  <body>

  <div id="header">
    <h2>CRUD dengan AJAX</h2>
  </div>
    
  <h1>Input Data</h1>
    <form method="post" id="form_mhs">
      <table border="1px">
        <tr>
          <td>NIM</td>
          <td><input type="text" name="nim" /></td>
        </tr>

        <tr>
          <td>NAMA</td>
          <td><input type="text" name="nama" /></td>
        </tr>

        <tr>
          <td>PRODI</td>
          <td><input type="text" name="prodi" /></td>
        </tr>

        <tr>
          <td>ANGKATAN</td>
          <td><input type="text" name="angkatan" /></td>
        </tr>
      </table>
    </form>

    <!-- <button id="btn_tampil">Tampil Data</button> -->
    <button id="btn_simpan">Simpan</button>
    
    <h1>Data Tersimpan</h1>
    <div id="tampil_data"></div>


    <div id="footer">
      <p>Candra Wahyu Firmansyah</p>
      <p>119140009</p>
      <p>Pemrograman Web RA</p>
    </div>

    <!-- AJAX -->
    <script src="myjs.js"></script>
  </body>
</html>
