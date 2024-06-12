<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryCategory extends Model
{
    use HasFactory;

    protected $fillable = ['title'];

    public function gallery_sub_categories()
    {
        return $this->hasMany(GallerySubCategory::class);
    }
}
