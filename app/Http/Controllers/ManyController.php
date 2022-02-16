<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class ManyController extends Controller
{
    ////one to many

    function index()
    {
        return Student::find(4)->getDevice;
    }
}


//many relation not correct
