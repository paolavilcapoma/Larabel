<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\v1\ProductosControllers;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get("/productos",[ProductosControllers::class,"obtenerLista"]);
Route::get("/productos/{id}",[ProductosControllers::class,"obtenerItem"]);
Route::post("/productos",[ProductosControllers::class,"create"]);
Route::put("/productos",[ProductosControllers::class,"update"]);
Route::patch("/productos",[ProductosControllers::class,"patch"]);
Route::delete("/productos/{id}",[ProductosControllers::class,"delete"]);