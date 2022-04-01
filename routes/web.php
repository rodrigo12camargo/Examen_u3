<?php

use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\Api;

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
    return view('Templates.index');
})->name ('index');  // Nombre de la ruta  

route::get('/templates ', function (){ 
    return view('Templates.index');
})->name ('templates'); // Nombre de la ruta 



