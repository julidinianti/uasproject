<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
 <style> body 
    {
        background-image: url("gambar/back1.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    };
    </style>
<?php include "header.php"; ?>
<div class="container-fluid">
	<div class="jumbotron">
		<div class="container">
			<div class="row">
				<div class="col-md-12">	
				  <h1>Hallo, Selamat Datang Admin!!</h1>
				  <p>Website ini dibuat untuk memenuhi tugas Ujian Akhir Semester yang diberikan oleh bapak Roberto Kaban,M.kom dosen pengampu mata kuliah pemrograman web 2.<br>Saya ucapkan Terima kasih kepada teman-teman yang telah banyak mendukung dan juga membantu saya dalam menyelesaikan project ini.				   </p>
				  <p><a class="btn btn-primary btn-lg" href="index.php" role="button">Selengkapnya</a> 
				</div>
			</div>
		</div>
	</div>
</div><!-- Akhir Jumbotron -->
<?php include "footer.php";?>