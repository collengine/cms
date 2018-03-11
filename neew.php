<?php
if(isset($_POST['upload_image']))
{
 $uploadfile=$_FILES["upload_file"]["tmp_name"];
 $folder="images/";
 move_uploaded_file($_FILES["upload_file"]["tmp_name"], "$folder".$_FILES["upload_file"]["name"]);
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
 $('form').ajaxForm(function() {
$('#success_message').html("Uploaded");
 });
});
</script>
</head>
<body style="padding-top:50px;">
  <form class="uploadform" method="post" enctype="multipart/form-data" 
action='upload.php'>
Upload your image <input type="file" name="imagefile" />
<input type="submit" value="Submit" name="submitbtn" id="submitbtn">
</form>
<!-- The uploaded image will display here -->
<div id='viewimage'></div>
</body>
</html>