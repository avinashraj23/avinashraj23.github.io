<?php

$char=array_flip(array(0,9),range('A','Z'));
$i=0;
$text;
while($i<6)
{
$text=araay_rand($char);
$i++;

}
header("Context-type:image/jpg");
$image=imagecreate(65,20);
$back_color=imagecolorallocate($image,0,0,0);
$text_color=imagecolorallocate($image,100,100,100);
imagestring($image,10,0,0,$text_color)
imagejpeg($image);
imagedestroy($image);

?>