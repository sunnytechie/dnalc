<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workshopapplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'email',
        'phone',
        'country',
        'institution',
        'scholarship',
        'info_source',
        'referral',
        'workshop_id',
        'othersource',
        'scholarshiprequestamount',
        'scholarshipreason',
        'question1',
        'question2',
        'question3',
        'question4',
        'question5',
        'status',
        'role',
        'address',
        'area',
        'reference',
    ];

    public function workshop()
    {
        return $this->belongsTo(Workshop::class);
    }
}
