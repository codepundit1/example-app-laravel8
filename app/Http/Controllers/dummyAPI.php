<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyAPI extends Controller            //API
{
    //
    public function index()
    {
        return [
            'name' => 'jahid',
            'address' => 'mirzapur',
            'phone' => '0163286311',
        ];
    }
}
