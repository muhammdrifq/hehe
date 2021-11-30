<?php

// case :
// Seorang anak sedang browsing
// Anak itu sedang mencari rumus rumus matematika
// rumus yang dicari adalah luas dan keliling bangun datar

// tugas :
// Buatkan seorang anak tersebut sebuah aplikasi rumus yang dicari, yang ketika dibutuhkan anak tersebut
// tidak usah susah susah untuk mengerjakan

// Buatkan rumus minimal 5, maksimal 8

if (isset($_POST['submit']))
{
    $bangun_datar = $_POST['bangun_datar'];
    $luaskel = $_POST['luaskel'];
    
    if ($bangun_datar == "segitiga") {
        if($luaskel == "luas"){
            header ("location:RELASI TUGAS2/luas_segitiga.php");
        }
        elseif ($luaskel == "keliling") {
            header ("location:RELASI TUGAS2/keliling_segitiga.php");
        }
        
    }

    elseif ($bangun_datar == "persegi") {
        header ("location:RELASI TUGAS2/persegi.php");
    }

    elseif ($bangun_datar == "persegi2") {
        header ("location:RELASI TUGAS2/persegi2.php");
    }

    elseif ($bangun_datar == "lingkaran") {
        header ("location:RELASI TUGAS2/lingkaran.php");
    }

    elseif ($bangun_datar == "ketupat") {
        header ("location:RELASI TUGAS2/ketupat.php");
    }

    elseif ($bangun_datar == "jajargenjang") {
        header ("location:RELASI TUGAS2/jajargenjang.php");
    }

    
}
?>
<html>
    <head><title>Kalkulator Luas dan Keliling Bangun Datar</title>
    <link href="tugas2.css" rel="stylesheet">
    </head>
<body align="center">
    
    <br>
    <br>
    <center>
    <table border="7" cellpadding="4">
        <form method="post">
        <tr>
            <th colspan="3">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Kalkulator Luas dan Keliling Bangun Datar&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
        </tr>

        <tr>
            <td>Pilih Bangun Datar</td>
            <td>:</td>
            <td><select name="bangun_datar">
                <option value="">--PILIH--</option>
                <option value="segitiga">Segitiga</option>
                <option value="persegi">Persegi</option>
                <option value="persegi2">Persegi Panjang</option>
                <option value="lingkaran">Lingkaran</option>
                <option value="ketupat">Belah Ketupat</option>
                <option value="jajargenjang">Jajar Genjang</option>
            </select></td>
        </tr>

        <tr>
            <td>Pilih Jenis Perhitungan</td>
            <td>:</td>
            <td><select name="luaskel">
                <option value="">--PILIH--</option>
                <option value="luas">Luas</option>
                <option value="keliling">Keliling</option>
            </select></td>
        </tr>

        <tr>
            <td><input type="submit" name="submit" value="proses">
            <input type="reset" name="reset" value="reset"></td>
        </tr>
</form>
    
    </table>
    </center>
</body>
</html>
