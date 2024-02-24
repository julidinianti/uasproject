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
              <center><h1>Teknik Informatika</h1></center><br>
              <img src="gambar/gedung4.jpg" class="container"><br>
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
   <p>Pada era globalisasi sekarang ini, IT (Information Techno-logy) sudah menjadi kebutuhan mutlak bagi setiap organi-sasi termasuk perusahaan baik di bidang jasa maupun barang dan juga pada organisasi nirlaba. Selain itu, teknologi ini juga merupakan salah satu ilmu yang mampu menyentuh masyarakat secara perorangan seperti misalnya dalam komunikasi, hiburan dan pendidikan. Oleh karena itu, kebutuhan tenaga kerja profesional di bidang Teknik Informatika ini sangat tinggi baik di tingkat nasional maupun internasio-nal. Selain diserap oleh pasar tenaga kerja, seorang lulusan Teknik Informatika juga dapat dengan mudah menjadi seorang entrepreneur dengan keahlian dan kreativitasnya di bidang ilmu Informatika.

Terbentuknya Program Studi Teknik Informatika di ITB diawali dengan penggunaan komputer di bawah pengelolaan Pusat Komputer ITB. Didukung oleh semangat dan kemauan berkembang, pendidikan formal tentang komputer dimulai dengan dibukanya Pendidikan Ahli Teknik Jurusan Penggunaan Komputer (PAT-JPK) pada tahun 1998.</p><br><br><br></font></font>
</div>
<div class="col-lg-6 col-md-12 mb-4 mb-md-0">
   <font face="times new roman">
   <font size="4">
    <h2>Prospek Karir</h2>
    <p>Software Engineer
Berperan dalam pengembangan perangkat lunak untuk berbagai keperluan. Misalnya perangkat lunak untuk pendidikan, telekomunikasi, bisnis, hiburan dan lain-lain, termasuk perangkat lunak untuk model dan simulasi.
System Analyst dan System Integrator
Berperan dalam melakukan analisis terhadap sistem dalam suatu instansi atau perusahaan dan membuat solusi yang integratif dengan memanfaatkan perang­kat lunak
Konsultan IT
Berperan dalam perencanaan dan pengevaluasian penerapan IT pada sebuah organisasi.
Database Engineer / Database Administrator
Berperan dalam perancangan dan pemeliharaan basis data (termasuk data warehouse) untuk suatu instansi atau perusahaan
Web Engineer / Web Administrator
Bertugas merancang dan membangun website beserta berbagai layanan dan fasilitas berjalan di atasnya. Ia juga bertugas melakukan pemeliharaan untuk website tersebut dan mengembangkannya.
Computer Network / Data Communication Engineer
Bertugas merancang arsitektur jaringan, serta melakukan perawatan dan pengelolaan jaringan dalam suatu instansi atau perusahaan.
Programmer
Baik sebagai system programmer atau application developer, sarjana informatika sangat dibutuhkan di berbagai bidang, misalnya bidang perbankan, telekomunikasi, industri IT, media, instansi pemerintah, dan lain-lain.
Software Tester
Terkait dengan ukuran perangkat lunak, sarjana informatika dapat juga berperan khusus sebagai penguji perangkat lunak yang bertanggung jawab atas kebenar-an fungsi dari sebuah perangkat lunak.
Game Developer
Dengan berbagai bekal keinformatikaan yang diperolehnya termasuk computer graphic, human computer interaction, dll, seorang sarjana informatika juga dapat berperan sebagai pengembang perangkat lunak untuk multimedia game.
Intelligent System Developer
Dengan berbagai teknik artificial intelligence yang dipelajarinya, seorang sarjana informatika juga dapat berperan sebagai pengembang perangkat lunak yang intelejen seperti sistem pakar, image recognizer, prediction system, data miner, dll.</p><br><br><br><br><br><br></font></font>
   </div>
   </div>
   </div> <br><br><br>
   <?php include "footer.php";?>