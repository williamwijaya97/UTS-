<html>
<head>
 <title>Data Pemantauan Covid19 Wilayah Dki Jakarta <br /> Per 22 Maret 2021 14:08:16 (Waktu dan Jam Sekarang) <br />William Wijaya 171011400472</title>
 <style>
 .table1 {
    font-family: sans-serif;
    color: #444;
    border-collapse: collapse;
    width: 50%;
    border: 1px solid #f2f5f7;
}

.table1 tr th{
    background: #35A9DB;
    color: #fff;
    font-weight: normal;
}

.table1, th, td {
    padding: 8px 20px;
    text-align: left;
}

.table1 tr:hover {
    background-color: #f5f5f5;
}

.table1 tr:nth-child(even) {
    background-color: #f2f2f2;
}
 </style>
</head>
<body style="text-align:center">
 <h1>Data Pemantauan Covid19 Wilayah Dki Jakarta <br /> Per 22 Maret 2021 14:08:16 (Waktu dan Jam Sekarang) <br />William Wijaya 171011400472</h1><hr />
 <table style="width:100%" class="data1">
  <tr>
   <th>Positif</th>
   <th>Dirawat</th>
   <th>Sembuh</th>
   <th>Meninggal</th>
  </tr>
  
  <?php
  $konek = mysqli_connect("localhost","root","");
  $database = mysqli_select_db($konek, "covid19_db");  
  
  $no = 1;
  $data = mysqli_query($konek,"select * from covid19");
  while($r = mysqli_fetch_array($data)){
   $jumlah_positif = $r['jumlah_positif'];
   $jumlah_dirawat = $r['jumlah_dirawat'];
   $jumlah_sembuh = $r['jumlah_sembuh'];
   $jumlah_meninggal = $r['jumlah_meninggal'];
        ?>
  <tr><td><?php echo $no++; ?></td>
   <td><?php echo $jumlah_positif; ?></td>
   <td><?php echo $jumlah_dirawat; ?></td>
   <td><?php echo $jumlah_sembuh; ?></td>
   <td><?php echo $jumlah_meninggal; ?></td>
  </tr>
  <?php 
  }
  ?>
 </table> 
</body>
</html>