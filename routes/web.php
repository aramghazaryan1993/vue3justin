<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
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

//Auth::routes();

//Route::get('/', function () {
//    return view('index');
//});

Route::get('{any}', function () {
    return view('index');
})->where('any', '.*');


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//
//Route::middleware('auth:sanctum')->get('/user', function(request $request){
////    return $request->user();
//
//    Route::post('register', [AuthController::class, "register"]);
//});


