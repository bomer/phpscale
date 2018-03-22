<?php
//var_dump($_FILES);
$width=$_POST['width'];
$fname=$_FILES["image"]["tmp_name"];
$fcontents=file_get_contents($fname);

file_put_contents("before.jpg",$fcontents);
$img = new Imagick('before.jpg');
$img->scaleImage($width,0);

//header("Content-type: image/jpg");
//echo $img->getImageBlob();
$img->writeImage("after.jpg");
header('Location: index.html');
 ?>
