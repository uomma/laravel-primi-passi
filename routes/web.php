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

//home  
Route::get('/', function () {


    $data = [
        'title' => 'i primi passi con laravel!!',
        'traduzione' => 'first steps with laravel!',
    ];
    return view('home', $data);
});

//esp
Route::get('/spagnolo', function () {
    $vamos = [
        'vamos' => 'primero pasos en laravel!!'
    ];


    return view('traduction', $vamos);
});

//ita
Route::get('/italiano', function () {


    $andiamo = [
        'andiamo' => 'i primi passi con laravel!!',
    ];
    return view('traduzione', $andiamo);
});

//eng
Route::get('/inglese', function () {


    $lesgo = [
        'lesgo' => 'first steps with laravel!',
    ];
    return view('translate', $lesgo);
});
