
<?php include "../header-berita.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-detail.php" method="POST">
            <table class="table table-bordered table-hover">
       
                <?php
                $id=$_GET['id'];
                include "../koneksi.php";
                $tampil=$koneksi->query("select * from berita where berita_id='$id'");
                $row=$tampil->fetch_assoc();
                ?>
        <thead>
            <tr>
                <th><font face="times new roman" size="6"><?php echo $row['judul']?></font></th>
                
            </tr> 
        </thead> 
        <tbody>
                <tr>
                <td><br><font face="times new roman" size="5"><?php echo $row['isi']?></font><br>
                </td>
                </tr>
                <td> <p><a class="btn btn-primary btn-sm" href="tampil-berita-user.php" role="button">Back</a></p></td>

        <?php    
        
        ?>
        </tbody>
        </table>
                </form>
            </div>
        </div>
    </div>


<?php include "footer.php";?>