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
    return view('welcome2');
});

Route::get('/supplies', function () { // /supplies is the url
    $schoolSupplies = [
        'type' => 'pencil',
        'brand' => 'HBW',
        'price' => 10
    ]; // variable to be passed on view
    // return view('supplies', $schoolSupplies); // page on views, variable from above/ working
    return view('supplies', [ //supplies is from views
        'type' => request('type'),
        'brand' => request('brand'),
        'price' => request('price') // request('') will get the value of query parameter(url)
    ]);
    // return "booksAndSupplies"; // text/html
    // return ["name" => "theChronicle", "type" => "books"]; // application/json
});
// routes shown on url

// Route::get('/supplies', function () { // /supplies for url
//     $supplies = [
//         ['type' => 'pencil', 'brand' => 'HBW'],
//         ['type' => 'eraser', 'brand' => 'HBW'],
//         ['type' => 'paper', 'brand' => 'National Bookstore']
//     ];
//     return view('supplies', ['supplies' => $supplies]); // supplies from views folder
// });

Route::get('/supplies/{id}', function ($id) {
    // use the $id variable to query the db for a record
    return view('details', ['id' => $id]); // 'id' can be called whatever you want
});