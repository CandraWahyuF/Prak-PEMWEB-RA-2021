<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- MY CSS -->
    <link rel="stylesheet" href="style.css">
    <title>Tugas 5 - 119140009</title>
</head>

<body>
    <center><legend><button type="button" id="refresh" onclick="location.href = '?'">Refresh</button></legend></center>

    <div id="hitung">
        <h1>Kalkulator</h1>
        <form>
            <input type="number" name="a" placeholder="Angka ke-1" value="<?php echo @$_GET['a'] ?>">

            <select name="kalkulator">
                <option <?php echo !@$_GET['kalkulator'] ? 'selected' : '' ?> disabled>Pilih Operator</option>
                <option <?php echo @$_GET['kalkulator'] === '+' ? 'selected' : '' ?> value="+">+</option>
                <option <?php echo @$_GET['kalkulator'] === '-' ? 'selected' : '' ?> value="-">-</option>
                <option <?php echo @$_GET['kalkulator'] === '*' ? 'selected' : '' ?> value="*">*</option>
                <option <?php echo @$_GET['kalkulator'] === '/' ? 'selected' : '' ?> value="/">/</option>
                <option <?php echo @$_GET['kalkulator'] === '%' ? 'selected' : '' ?> value="%">%</option>
            </select>

            <input type="number" name="b" placeholder="Angka ke-2" value="<?php echo @$_GET['b'] ?>">

            <div style="margin-top: 1rem">
                <button type="submit">Hitung</button>
            </div>
        </form>
        <?php
        if ($_GET):
            $a = (double) @$_GET['a'];
            $b = (double) @$_GET['b'];
            $kalkulator = @$_GET['kalkulator'];
            
            switch ($kalkulator) {
                case '+':
                    $hasil = $a + $b;
                    break;
                case '-':
                    $hasil = $a - $b;
                    break;
                case '*':
                    $hasil = $a * $b;
                    break;
                case '/':
                    $hasil = $a / $b;
                    break;
                case '%':
                    $hasil = $a % $b;
                
                default :
                    $hasil = "Pilih Operator Terlebih Dahulu";
            }
        ?>
            
        <div style="margin-top: 1rem">
            Hasil: <?php echo $hasil ?>
        </div>
        <?php
            endif; 
        ?>
    </div>


    <!-- Sorting -->
    <div id="urutan">
        <h1>Pengurutan</h1>
    
        <!--form input-->
        <form action="" method="post" id="input-text">           
            <input type="text" name="satu" placeholder="huruf ke-1" value="<?php echo @$_GET['satu'] ?>">
            <input type="text" name="dua" placeholder="huruf ke-2">
            <input type="text" name="tiga" placeholder="huruf ke-3">
            <input type="text" name="empat" placeholder="huruf ke-4">
            <input type="text" name="lima" placeholder="huruf ke-5">
            <input type="text" name="enam" placeholder="huruf ke-6">
            <input type="text" name="tujuh" placeholder="huruf ke-7">
            <button type="submit" name="submit" value="SORTING">Urutkan</button>
        </form>
 
        <?php  
        //cek submit
        if(isset($_POST['submit'])){
    
            //menangkap data angka yang di input
            $satu=$_POST['satu'];
            $dua=$_POST['dua'];
            $tiga=$_POST['tiga'];
            $empat=$_POST['empat'];
            $lima=$_POST['lima'];
            $enam=$_POST['enam'];
            $tujuh=$_POST['tujuh'];
 
            //masukkan data angka ke array
            $urutan=array($satu,$dua,$tiga,$empat,$lima,$enam,$tujuh); 	
 
            //mengurutkan angka dengan fungsi sort()
            sort($urutan);  
            echo "<br>";
            echo "<br>";
            echo "Hasil : ";
            
            //menampilkan isi array angka dengan looping for
            $jumlah=count($urutan);  
            for($x=0;$x<$jumlah;$x++)  
            {  
                echo $urutan[$x];
                echo " , ";  
            } 
        }
        ?>  
    </div>

        <!-- Bilangan Prima -->
    <div id="bil-prima">
        <h1>Bilangan Prima dari 1 sampai 100</h1>
        <?php 

            echo "Hasil : ";
            for($i=1;$i<=100;$i++){
                $n=0;
                for($j=1;$j<=$i;$j++){
                    if($i%$j==0){
                        $n++;
                    }
                }
                if($n==2){
                    echo $i.' , ';
                }
            }                    
        ?>
    </div>
</body>
</html>