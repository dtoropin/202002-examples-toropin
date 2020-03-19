<?php

$file = '../img/GoOCWBNqwTI.jpg';
list($w, $h) = getimagesize($file);
$im_php = imagecreatefromjpeg($file);

$white = imagecolorallocatealpha($im_php, 255, 255, 255, 0);

$black = imagecolorallocatealpha($im_php, 0, 0, 0, 60);
$gray = imagecolorallocatealpha($im_php, 128, 128, 128, 80);
$font = __DIR__ . '/../font/Museo.ttf';

imagettftext($im_php, 400, 0, $w - $w + 3, $h * .51, $gray, $font, 'copy');
imagettftext($im_php, 400, 0, $w - $w + 5, $h * .5, $black, $font, 'copy');

$im_php = imagescale($im_php, 200);
$im_php = imagerotate($im_php, 45, $white);

header('Content-type: image/jpg');
imagejpeg($im_php);
imagedestroy($im_php);