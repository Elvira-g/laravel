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

Route::get('/hello/{name}', function (string $name){
    return "Hello, ". $name;
});

Route::get('/about', function (){
    return "Some information about Project";
});

Route::get('/news', function (){
    return " <h1> News </h1>
                <h2>Article 1</h2>
                <p>Here you will see some news</p>
    ";
});
