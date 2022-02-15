<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;   //controller member
use Illuminate\Database\Eloquent\Model;

class Cow extends Model
{
    use HasFactory;

    public $timestamps = false;

    //mutator

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = 'Mr. '. ($value);  //mutator
    }

    public function setAddressAttribute($value)
    {
        $this->attributes['address'] = ($value) . ", Dhaka";  //mutator
    }



    // public function setNameAttribute($value)
    // {
    //     if(substr($value,0,3)=='Mr.'){
    //         $this->attributes['name']=$value;
    //     }
    //     else{
    //     $this->attributes['name']="Mr. ".$value;
    //     }
    // }
}
