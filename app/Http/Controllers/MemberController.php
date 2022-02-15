<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Cow;

class MemberController extends Controller
{
    //accesor
    function index()
    {
        return Member::all();
    }


    //mutator                 //from cow model
    function cow()
    {
       $cow = new Cow();
       $cow -> name='baffalow';
       $cow -> color='baffalow color';
       $cow -> address='lalmati';
       $cow -> save();

    }
}
