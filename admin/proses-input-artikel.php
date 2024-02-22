<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$judul=$_POST['judul'];
$konten=$_POST['konten'];
$tanggal_publikasi=$_POST['tanggal_publikasi'];
$penulis=$_POST['penulis'];
$kategori=$_POST['kategori'];

include "../koneksi.php";

$simpan=$koneksi->query("insert into artikel(judul,konten,tanggal_publikasi,penulis,kategori) 
                        values ('$judul', '$konten', '$tanggal_publikasi', '$penulis', '$kategori')");

if($simpan==true){

    header("location:tampil-artikel.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>