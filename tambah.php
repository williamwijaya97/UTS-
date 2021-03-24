<html>
<head>
 <title>Data Pemantauan Covid19 Wilayah Dki Jakarta | Per 22 Maret 2021 14:08:16 (Waktu dan Jam Sekarang) | William Wijaya  / 171011400472</title>
</head>
<body style="font-family:arial">
 <center><h2>Data Pemantauan Covid19 Wilayah Dki Jakarta <br /> Per 22 Maret 2021 14:08:16 (Waktu dan Jam Sekarang) <br />William Wijaya 171011400472 </h2></center>
 <hr />
 <b>Tambah Data Baru</b>
    <br/><br/>

    <form action="tambah.php" method="post" name="form1">
        <table width="100%" border="0">
            <tr> 
                <td>Positif</td>
                <td><input type="text" name="jumlah_positif" size="50" required></td>
            </tr>
            <tr> 
                <td>Dirawat</td>
                <td><input type="text" name="jumlah_dirawat" size="50" required></td>
            </tr>
            <tr> 
                <td>Sembuh</td>
                <td><input type="text" name="jumlah_sembuh" size="50" required></td>
            </tr>
            <tr> 
                <td>Meninggal</td>
                <td><input type="text" name="jumlah_meninggal" size="50" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="+ Tambahkan"></td>
            </tr>
        </table>
    </form>

    <?php

    if(isset($_POST['Submit'])) {
        $jumlah_positif = $_POST['jumlah_positif'];
        $jumlah_dirawat = $_POST['jumlah_dirawat'];
        $jumlah_sembuh = $_POST['jumlah_sembuh'];
        $jumlah_meninggal = $_POST['jumlah_meninggal'];

        include "koneksi.php";

  $tambah_covid19 = "insert into covid19 values('','$jumlah_positif','$jumlah_dirawat','$jumlah_sembuh','$jumlah_meninggal')";
     $kerjakan=mysqli_query($konek, $tambah_covid19);
     if($kerjakan)
     {
     echo "Barang berhasil ditambahkan. <a href='index.php'>Lihat Data Covid19</a>";
     }
     else
      {
      echo "Gagal bro";
     }
    }
    ?>
</body>
</html>