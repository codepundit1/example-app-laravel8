<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\BladePracticeController;
use App\Http\Controllers\UserForm;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\EmployeeController;

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

                                         //session//
Route::get('homepage', [UserController::class, 'Api']);
Route::post('users', [UserController::class, 'userLogin']);
Route::view('profile', 'profile');

Route::get('/login', function(){
    if(session()->has('name'))
    {
        return redirect('profile');
    }
    return view('user');
});



Route::get('/logout', function(){
    if(session()->has('name'))
    {
        session()->pull('name');
    }
    return redirect('login');
});


                                        //flash session


Route::view('add', 'FlashSession.add');

Route::post('memberlist', [UserController::class, 'addMember']);

                           //file upload


Route::view('upload', 'FileUpload.upload');
Route::post('upload', [UserController::class, 'fileUpload']);


                                //Language change / Localization


// default change from config>app.php search locale

Route::view('customer', 'LanguageChange.customer');


                            //and dynamically like this

// Route::get('/customer/{la}', function($la)
// {
//     App::setLocale($la);
//     return view('LanguageChange.customer');

// });


                       // fetch data from data base

Route::get('list', [TeacherController::class, 'index']);


// Save data in database employee

Route::view('employee', 'employee');
Route::post('employees', [EmployeeController::class,'addEmployee']);


// delete from database
Route::get('employeeData', [EmployeeController::class, 'index']);
Route::get('delete/{id}', [EmployeeController::class, 'delete']);

//show and update
Route::get('edit/{id}', [EmployeeController::class, 'showData']);
Route::post('edit', [EmployeeController::class, 'update']);















                                    // redirect

// Route::get('/welcome', function () {
//     // return redirect('contact');
//     return view('welcome');
// });

                        // // pass data with routing

// Route::get('/about/{name}', function($name){
//     return view('about', ['name' => $name]);
// });

                                 // //small route

// Route::view('/contact', 'contact');
// Route::view('/services', 'services');


                            // //pass data from route

// Route::get('/users/{id}', [Users::class, 'index']);


                            // //laravel7 route
                            // // Route::get('users',"Users@index");


                            // //view
                            // // Route::get('/user_para/{name}/{id}',[Users::class, 'multiPara'] );
// Route::get('/user_para/{name}/{id}', function($name, $id){
//     return view('user_para', ['name'=>$name, 'id'=>$id]);
// });


                                // //component

// Route::get('/user1', function(){

//     return view('user1');
// });

// Route::get('/user2', function(){
//     return view('user2');
// });

// Route::view('/user3', 'user3');

                                    // //blade

// Route::get('/BladePractice', [BladePracticeController::class,'bladeTest']);

                            // // include view to view/php in js/ csrf/   blade:2
// Route::get('/index', function(){
//     return view('index');
// });



                                    // // form data submit

// Route::post('/form', [UserForm::class, 'getData']);
// Route::view('login', 'form');

// Route::view('second', 'secondpage');
// Route::view('third', 'thirdpage');
// Route::view('noaccess', 'noaccess');


                        //Group middle ware home page == gmwh


// Route::view('home', 'home');

// Route::view('/no', 'no');

// Route::group(['middleware' => ['protectedPage']], function(){
//     Route::view('/grpM2', 'grpM2');
//     Route::view('/grpM3', 'grpM3');
// });



// Route middleware
// Route::view('something', 'something')->middleware('middleware name');


