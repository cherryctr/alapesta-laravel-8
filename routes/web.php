<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JasaSekitar;

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

// Route::get('/', function () {
//     return "Hallo testing";
// });


//ROUTE HOME
Route::get('/',[HomeController::class,'index']); 

// ROUTE JASA SEKITAR
Route::get('/list-jasa-sekitar',[JasaSekitar::class,'index']); 