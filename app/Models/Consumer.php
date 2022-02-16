<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consumer extends Model
{
    use HasFactory;

    public function getCompany()
    {
        return $this-> hasOne('App\Models\Company');
    }

}

