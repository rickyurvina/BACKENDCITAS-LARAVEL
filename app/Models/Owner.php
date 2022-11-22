<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'name'];

    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'owner_id');
    }

    public function concatCodeName()
    {
        return $this->code . '-' . $this->name;
    }


}
