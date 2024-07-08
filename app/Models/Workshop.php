<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Workshop extends Model
{
    use HasFactory, Searchable;

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

    public function toSearchableArray()
    {
        $array = $this->toArray();

        unset($array['updated_at']);

        return  [
            'title' => $this->title,
            'note' => $this->note,
            'venue' => $this->venue,
            'type' => $this->type,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'fee' => $this->fee,
        ];

    }
}
