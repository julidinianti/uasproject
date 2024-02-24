
<?php

$topik=$_POST['topik'];
$isi_kritik=$_POST['isi_kritik'];

 include "koneksi.php";


$save=$koneksi->query ("INSERT INTO kritik (`topik`, `isi_kritik`) VALUES ('$topik','$isi_kritik')") ;

if($save==true){

    header("location:kontak.php?pesan=inputBerhasil");
  
} else{
    echo "Error";
}

?>