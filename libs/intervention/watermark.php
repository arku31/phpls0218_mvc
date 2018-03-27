<?php
require __DIR__ . "/../../vendor/autoload.php";

use Intervention\Image\ImageManagerStatic as Image;

chdir(__DIR__);

//http://php.net/imagettftext
$im = imagecreatetruecolor(400, 80);
$bg = imagecolorallocatealpha($im, 0, 0, 0, 127);
imagefill($im, 0, 0, $bg);
$textcolor = imagecolorallocate($im, 255, 0, 0);
putenv('GDFONTPATH=' . realpath('.'));
imagettftext($im, 35, 0, 35, 35, $textcolor, 'arial', 'Привет, мир!');


$image = Image::make('musya_origin.jpg')
    ->insert($im, 'bottom-right', 30, 30)->save('musya.jpg');
