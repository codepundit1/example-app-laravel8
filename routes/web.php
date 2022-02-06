<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\BladePracticeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// redirect
Route::get('/', function () {
    // return redirect('contact');
    return view('welcome');
});

// pass data with routing
Route::get('/about/{name}', function($name){
    return view('about', ['name' => $name]);
});

//small route
Route::view('/contact', 'contact');
Route::view('/services', 'services');


//pass data from route
Route::get('/users/{id}', [Users::class, 'index']);


//laravel7 route
// Route::get('users',"Users@index");


//view
// Route::get('/user_para/{name}/{id}',[Users::class, 'multiPara'] );
Route::get('/user_para/{name}/{id}', function($name, $id){
    return view('user_para', ['name'=>$name, 'id'=>$id]);
});


//component

Route::get('/user1', function(){

    return view('user1');
});

Route::get('/user2', function(){
    return view('user2');
});

Route::view('/user3', 'user3');

//blade

Route::get('/BladePractice', [BladePracticeController::class,'bladeTest']);


Route::get('/index', function(){
    return view('index');
});
