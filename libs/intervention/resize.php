<?php
require __DIR__."/../../vendor/autoload.php";

use Intervention\Image\ImageManagerStatic as Image;

$image = Image::make('musya_origin.jpg')
    ->resize(500, null, function ($image) {
        $image->aspectRatio();
    })
    ->save('musya.jpg', 80);
