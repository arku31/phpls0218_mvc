<?php
require "../vendor/autoload.php";

use Intervention\Image\ImageManagerStatic as Image;

$image = Image::make('musya_origin.jpg')->resize(500,500)->save('musya.jpg', 100);