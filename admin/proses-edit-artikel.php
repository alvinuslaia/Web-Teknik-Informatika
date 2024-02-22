<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id=$_POST['artikel_id'];
$judul=$_POST['judul'];
$konten=$_POST['konten'];
$tanggal_publikasi=$_POST['tanggal_publikasi'];
$penulis=$_POST['penulis'];
$kategori=$_POST['kategori'];

$ubah=$koneksi->query("update artikel set judul='$judul', konten='$konten', tanggal_publikasi='$tanggal_publikasi', penulis='$penulis', kategori='$kategori' where artikel_id='$id'");

if($ubah==true){

    header("location:tampil-artikel.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>