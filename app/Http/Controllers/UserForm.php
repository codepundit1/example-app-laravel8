<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserForm extends Controller
{
    public function getData(Request $req){
        $validated = $req->validate([
           'username' => 'required | max:10',
           'upassword' => 'required | min:5',
        ]);
        return $req->input();
    }
}
