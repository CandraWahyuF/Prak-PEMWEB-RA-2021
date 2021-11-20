<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="assets/style.css">

    <title>Tugas 6 - 119140009</title>
</head>

<body>
    <div id="form_buah">
        <form method="POST" action="hitung_belanja.php" id="buah" name="buah">
            <table>
                <thead>
                    <tr>
                        <td colspan="3" align="center" width="400px" class="pesan1">Pesan Buah</td>
                    </tr>
                    <tr align="center" class="judul">
                        <th><img src="assets/img/mangga.png"></th>
                        <th><img src="assets/img/jambu.png"></th>
                        <th><img src="assets/img/salak.png"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mangga</td>
                        <td>Jambu</td>
                        <td>Salak</td>
                    </tr>
                    <tr>
                        <td>Rp15.000/Kg</td>
                        <td>Rp13.000/Kg</td>
                        <td>Rp10.000/Kg</td>
                    </tr>
                    <tr align="center" width="50px">
                        <td><input type="number" min="0" placeholder="0" id="mangga" name="mangga" onchange="setResult()"></td>
                        <td><input type="number" min="0" placeholder="0" id="jambu" name="jambu" onchange="setResult()"></td>
                        <td><input type="number" min="0" placeholder="0" id="salak" name="salak" onchange="setResult()"></td>
                    </tr>

                    <tr>
                        <td colspan="2">Total Harga</td>
                        <td>Rp<input id="total" name="total" readonly></td>
                    </tr>
                </tbody>
            </table>
            <center><button name="cetak_total" id="btn_tampil">Pesan</button></center>
        </form>
    </div>


    <!-- Javascript -->
    <script type="text/javascript">
        function setResult() {
            var total = document.getElementById("total");
            var mangga = document.getElementById("mangga").value * 15000;
            var jambu = document.getElementById("jambu").value * 13000;
            var salak = document.getElementById("salak").value * 10000;
            console.log(mangga + jambu + salak);
            var result = mangga + jambu + salak;
            total.value = result;
        }
    </script>

</body>

</html>