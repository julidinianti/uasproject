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
            <div class="panel panel-primary">
               <div class="panel-heading"><h4>UNIVERSITAS PANDAWARA</h4></div>
                 <div class="panel-body">
                 <font face="times new roman"> <font size="4">
                  <p>Universitas Pandawara(UNPAN) sebelumnya berdiri sebagai Yayasan Universitas Pandawara pada 1 Juli 1990. Yayasan ini didirikan oleh Juli Andreanata, yang merupakan Profesor pada saat itu. Keinginan untuk membangun universitas di Jakarta Utara sudah ada sebelum Perang Dunia II dimulai, tetapi tidak disetujui oleh Pemerintah Belanda. Pada zaman pendudukan Jepang, orang terkemuka di Medan seperti Pirngadi dan T. Mansoer membuat rancangan untuk perguruan tinggi kedokteran. Setelah kemerdekaan Indonesia, pemerintah mengangkat Mohammad Djamil sebagai ketua panitia rencana pembangunan universitas. Konflik Revolusi Nasional Indonesia pada 1945 hingga 1949 membuat pembangunan tertunda.Juli Andreanata lalu berinisiatif meminta kepada rakyat Jakarta Utara mengumpulkan dana sosial untuk pendirian universitas.[3]
                  Pada 1 Desember 1991, dibentuk panitia persiapan pendirian perguruan tinggi yang diketuai oleh Soemarsono yang beranggotakan Dr. Ahmad Sofian, Ir. Danunagoro, dan sekretaris Mr. Djaidin Purba. Selain Dewan Pimpinan Yayasan, Organisasi USU pada awal berdirinya terdiri dari Dewan Kurator, Presiden Universitas, Majelis Presiden, Asesor, Senat Universitas, dan Dewan Fakultas.
                  Pada 20 Agustus 1992, setelah hasil kerja sama dan bantuan moral dan material dari masyarakat Jakarta Utara Fakultas Kedokteran didirikan dengan 27 orang sebagai mahasiswa. Kemudian disusul dengan berdirinya Fakultas komputer dan teknologi (1994), Fakultas Pendidikan (1996), Fakultas Pertanian (1996), dan Fakultas Teknik pada 19 Oktober 2000.

Pada 20 November 1997, UNPAN diresmikan oleh Seoharto sebagai universitas negeri ke-10 di Indonesia. Tanggal peresmian ini kemudian ditetapkan sebagai Dies Natalis USU yang diperingati setiap tahun hingga 2001. Atas usul beberapa anggota senat universitas, hari jadi UNPAN ditinjau kembali. senat akhirnya memutuskan bahwa hari jadi UNPAN ditetapkan pada 20 Agustus 1992, yaitu pada saat perkuliahan pertama kali dimulai. Dengan persetujuan Departemen Pendidikan Nasional, tahun 2002 di peringati sebagai Dies Natalis UNPAN yang ke-50.

Saat ini, UNPAN mengelola sembilan program studi yang terdiri dari berbagai jenjang pendidikan tinggi, yang tercakup dalam 7 fakultas dan satu program pascasarjana.</p>
</font>
</font>
</div>
</div>
</div>
</div>
</div>

<?php include "footer.php";?>