<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$id=$_GET['id'];

include "../koneksi.php";

$hapus=$koneksi->query ("DELETE FROM `kritik` WHERE id_user='$id'");

if($hapus==true){

    header("location:kontak.php?pesan=hapusBerhasil");

} else{
    echo "Error";
}


?>