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
              <center><h1>Manajemen Bisnis</h1></center><br>
              <img src="gambar/gedungku.jpg" class="container"><br>
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
   <p>Lulusan program studi manajemen menguasai 4 kompetensi utama di bidang manajemen yaitu Pengembangan Proses Bisnis dan Inovasi (Business Process Improvement and Innovation), Penemuan, Penciptaan dan Pengantaran Nilai Pelanggan (Customer Value Discovery, Creation, and Delivery), Pengelolaan Keuangan Berbasis Nilai (Value-Based Finance) dan Memimpin Perubahan (Leading Change).</p><br><br><br></font></font>
</div>
<div class="col-lg-6 col-md-12 mb-4 mb-md-0">
   <font face="times new roman">
   <font size="4">
    <h2>Prospek Karir</h2>
    <p>Lulusan program studi ini memiliki peluang bekerja di perusahan bisnis nasional dan multinasional, perusahaan swasta maupun BUMN berbagai sektor (seperti perbankan, jasa, manufaktur), start-up digital/non digital, instansi pemerintah berbagai kementerian, kepala daerah berbagai tingkatan dan posisi lainnya yang menuntut kemampuan manajerial dan kepemimpinan. Lulusan Program Studi Manajemen juga dibekali kemampuan berwirausaha maupun menjadi konsultan bisnis.</p><br><br><br><br><br><br></font></font>
   </div>
   </div>
   </div> <br><br><br>
   <?php include "footer.php";?>