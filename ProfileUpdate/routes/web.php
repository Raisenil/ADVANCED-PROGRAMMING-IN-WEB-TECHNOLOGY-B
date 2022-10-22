<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterControllers;
use App\Http\Controllers\PagesController;
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
    return view('welcome');
});

Route::get('/register',[RegisterControllers::class,'formValidation']);
Route::post('/register',[RegisterControllers::class,'formValidationPost']);
Route::get('/home',[PagesController::class,'formLogIn']);
Route::post('/home',[PagesController::class,'formLogInPost']);
