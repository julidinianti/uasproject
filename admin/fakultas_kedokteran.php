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
              <center><h1>Fakultas Kedokteran</h1></center><br>
              <img src="gambar/download.jpg" class="container"><br>
              <h3><b>Keunggulan</b></h3>
              <p>Fakultas Kedokteran, Kesehatan UNPAN mengedepankan karakter organisasi pembelajar (learning organization) untuk dapat beradaptasi dengan lingkungan yang dinamis sehingga tetap relevan, resilien dan terdepan. Menerapkan keilmuan berbasis bukti dalam pengambilan keputusan ilmiah dan manajerial. Mengutamakan prinsip etika dan profesionalisme sivitas akademika dan hospitalia yang dilandasi jiwa kepemimpinan dan semangan kolaborasi multiprofesi.</p><br>
              <p>FK terdiri dari 2 (dua) program Sarjana. Semua program studi terakreditasi A.</p><br><br><br>
              <h3><b>Program Studi</b></h3>
              <h4><b>Sarjana (S1)<b></h4>
              <p><a href="kedokteran.php">Kedokteran</a></p>
              <p><a href="ilmu_gizi.php">Ilmu Gizi</a></p>

            </div>
         </div>
      </div>
   </div>
   <?php include "footer.php";?>