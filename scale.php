<?php


$name=$_POST['name'];
$fname=$_FILES["image"]["tmp_name"];
if($name || true ){ //Replace name with useful parameter
	file_put_contents("image.jpg",file_get_contents($fname));
}
$img = new Imagick('image.jpg');
$img->scaleImage(5000,0);

header("Content-type: image/jpg");
echo $img->getImageBlob();

 ?>