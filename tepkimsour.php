<?php 
    if(isset($_POST["buttonSubmit"])){ 
 
        $source = $_FILES["fileUploading"]["tmp_name"]; 
 
        $name = $_FILES["fileUploading"]["name"]; 
        $name = time() . md5(rand()) . "." . end(explode(".", $name)); 
        $destination = "media/" . $name; 
         
        move_uploaded_file($source, $destination); 
         
    } 
?> 
<form action="" method="post" enctype="multipart/form-data"> 
    <input type="file" name="fileUploading" id="fileUploading"> 
    <input type="submit" value="UPLOAD" name="buttonSubmit"> 
</form>