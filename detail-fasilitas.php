
<?php include "header.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-detail.php" method="POST">
            <table class="table table-bordered table-hover">
       
                <?php
                $id=$_GET['id'];
                include "koneksi.php";
                $tampil=$koneksi->query("select * from fasilitas where fasilitas_id='$id'");
                $row=$tampil->fetch_assoc();
                ?>
        <thead>
            <tr>
                <th><?php echo $row['nama']?></th>
                
            </tr> 
        </thead> 
        <tbody>
                <tr>
                <td><br><?php echo $row['keterangan']?><br>
                </td>
                </tr>
                <td> <p><a class="btn btn-primary btn-sm" href="tampil-berita.php" role="button">Back</a></p></td>

        <?php    
        
        ?>
        </tbody>
        </table>
                </form>
            </div>
        </div>
    </div>


<?php include "footer.php";?>