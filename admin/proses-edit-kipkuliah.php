<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id=$_POST['kipkuliah_id'];
$nik=$_POST['nik'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$no_hp=$_POST['no_hp'];
$no_hp_orangtua=$_POST['no_hp_orangtua'];
$email=$_POST['email'];

$ubah=$koneksi->query("update kipkuliah set nik='$nik', nama='$nama', jenis_kelamin='$jenis_kelamin', no_hp='$no_hp', no_hp_orangtua='$no_hp_orangtua', email='$email' where kipkuliah_id='$id'");

if($ubah==true){

    header("location:tampil-kipkuliah.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>