<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id=$_POST['berita_id'];
$judul=$_POST['judul'];
$isi=$_POST['isi'];


$ubah=$koneksi->query("update berita set judul='$judul', isi='$isi' where berita_id='$id'");

if($ubah==true){

    header("location:tampil-berita.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>