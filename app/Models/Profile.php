<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    public function frameworks()
    {
        return $this->hasMany(Framework::class);
    }

    public function hobbies()
    {
        return $this->hasMany(Hobby::class);
    }
}
