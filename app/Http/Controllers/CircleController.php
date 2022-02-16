<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Circle;
use GrahamCampbell\ResultType\Success;

class CircleController extends Controller
{
    // for Get api

    // public function index()
    // {
    //     return Circle::all();
    // }



    // for post api
    public function index(Request $req)
    {
        $circle = new Circle();
        $circle->uname=$req->uname;
        $circle->fname=$req->fname;
        $circle->lname=$req->lname;
        $result = $circle->save();

        if($result)
        {
            return ["Result" => "Data has been saved"];
        }

        else
        {
            return ["Result" => "Failed"];

        }

    }
}
