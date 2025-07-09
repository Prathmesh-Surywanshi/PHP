<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header("Content-type: image/png");

$img = @imagecreate(200, 200) or die("GD Library not working!");
$bg = imagecolorallocate($img, 240, 0, 0);
$txt_color = imagecolorallocate($img, 0, 255, 0);
imagestring($img, 5, 10, 50, "PRATHMESH", $txt_color);
imagepng($img);
imagedestroy($img);
?>
