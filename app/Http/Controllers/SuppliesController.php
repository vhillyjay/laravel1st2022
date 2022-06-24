<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\SuppliesController;

class SuppliesController extends Controller
{
    public function index(){

    }
    // for /supplies

    public function show($id){
        return view('details', ['id' => $id]); // 'id' can be called whatever you want
    }
    // for /supplies/{}
}
