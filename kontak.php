<?php include "header.php";?>
<div class="container">
		<div class="row">
			<div class="col-md-8">	
				 <?php 

            if(@$_GET['pesan']=="inputBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Berhasil Terkirim!
                    </div>
            <?php

            }

            ?>
				<form action="proses-kritik.php" method="post">
					<div class="form-group">
						<h3>Kritik Dan Saran</h3>
						<label for="topik">Subjek</label>
						<input type="text" class="form-control" name="topik" placeholder="Tulis subjek atau judul ">
					</div>
					<div class="form-group">
						<label for="artikel">Isi </label>
						<textarea name="isi_kritik" id="isi_kritik" placeholder="Isikan kritik dan saran anda"><p></p></textarea>
						<script>
						CKEDITOR.replace( 'isi_kritik' );
						</script>
					</div>
					<button type="submit" class="btn btn-info">Kirim</button>
					<button type="reset" class="btn btn-danger">Batal</button>
				</form>
		</div>
	</div>
</div>
<script src="bootstrap/js/jQuery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<br><br><br><br><br><br>
<?php include "footer.php";?>
</body>
</html>