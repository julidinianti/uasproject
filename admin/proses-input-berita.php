<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$judul=$_POST['judul'];
$isi=$_POST['isi'];

include "../koneksi.php";

$simpan=$koneksi->query ("INSERT INTO berita (`judul`, `isi`) VALUES ('$judul','$isi')");

if($simpan==true){

    header("location:tampil-berita.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>