<?php
namespace App\Helpers;
use Storage;
use App\Helpers\FileHelper;

class FileHelper
{
    public static function image_upload(string $dir, string $format, $image = null)
    {
        if ($image != null) {
            $imageName = \Carbon\Carbon::now()->toDateString() . "-" . uniqid() . "." . $format;
            $publicDir = public_path($dir); // Obtain the public path for the directory

            if (!file_exists($publicDir)) {
                // Check if the directory exists in the public path, and create it if it doesn't
                mkdir($publicDir, 0755, true);
            }

            $image->move($publicDir, $imageName); // Move the uploaded image to the public path
        } else {
            $imageName = 'def.png';
        }

        return $imageName;
    }

    public static function image_update(string $dir, $old_image, string $format, $image = null)
    {
        if ($image == null) {
            return $old_image;
        }

        $publicDir = public_path($dir); 

        if (file_exists($publicDir . $old_image)) {
            unlink($publicDir . $old_image);
        }

        $imageName = FileHelper::image_upload($dir, $format, $image);
        return $imageName;
    }

    public static function image_unlink(string $dir, $old_image,){
        $publicDir = public_path($dir); 

        if (file_exists($publicDir . $old_image)) {
            unlink($publicDir . $old_image);
        }
        return true;
    }
}