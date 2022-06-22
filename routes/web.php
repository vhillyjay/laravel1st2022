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

Route::get('/supplies', function () {
    $schoolSupplies = [
        'type' => 'pencil',
        'brand' => 'Mongol',
        'price' => 10
    ]; // variable to be passed on view
    return view('supplies', $schoolSupplies); // variable from above
    // return "booksAndSupplies"; // text/html
    // return ["name" => "theChronicle", "type" => "books"]; // application/json
});
// routes shown on url