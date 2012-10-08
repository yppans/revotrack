<?php 
header ("Content-type: image/png"); 
$im = imagecreate (300, 300); 
$white = imagecolorallocate ($im,255,255,255); 
$blue = imagecolorallocate ($im,0,0,255); 
$black = imagecolorallocate ($im,0,0,0); 
imagestring ($im, 5, 0, 0, "I Love GDLib!!!", $blue); 
imagefilledrectangle ($im,50,50,100,100,$blue); 
imagerectangle ($im,50,50,100,100,$black); 
imagepng($im); 
?> 