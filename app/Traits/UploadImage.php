<?php

namespace App\Traits;


use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

trait UploadImage
{

    public function uploadOne(UploadedFile $file, $folder = null, $width = null, $height = null, $filename = null): string
    {
        // Check if the folder exists or not || If not this creates the required folder.
        File::ensureDirectoryExists(public_path() . '/uploads/' . $folder);

        if (is_null($filename)) {
            $name = Str::random(25) . '.' . $file->getClientOriginalExtension();
        } else {
            $name = $filename . '.' . $file->getClientOriginalExtension();
        }

        if ($width == null || $height == null) {
            Image::make($file)
                ->save('uploads/' . $folder . $name);
        } else {
            Image::make($file)
                ->fit($width, $height)
                ->save('uploads/' . $folder . $name);
        }

        return $folder . $name;
    }

    /**
     * @param null $path
     */
    public function deleteOne($path = null)
    {
        if ($path) {
            File::delete('uploads/' . $path);
        }
    }
}
