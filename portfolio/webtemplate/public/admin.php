<?php
require_once('../private/initialize.php');
include_once("../private/shared/header.php");
if(!$_SESSION['admin']){
    redirect_to('template.php');
}
if(is_post_request()){
    if(isset($_FILES['upload'])){
        $file = $_FILES['upload'];
        $filename = $_FILES['upload']['name'];
        $filetmpname = $_FILES['upload']['tmp_name'];
        $filesize = $_FILES['upload']['size'];
        $fileerror = $_FILES['upload']['error'];
        $filetype = $_FILES['upload']['type'];
    
        $fileext = explode('.', $filename);
        $fileactext = strtolower(end($fileext));
    
        $allowed = array('jpg', 'jpeg', 'png', 'html', 'css', 'php', 'js');
        if(in_array($fileactext, $allowed)){
            if($fileerror === 0){
                //1,000,000 = 1mb
                if($filesize < 1000000){
                    $filenamenew = uniqid('', true).$filename;
                    $filedest = 'templates/'.$filenamenew;
                    move_uploaded_file($filetmpname, $filedest);
                    echo "File Uploaded";
                }else{
                    echo "file is to large";
                }
            }else{
                echo "Error uploading File";
            }
        }else{
            echo "You can not upload files of this type!";
        }
    }
}

?>
<h1>General Information</h1>
<div class="hero3"></div>
<form method="POST" action="admin.php" enctype="multipart/form-data">
	<input type="file" name="upload">
	<button type="submit" name="submit">Upload File</button>
</form>

<?php
include_once("../private/shared/footer.php");
?>
