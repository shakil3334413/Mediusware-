<?php

namespace App\Repositories;

use App\Models\ProductImage;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ProductImageRepository extends Repository
{
    public function model()
    {
        return ProductImage::class;
    }

    public function store(UploadedFile $file, string $path,  string $type = 'image'): ProductImage
    {
        $path = Storage::put('/'.trim($path, '/'), $file, 'public');

        return $this->create([
            'type' => $type,
            'src' => $path,
            'media_able_id' => null,
            'media_able_type' => null,
        ]);
    }
}
