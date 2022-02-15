<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Member extends Model
{
    use HasFactory;

                                          //accessor


    public function getNameAttribute($value)
    {
        return ucFirst($value);  //accessor
    }

    public function getAddressAttribute($value)
    {
        return ($value) . ', Dhaka';
    }
}
