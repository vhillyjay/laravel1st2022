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

Route::get('/booksAndSupplies', function () {
    return view('booksAndSupplies');
    // return "booksAndSupplies"; // text/html
    // return ["name" => "theChronicle", "type" => "books"]; // application/json
});
// routes shown on url