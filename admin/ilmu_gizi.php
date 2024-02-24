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
              <center><h1>Ilmu Gizi</h1></center><br>
              <img src="gambar/download.jpg" class="container"><br>
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
   <p>Kurikulum Berbasis Kompetensi (KBK) sesuai SKDI yang berlaku nasional dipadukan dengan strategi Belajar Berdasarkan Masalah (BBM) atau Problem Based Learning (PBL) menjadikan lulusan Program Studi Kedokteran UGM memiliki kompetensi dengan standar internasional sebagai dokter umum. Program studi ini membekali mahasiswa dengan keterampilan khusus (soft skill) kerja sama multiprofesi dalam kegiatan belajar lapangan pada masyarakat dengan kurikulum berkelanjutan. Lulusan program studi ini mampu mengatasi masalah kesehatan masyarakat yang dihadapi melalui penerapan ilmu pengetahuan dan keterampilan yang diperoleh selama pendidikan.</p><br><br><br></font></font>
</div>
<div class="col-lg-6 col-md-12 mb-4 mb-md-0">
   <font face="times new roman">
   <font size="4">
    <h2>Prospek Karir</h2>
    <p>Lulusan program studi ini memiliki peluang bekerja di rumah sakit baik rumah sakit milik pemerintah maupun swasta serta lembaga pemerintahan seperti Kementerian Kesehatan, TNI, Kepolisian atau berkarir sebagai dosen, peneliti di sektor pemerintah dan swasta, maupun bekerja secara mandiri sebagai klinisi. Lulusan prodi ini dapat juga menjadi konsultan masalah kesehatan di tingkat lokal, nasional serta internasional.</p><br><br><br><br><br><br></font></font>
   </div>
   </div>
   </div> <br><br><br>
   <?php include "footer.php";?>