
<?php

include "koneksi.php";
$nik = $koneksi->real_escape_string($_POST['nik']); 
$nama = $koneksi->real_escape_string($_POST['nama']); 
$jenis_kelamin = $koneksi->real_escape_string($_POST['jenis_kelamin']);
$no_hp = $koneksi->real_escape_string($_POST['no_hp']);
$no_hp_orangtua = $koneksi->real_escape_string($_POST['no_hp_orangtua']);
$email = $koneksi->real_escape_string($_POST['email']);   


$simpan=$koneksi->query("insert into reguler(nik,nama,jenis_kelamin,no_hp,no_hp_orangtua,email) 
                        values ('$nik', '$nama', '$jenis_kelamin', '$no_hp', '$no_hp_orangtua', '$email')");

if($simpan==true){

    header("location:reguler.php?pesan=inputBerhasil");
} else{
    echo "Error";
}

?>