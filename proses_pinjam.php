<?php
include("koneksi.php");
if(isset($_POST['daftar'])){
    $nama_peminjam=$_POST['nama_peminjam'];
    $alamat=$_POST['alamat'];
    $umur=$_POST['umur'];
    $keperluan=$_POST['keperluan'];
    $jaminan=$_POST['jaminan'];
    $nomor_rangka=$_POST['nomor_rangka'];
    $merek=$_POST['merek'];
    $jenis_motor=$_POST['jenis_motor'];
    $tahun_motor=$_POST['tahun_motor'];
    $tanggal_pinjam=$_POST['tanggal_pinjam'];
    $tanggal_kembali=$_POST['tanggal_kembali'];

    $sql = "INSERT INTO tb_motor (nomor_rangka,merek,jenis_motor,tahun_motor,tanggal_pinjam,tanggal_kembali) 
    VALUES ('$nomor_rangka','$merek','$jenis_motor','$tahun_motor','$tanggal_pinjam','$tanggal_kembali')";
    $query=mysqli_query($db, $sql);

    $sql="SELECT max(id_motor)AS motor FROM tb_motor LIMIT 1";
    $query=mysqli_query($db, $sql);

    $data=mysqli_fetch_array($query);
    $motor=$data['motor'];

    $sql="INSERT INTO tb_peminjam (nama_peminjam,alamat,umur,keperluan,jaminan,id_motor)
     VALUES ('$nama_peminjam','$alamat','$umur','$keperluan','$jaminan','$motor')";
    $query=mysqli_query($db, $sql);

    if($query){
        header('location:tampil.php?status=sukses');
    }else{
        header('location:tampil.php?status=gagal');
}}
?>