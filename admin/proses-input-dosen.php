  <?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$nama=$_POST['nama'];
$nidn=$_POST['nidn'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$email=$_POST['email'];
$telepon=$_POST['telepon'];
$mengajar_mk=$_POST['mengajar_mk'];

include "../koneksi.php";

$simpan=$koneksi->query("INSERT INTO dosen(`nama`, `nidn`, `jenis_kelamin`, `alamat`, `email`, `telepon`, `mengajar_mk`) VALUES ('$nama','$nidn','$jenis_kelamin','$alamat','$email','$telepon','$mengajar_mk')");

if($simpan==true){

    header("location:tampil-dosen.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>