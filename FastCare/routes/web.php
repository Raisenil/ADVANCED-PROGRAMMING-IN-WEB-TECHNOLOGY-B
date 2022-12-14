<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\AllUserController;
use App\Http\Controllers\dAllUserController;
use App\Http\Controllers\MailController;

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

Route::get('/', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});


Route::get('/register',[RegisterController::class,'formValidation']);
Route::post('/register',[RegisterController::class,'formValidationPost']);

Route::get('/requesthelp',[RegisterController::class,'formValidationRequest']);
Route::post('/requesthelp',[RegisterController::class,'formValidationRequestPost']);




Route::get('/loginpage', function () {
    return view('loginpage');
});

Route::get('/map', function () {
    return view('map');
});


Route::get('/login',[LogInController::class,'formLogIn'])->middleware('checklogin');
Route::post('/login',[LogInController::class,'formLogInPost'])->middleware('checklogin');


Route::post('/logout',[LogInController::class,'logout'])->middleware('checklogin');
Route::get('/logout', [LogINController::class,'logout']);

Route::get('/alluser',[AllUserController::class,'alluser']);

Route::get('/adminprofile',[AllUserController::class,'adminprofile']);

Route::get('/update',[AllUserController::class,'update']);
Route::post('/update',[AllUserController::class,'update']);

Route::get('/pupdate',[AllUserController::class,'pupdate']);
Route::post('/pupdate',[AllUserController::class,'pupdate']);

Route::get('/addUser',function (){return view('admin/addUser');});
Route::get('/user/delete/{id}',[AllUserController::class,'delete']);
Route::get('/user/edit/{id}',[AllUserController::class,'edit']);

Route::get('/addUser',function (){return view('admin/addUser');});

Route::get('/allpaitient',[AllUserController::class,'allpaitient']);
Route::get('/patient/delete/{id}',[AllUserController::class,'pdelete']);
Route::get('/patient/edit/{id}',[AllUserController::class,'pedit']);

//api test
Route::get('/alluserapi', function(){
    return view('alluserapi');
});

Route::get('/sendemail', [MailController::class,'index']);
Route::post('/sendemail/send',[MailController::class,'send']);
/*Route::group(['middleware'=>"web"],function(){
    Route::get('/alluser',[AllUserController::class,'alluser']);
    Route::get('/adminprofile',[AllUserController::class,'adminprofile']);
    Route::get('/update',[AllUserController::class,'update']);
    Route::post('/update',[AllUserController::class,'update']);
    Route::get('/addUser',function (){return view('admin/addUser');});
    Route::get('/user/delete/{id}',[AllUserController::class,'delete']);
    Route::get('/user/edit/{id}',[AllUserController::class,'edit']);
});*/

Route::get('/duser/edit/{id}',[dAllUserController::class,'edit']);