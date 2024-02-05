<?php

namespace App\Helper;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class Helper
{
    static function uploadFile($image_64, $dir = 'images')
    {
        $extension = explode('/', explode(':', substr($image_64, 0, strpos($image_64, ';')))[1])[1];
        $replace = substr($image_64, 0, strpos($image_64, ',') + 1);
        $image = str_replace($replace, '', $image_64);
        $image = str_replace(' ', '+', $image);
        $imageName = $dir . '/' . time() . Str::random(rand(2, 4)) . '.' . $extension;
        Storage::disk('public')->put($imageName, base64_decode($image));
        return "/storage/$imageName";
    }
}
