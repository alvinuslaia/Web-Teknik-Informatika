<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$nik=$_POST['nik'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$no_hp=$_POST['no_hp'];
$no_hp_orangtua=$_POST['no_hp_orangtua'];
$email=$_POST['email'];

include "../koneksi.php";

$simpan=$koneksi->query("insert into reguler(nik,nama,jenis_kelamin,no_hp,no_hp_orangtua,email) 
                        values ('$nik', '$nama', '$jenis_kelamin', '$no_hp', '$no_hp_orangtua', '$email')");

if($simpan==true){

    header("location:tampil-reguler.php?pesan=inputBerhasil");
} else{
    echo "Error";
}

?>