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
                <form action="proses-edit-fasilitas.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "../koneksi.php";
                $tampil=$koneksi->query("select * from Fasilitas where fasilitas_id='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="nama">nama</label>
                         <input type="hidden" name="fasilitas_id" value="<?php echo $row['fasilitas_id']?>" class="form-control">
                        <input type="text" class="form-control" name="nama" placeholder="Isikan nama fasilitas" value="<?php echo $row['nama']?>">
                    </div>
                    <div class="form-group">
                        <label for="artikel" >keterangan</label>
                        <textarea name="keterangan" id="editor"class="form-control"><?php echo $row['keterangan']?></textarea>
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