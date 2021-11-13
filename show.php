<table border='1'>
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Angkatan</th>
        <th>Opsi</th>
    </tr>

    <?php
    include "connection.php";
    $hasil=mysqli_query($koneksi,"select * from data_mhs");
    $nomor=0;
    while ($data = mysqli_fetch_array($hasil)):
        $nomor++;
    ?>
    <tr>
        <td><?php echo $nomor; ?></td>
        <td><?php echo $data['nim']; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['prodi']; ?></td>
        <td><?php echo $data['angkatan']; ?></td>
        <td>
            <button id="btn_edit" value="<?php echo $data['nim']; ?>">Edit</button>
            <button id="btn_hapus" value="<?php echo $data['nim']; ?>">Hapus</button>
    </tr>
        <?php endwhile;?>
</table>

<br>