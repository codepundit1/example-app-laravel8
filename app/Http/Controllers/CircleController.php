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



    // For update api
    public function update(Request $req)
    {

        $circle = Circle::find($req->id);
        $circle->uname = $req->uname;
        $circle->fname = $req->fname;
        $circle->lname = $req->lname;
        $result = $circle->save();

        if($result)
        {
              return ["Result" => "Successfully update"];
        }
        else
        {
            return ["Result" => "Update Failed"];
        }

    }



    // delete api

    public function delete($id)
    {
        $circle = Circle::find($id);
        $result = $circle->delete();

        if($result)
        {
              return ["Result" => "Successfully deleted"];
        }
        else
        {
            return ["Result" => "Deleted Failed"];
        }

    }
}
