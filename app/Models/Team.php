<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'title',
        'about',
        'quote',
        'experience',
        'email',
        'phone',
        'facebook',
        'twitter',
        'linkedin',
        'instagram',
        'thumbnail',
        'certificate',
    ];
}
