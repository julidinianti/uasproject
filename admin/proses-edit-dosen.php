<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id=$_POST['id_dosen'];
$nama=$_POST['nama'];
$nidn=$_POST['nidn'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$email=$_POST['email'];
$telepon=$_POST['telepon'];
$mengajar_mk=$_POST['mengajar_mk'];
$ubah=$koneksi->query("update dosen set nama='$nama', nidn='$nidn', jenis_kelamin='$jenis_kelamin', alamat='$alamat', email='$email', telepon='$telepon', mengajar_mk='$mengajar_mk' where id_dosen='$id'");

if($ubah==true){

    header("location:tampil-dosen.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>