<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-edit-berita.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "../koneksi.php";
                $tampil=$koneksi->query("select * from berita where berita_id='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="judul">Judul</label>
                         <input type="hidden" name="berita_id" value="<?php echo $row['berita_id']?>" class="form-control">
                        <input type="text" class="form-control" name="judul" placeholder="Isikan judul berita" value="<?php echo $row['judul']?>">
                    </div>
                    <div class="form-group">
                        <label for="artikel" >Isi</label>
                        <textarea name="isi" id="editor"class="form-control"><?php echo $row['isi']?></textarea>
            <script>
    CKEDITOR.replace('editor', {
      removePlugins: 'easyimage',
      removeButtons: 'PasteFromWord',
     
      
      filebrowserUploadUrl: 'upload-image-berita.php',
      filebrowserUploadMethod: 'form'
    });
  </script>
                        
                    </div>

                    <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<?php include "footer.php";?>