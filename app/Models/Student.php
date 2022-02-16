<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // public function getDevice()
    // {
    //     return $this-> hasMany('App\Models\Device');
    // }

    public function getDevice()
    {
        return $this-> hasOne('App\Models\Device');
    }
}


//many relation not correct
