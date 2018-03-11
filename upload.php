<?php
$path = "uploads/";
$valid_file_formats = array("jpg", "png", "gif", "bmp","jpeg");
if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
{
$name = $_FILES['photo']['name'];
$size = $_FILES['photo']['size'];
if(strlen($name)) {
list($txt, $ext) = explode(".", $name);
if(in_array($ext,$valid_file_formats)) {
if($size<(1024*1024)) {
$image_name = time().$session_id.".".$ext;
$tmp = $_FILES['photo']['tmp_name'];
if(move_uploaded_file($tmp, $path.$image_name)){
mysql_query("UPDATE users SET profile_photo='$image_name' WHERE uid='$session_id'");
echo "<img src='uploads/".$image_name."' class='preview'>";
}
else
echo "Image Upload failed";
}
else
echo "Image file size maximum 1 MB";
}
else
echo "Invalid file format";
}
else
echo "Please select image";
exit;
}
?>



 
<html>
<head>
  <title>Upload Image Without Page Load Using Ajax jQuery And PHP</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script type="text/javascript" src="jquery-3.2.0.min.js"></script>
<script type="text/javascript" src="jquery.form.js"></script>
<script>
$(document).ready(function() {
$('#photo').live('change', function() {
$("#preview").html('');
$("#preview").html('<img src="loader.gif" alt="Uploading...."/>');
$("#image_upload_form").ajaxForm({
target: '#preview'
}).submit();
});
});
</script>
</head>
<body style="padding-top:50px;">
  <div class="upload_container">
<br clear="all" />
<center>
<div style="width:350px" align="center">
<div id='preview'></div>
<form id="image_upload_form" method="post" enctype="multipart/form-data" action='image_upload.php' autocomplete="off">
<div class="browse_text">Browse Image File:</div>
<div class="file_input_container">
<div class="upload_button"><input type="file" name="photo" id="photo" class="file_input" /></div>
</div><br clear="all">
</form>
</div>
</center>
<br clear="all" />
</div>
</body>
</html>