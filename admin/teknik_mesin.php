<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php";?>

 <div class="container">
      <div class="row">
            <div class="col-md-12">
               <div class="jumbotron">
              <center><h1>Teknik Mesin</h1></center><br>
              <img src="gambar/slide-1.jpg" class="container"><br>
            </div>
         </div>
      </div>
   </div>
   <div class="container p-4"><br><br>
   <div class="row">
   <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
    <font face="times new roman">
   <font size="4">
    <h2>Keunggulan</h2>
   <p>Lulusan program studi ini memiliki kemampuan merekayasa mesin modern, memproduksi dan memelihara mesin yang digunakan untuk kepentingan industri.

</p><br><br><br></font></font>
</div>
<div class="col-lg-6 col-md-12 mb-4 mb-md-0">
   <font face="times new roman">
   <font size="4">
    <h2>Prospek Karir</h2>
    <p>Peluang kerja lulusan ini sangat besar untuk bekerja di lembaga pemerintah (seperti Kementerian Perencanaan Pembangunan Nasional, Kementerian Energi dan Sumber Daya Mineral, Kementerian Perdagangan, Kementerian Perhubungan) industri mesin, industri kimia dan jasa kontruksi mesin, konsultan teknik, peneliti dan tenaga pengajar di perguruan tinggi.</p><br><br><br><br><br><br></font></font>
   </div>
   </div>
   </div> <br><br><br>
   <?php include "footer.php";?>