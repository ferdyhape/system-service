<?php

namespace Ferdyhape\SystemService;

use Illuminate\Support\Facades\Storage;

class FileManagement
{
    public static function handleUploadFile($file, $folderName, $oldFile = null)
    {
        if ($file) {
            if ($oldFile) {
                self::deleteFile($oldFile);
            }
            return $file->store($folderName, 'public');
        }
        return $oldFile;
    }

    public static function deleteFile($filePath)
    {
        if ($filePath) {
            Storage::disk('public')->delete($filePath);
        }
    }
}
