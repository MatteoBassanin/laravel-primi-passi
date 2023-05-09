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

    $hello = "Hello";
    $world = "World!";


    $data = [
        "hello" => $hello,
        "world" => $world,
    ];


    return view('welcome', $data);
})->name("welcome");

Route::get("newpage", function () {

    return view("newpage", ["message" => "DAJE ROMA !"]);
})->name("newpage");
