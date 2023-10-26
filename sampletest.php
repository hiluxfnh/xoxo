

<?php
$width = 250;
$height = 250;
$image = imagecreatetruecolor($width, $height);
imagesavealpha($image, true);
$bgcolor = imagecolorallocatealpha($image, 0, 0, 0, 127); // transparent background
imagefill($image, 0, 0, $bgcolor);
header('Content-type: image/png');
imagepng($image);
?>