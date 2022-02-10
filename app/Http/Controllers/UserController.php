<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    //
    function Api()
    {
        $UserList = Http::get('https://reqres.in/api/users?page=1');
        return view('homepage', ['UserList'=> $UserList['data']]);
    }

    function userLogin(Request $req){
        $validated = $req->validate([
            'name' => 'required | max:15',
            'password' => 'required | min:5',
         ]);

        $data = $req->input();
        $req->session()->put('name', $data['name']);
        return redirect('profile');
    }


    function addMember(Request $req)
    {
        $data = $req->input('user');
        $req->session()->flash('user', $data);
        return redirect('add');
    }

    function fileUpload(Request $req)
    {
        $validated = $req->validate([
           'file' => 'required',
        ]);
        return $req->file('file')->store('docs');
    }
}
