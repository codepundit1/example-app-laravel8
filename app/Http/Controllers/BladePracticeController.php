<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladePracticeController extends Controller
{
    //
    function bladeTest(){
        $data = ['komola', 'banghi', 'tormuj', 'sosha', 'khejur'];
        return view('BladePractice',['names'=>$data]);
    }
}
