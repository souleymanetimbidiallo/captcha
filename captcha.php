<?php

session_start();
 
$_SESSION['captcha'] = mt_rand(1000,9999);
header("Content-Type: image/png");
$img = imagecreate(100, 80)
or die("Impossible d'initialiser la bibliothèque GD");

$background_color = imagecolorallocate($img, 255, 255, 255);
$text_color = imagecolorallocate($img, 233, 14, 91);

imagestring($img, 23, 0, 3, $_SESSION['captcha'], $text_color);

imagepng($img);
imagedestroy($img);
 
?>