<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    public function index($id)
    {
        // echo $id;
        // echo " Hi I am Controller";



        //controller as API
        return ['name'=>'Jahid', 'Id'=>'173-35-266'];
    }

    // public function multiPara($name, $id){
    //         echo $id. '<br>' . $name;
    // }
}
