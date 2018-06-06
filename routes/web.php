<?php

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
Route::prefix('/')->group(function () {
   Route::get('Empresa', function () {
        return view("navbar.empresa");
    });

    Route::get('Serviços', function () {
        return view("navbar.servicos");
    });

    Route::get('Sistemas', function () {
        return view("navbar.sistemas");
    });

  
    Route::get('EasyReader', function () {
        return view("navbar.easy");
    });

   
    

} );