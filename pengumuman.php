<!doctype html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>website project</title>
   <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="bootstrap/plugins/ckeditor/ckeditor.js"></script>
</head>
<body>
<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3><span class="glyphicon glyphicon-bullhorn"></span> Pengumuman</h3>
				<ul class="list-group">
				<?php

        include "koneksi.php";
        $sql=$koneksi->query("select * from berita order by judul ASC");

        while($row= $sql->fetch_assoc()){
        ?>
				

					<li class="list-group-item"><?php echo $row['judul']?>
					<a href="detail-berita.php?id=<?php echo $row['berita_id']?>">
                    <button class="btn btn-xs btn-primary glyphicon glyphicon-zoom-in">detail</button>
                </a></li>
					
				</ul>
				<?php    
        }
        ?>
				
				</div>
			</div>
		</div>
	</div>
	<br><br><br><br>