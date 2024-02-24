<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php";?>
<br><br>
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <img src="gambar/kkn.jpg" width="550px">
        <p><center>Kegiatan KKN Mahasiswa</center></p><br><br>
         <img src="gambar/rapat.jpg" width="550px">
        <p><center>Rapat BEM</center></p><br><br>
         <img src="gambar/wisuda.jpg" width="550px">
        <p><center>Wisuda Angkatan 2018</center></p><br><br>
         <img src="gambar/wisuda2.jpg" width="550px">
        <p><center>Wisuda Angkatan 2015</center></p><br><br>
         <img src="gambar/seminar.jpg" width="550px">
        <p><center>Seminar</center></p><br><br>
         <img src="gambar/klub.webp" width="550px">
        <p><center>Kegiatan Klub </center></p><br><br>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
         <img src="gambar/kerja_sama.webp" width="550px">
         <p><center>Kerja sama dengan Seoul National University</center></p><br><br>
          <img src="gambar/seminar2.jpeg" width="550px">
        <p><center>Kegiatan Seminar</center></p><br><br>
         <img src="gambar/rapat2.jpg" width="550px">
        <p><center>Rapat Organisasi HMTI</center></p><br><br>
         <img src="gambar/jalan2.jpg" width="550px">
        <p><center>Kegiatan Wisata Alam BEM</center></p><br><br>
         <img src="gambar/belajar.jpg" width="550px">
        <p><center>Kegiatan Belajar Mengajar Mahasiswa</center></p><br><br>
         <img src="gambar/mhs.jpg" width="550px">
         <p><center>Kegiatan Belajar Mengajar Mahasiswa</center></p><br><br>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->
  <?php include "footer.php";?>