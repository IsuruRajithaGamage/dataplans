<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tablea;

class tableaController extends Controller
{
    function show(){

        $data = tablea::all();
        return view('list',['tableas'=>$data]);
    }
    
}
