<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php";?>
<div class="container">
		<div class="row">
			<div class="col-md-8">	
				<form action="proses-input-berita.php" method="post">
					<div class="form-group">
						<h3>Input Artikel</h3>
						<label for="judul">Judul:</label>
						<input type="text" class="form-control" name="judul" placeholder="Isikan judul berita">
					</div>	
					<div class="form-group">
						<label for="artikel">Isi:</label>
						<textarea name="isi" id="editor"></textarea>
            <script>
    CKEDITOR.replace('editor', {
      removePlugins: 'easyimage',
      removeButtons: 'PasteFromWord',
     
      
      filebrowserUploadUrl: 'upload-image-berita.php',
      filebrowserUploadMethod: 'form'
    });
    CKEDITOR.dialog.add("easyimageAlt",function(a){return{title:a.lang.easyimage.commands.altText,minWidth:200,minHeight:30,onOk:function(){var a=CKEDITOR.tools.trim(this.getValueOf("info","txtAlt"));this._.selectedImage.setAttribute("alt",a)},onHide:function(){delete this._.selectedImage},onShow:function(){var b=this.getContentElement("info","txtAlt");this._.selectedImage=a.widgets.focused.parts.image;b.setValue(this._.selectedImage.getAttribute("alt"));b.focus()},contents:[{id:"info",label:a.lang.easyimage.commands.altText,
accessKey:"I",elements:[{type:"text",id:"txtAlt",label:a.lang.easyimage.commands.altText}]}]}});
  </script>
						
					</div>
					<button type="submit" class="btn btn-info">Simpan</button>
					<button type="reset" class="btn btn-danger">Batal</button>
				</form>
		</div>
	</div>
</div>
<?php include "footer.php";?>