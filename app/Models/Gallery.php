<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = ['category', 'image'];

    public function gallerysubcategory()
    {
        return $this->belongsTo(GallerySubCategory::class, 'category');
    }
}
