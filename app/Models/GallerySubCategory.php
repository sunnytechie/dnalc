<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GallerySubCategory extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'gallery_category_id'];

    public function gallery_category()
    {
        return $this->belongsTo(GalleryCategory::class);
    }

    public function galleries()
    {
        return $this->hasMany(Gallery::class, 'category');
    }
}
