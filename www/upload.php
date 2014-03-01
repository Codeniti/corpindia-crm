<?php
$i = 0;
// Really Complex upload code which allows different image sizes
if(isset($_REQUEST['submit']))
{
  $filename=  $_FILES["imgfile"]["name"];
  $file_name= $filename;
  if ((($_FILES["imgfile"]["type"] == "image/gif")|| ($_FILES["imgfile"]["type"] == "image/jpeg") || ($_FILES["imgfile"]["type"] == "image/png")  || ($_FILES["imgfile"]["type"] == "image/pjpeg")) && ($_FILES["imgfile"]["size"] < 200000000))
  {
    if(file_exists($_FILES["imgfile"]["name"]))
    {
      echo "File name exists.";
    }
    else
    {
      move_uploaded_file($_FILES["imgfile"]["tmp_name"],"uploads/$filename");
      echo "<strong>Upload Successful .</strong> <a href='uploads/$file_name'>Click here</a> to view the uploaded image";
      
    }
  }
  else
  {
    echo "invalid file.";
  }
}
else
{
?>
<html>
  <head>
    <title>File Chooser</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
<form method="post" enctype="multipart/form-data">
<strong style="color:#FFF">File name:</strong><input class="text-primary" type="file" name="imgfile"><br>
<input class="btn-primary" type="submit" name="submit" value="Upload">
</form>
</body>
</html>
<?php
}
?>  