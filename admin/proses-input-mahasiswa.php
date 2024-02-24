<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$nim=$_POST['nim'];
$nama=$_POST['nama'];
$jurusan=$_POST['jurusan'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];

include "../koneksi.php";

$simpan=$koneksi->query("INSERT INTO mahasiswa (`nim`, `nama`, `jurusan`, `jenis_kelamin`, `alamat`) VALUES ('$nim','$nama','$jurusan','$jenis_kelamin','$alamat')");

if($simpan==true){

    header("location:tampil-mahasiswa.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>