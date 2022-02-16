<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consumer;


class RelationController extends Controller
{
    //
    function index()
    {
        return Consumer::find(1)->getCompany;
    }




}
