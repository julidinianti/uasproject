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
              <center><h1>Fakultas Pendidikan</h1></center><br>
              <img src="gambar/gedung2.jpg" class="container"><br>
              <h3><b>Keunggulan</b></h3>
              <p>Fakultas Pendidikan (FP) adalah salah satu fakultas pada Universitas Pandawara (UNPAN) yang menyediakan layanan pendidikan bagi para mahasiswa yang telah bekerja sebagai guru (in-service training) atau tenaga pendidik lainnya. Penyelenggaraan pendidikan dilakukan dengan sistem belajar jarak jauh (SBJJ). Seluruh program yang ditawarkan oleh FP-UNPAN telah memperoleh izin resmi dari Dirjen Dikti.</p><br>
              <p>FP-UNPAN terdiri dari 1 (satu) program Sarjana. Program studi terakreditasi A.</p><br><br><br>
              <h3><b>Program Studi</b></h3>
              <h4><b>Sarjana (S1)<b></h4>
              <p><a href="bahasa_inggris.php">Pendidikan Bahasa Inggris</a></p>
             

            </div>
         </div>
      </div>
   </div>
   <?php include "footer.php";?>