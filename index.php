
<?php include "header.php"; ?>

		<div id="contoh-carousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#contoh-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#contoh-carousel" data-slide-to="1"></li>
        <li data-target="#contoh-carousel" data-slide-to="2"></li>
      </ol>
                  <div class="carousel-inner" role="listbox">
                     <div class="item active">
                        <img src="gambar/slide-2.jpg" alt="Keterangan Gambar satu">
                        <div class="carousel-caption">
                           <h3><font color="black"><b>UNIVERSITAS PANDAWARA</b></font></h3>
                           <p><a class="btn btn-primary btn-lg" href="sejarah.php" role="button">Selengkapnya</a></p>
                        </div>
                     </div>
                     <div class="item">
                        <img src="gambar/slide-1.jpg" alt="Keterangan Gambar dua">
                        <div class="carousel-caption">
                           <h3><font color="black"><b>UNIVERSITAS PANDAWARA</b></font></h3>
                           <p><a class="btn btn-primary btn-lg" href="sejarah.php" role="button">Selengkapnya</a> 
                        </div>
                     </div>
                     
                        <div class="item">
                        <img src="gambar/computer lab.jpg" alt="Keterangan Gambar dua">
                        <div class="carousel-caption">
                        </div>
                     </div>
                     </div>
                  </div>
                 <!-- Awal script Button Geser Kiri dan Kanan -->
    <a class="left carousel-control" href="#contoh-carousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
    </a>
		
    <a class="right carousel-control" href="#contoh-carousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
    </a><!-- Akhir script Button Geser Kiri dan Kanan -->
		
    </div><!-- Akhir script Slider/Carousel -->
               </div>
         </div>
      </div>
   </div>
			<?php 
			
			include "content1.php";
			include "content2.php";
		    include "berita.php";
		  ?>
			
      </div>
		</div>
</div><!-- Akhir Jumbotron -->
<?php include "footer.php";?>