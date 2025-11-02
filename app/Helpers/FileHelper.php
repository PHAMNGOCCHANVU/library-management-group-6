<?php

namespace App\Helpers;

use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;

class FileHelper
{
    /**
     * Upload ảnh lên Cloudinary
     *
     * @param UploadedFile $file
     * @param string $folder Thư mục trong Cloudinary (ví dụ 'books')
     * @return string URL public của ảnh
     */
    public static function uploadImageToCloudinary(UploadedFile $file, $folder = 'books')
    {
        // Lấy tên file gốc không đuôi
        $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);

        // Tạo tên slug, thêm timestamp để tránh trùng
        $filename = Str::slug($originalName) . '-' . time();

        // Upload lên Cloudinary
        $uploadedFileUrl = Cloudinary::upload($file->getRealPath(), [
            'folder' => $folder,
            'public_id' => $filename,
            'overwrite' => true,
        ])->getSecurePath();

        return $uploadedFileUrl;
    }
}
