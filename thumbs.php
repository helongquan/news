<?php
include_once("functions/database.php");
$filename= $_GET['filename'];
$width = $_GET['width'];
$height = $_GET['height'];
$path="http://localhost:8080/images/"; //finish in "/"
// Content type
header('Content-type: image/jpeg');
// Get new dimensions
list($width_orig, $height_orig) = getimagesize($path.$filename);
if ($width && ($width_orig < $height_orig)) {
  $width = ($height / $height_orig) * $width_orig;
} else {
  $height = ($width / $width_orig) * $height_orig;
}
// Resample
$image_p = imagecreatetruecolor($width, $height);
$image = imagecreatefromjpeg($path.$filename);
imagecopyresampled($image_p,$image,0,0,0,0,$width,$height,$width_orig,$height_orig);
// Output
imagejpeg($image_p, null, 100);
// Imagedestroy
imagedestroy ($image_p);
?>