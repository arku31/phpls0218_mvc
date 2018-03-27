<?php
require __DIR__ . "/../../vendor/autoload.php";

use Intervention\Image\ImageManagerStatic as Image;

chdir(__DIR__);

putenv('GDFONTPATH=' . realpath('.'));
$image = Image::make('musya_origin.jpg');
$image->text('Привет, Мир', $image->width() / 2, $image->height() / 2, function ($font) {
    $font->file('arial.ttf');
    $font->size('224');
    $font->color(array(255, 0, 0, 0.5));
    $font->align('center');
    $font->valign('center');
})
    ->save('musya.jpg');