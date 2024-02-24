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
                <form action="proses-edit-dosen.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "../koneksi.php";
                $tampil=$koneksi->query("select * from dosen where id_dosen='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="hidden" name="id_dosen" value="<?php echo $row['id_dosen']?>" class="form-control">
                        <input type="text" name="nama" value="<?php echo $row['nama']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nidn">NIDN</label>
                        <input type="text" name="nidn" value="<?php echo $row['nidn']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control">
                            <option value="<?php echo $row['jenis_kelamin']?>" selected><?php echo $row['jenis_kelamin']?></option>
                            <option value="Laki-laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control"><?php echo $row['alamat']?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="nidn">Email</label>
                        <input type="email" name="email" value="<?php echo $row['email']?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="telepon">NO. Telepon</label>
                        <input type="number" name="telepon" value="<?php echo $row['telepon']?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="mengajar_mk">Mengajar Mata Kuliah</label>
                        <input type="text" name="mengajar_mk" value="<?php echo $row['mengajar_mk']?>" class="form-control">
                    </div>

                    <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<?php include "footer.php";?>