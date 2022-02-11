<?php

use Illuminate\Support\Facades\Route;

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


//llamando a la mivista
Route::get('/mivista', function () {
    return view('mivista');
});

Route::get('/mipresentacion', function(){
    return view('mipresentacion');
});

//llamando a la mivista
// Route::post('/', function () {
//     return view('HOLA');
// });