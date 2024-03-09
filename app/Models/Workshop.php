<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'type',
        'start_date',
        'end_date',
        'venue',
        'slots',
        'fee',
        'note',
        'flyer',
        'status',
    ];

    public function workshopapplications()
    {
        return $this->hasMany(Workshopapplication::class);
    }
}
