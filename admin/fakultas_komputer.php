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
              <center><h1>Fakultas Komputer Dan Teknologi</h1></center><br>
              <img src="gambar/gedung4.jpg" class="container"><br>
              <h3><b>Keunggulan</b></h3>
              <p> Dalam tujuannya untuk mencetak lulusan yang kompeten dalam bidang Teknologi Informasi, Fakultas Komputer dan Teknologi(FKOMTEK) Universitas Pandawara menerapkan kurikulum berbasis kompetensi yang merujuk pada ABET (Accreditation Board for Engineering and Technology).</p><br>

<p>Didukung dengan tenaga pendidik berkualitas dan sarana prasarana pendukung yang memadai, FKOMTEK bertujuan untuk menghasilkan lulusan yang berjiwa enterpreneur berbasis pada moral dan etika serta dapat dipercaya sehingga mampu bekerjasama dan memberikan kontribusi di tingkat nasional dan internasional.</p><br>
              <p>FKOMTEK terdiri dari 2 (dua) program Sarjana. Program studi terakreditasi A.</p><br><br><br>
              <h3><b>Program Studi</b></h3>
              <h4><b>Sarjana (S1)<b></h4>
              <p><a href="teknik_informatika.php">Teknik Informatika</a></p>
              <p><a href="sistem_informasi.php">Sistem Informasi</a></p>
             

            </div>
         </div>
      </div>
   </div>
   <?php include "footer.php";?>