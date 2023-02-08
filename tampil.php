<!DOCTYPE html>
<html>
    <head>
</head>
<body>
     <center>
     <header>
     <h3>Data Pinjaman</h3>
</header>
    <table border="1">
        <tr>
            <th>Nama Pinjam</th>
            <th>Alamat</th>
            <th>Umur</th>
            <th>Keperluan</th>
            <th>Jaminan</th>
            <th>Nomor rangka</th>
            <th>Merek</th>
            <th>Jenis Motor</th>
            <th>Tahun Motor</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal kembali</th>
            <th>aksi.</td>
</tr>

<?php
include("koneksi.php");
$query=mysqli_query($db, "SELECT * FROM tb_peminjam INNER JOIN tb_motor ON 
tb_peminjam.id_motor = tb_motor.id_motor");

while($motor=mysqli_fetch_array($query)){
    echo "<tr>";
    echo "<td>".$motor['nama_peminjam']."</td>";
    echo "<td>".$motor['alamat']."</td>";
    echo "<td>".$motor['umur']."</td>";
    echo "<td>".$motor['keperluan']."</td>";
    echo "<td>".$motor['jaminan']."</td>";
    echo "<td>".$motor['nomor_rangka']."</td>";
    echo "<td>".$motor['merek']."</td>";
    echo "<td>".$motor['jenis_motor']."</td>";
    echo "<td>".$motor['tahun_motor']."</td>";
    echo "<td>".$motor['tanggal_pinjam']."</td>";
    echo "<td>".$motor['tanggal_kembali']."</td>";
    echo "<td>";
    echo "<a href='edit.php?id=".$motor['id_peminjam']."'>Edit</a> |";
    echo "<a href='hapus.php?id=".$motor['id_peminjam']."'>Hapus</a> |";
    echo "</td>";
    echo "</tr>";
 }
 ?>
<a href="form_pinjam.php"><input type="button" value="pinjam">
 </table>
</body>
</html>