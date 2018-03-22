<?php
//var_dump($_FILES);

$fname=$_FILES["image"]["tmp_name"];
$fcontents=file_get_contents($fname);
file_put_contents("image.jpg",$fcontents);
$img = new Imagick('image.jpg');
$img->scaleImage(5000,0);

header("Content-type: image/jpg");
echo $img->getImageBlob();

 ?>
