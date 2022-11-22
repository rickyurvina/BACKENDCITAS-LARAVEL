<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',

        'email',
        'phone',
        'date',
        'symptom',
        'owner_id'
    ];

    protected $casts = [
        'date' => 'date:Y-m',
    ];

    public function owner()
    {
        return $this->belongsTo(Owner::class,'owner_id');
    }

}
