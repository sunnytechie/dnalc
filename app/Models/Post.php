<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Post extends Model
{
    use HasFactory, Searchable;

    protected $fillable = ['title', 'content', 'thumbnail', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function toSearchableArray()
    {
        $array = $this->toArray();

        unset($array['updated_at']);

        return  [
            'title' => $this->title,
            'content' => $this->content,
        ];

    }
}
