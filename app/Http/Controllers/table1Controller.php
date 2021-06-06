<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\table1;

class table1Controller extends Controller
{
    function show(){

        $data table1::all();
        return view('welcome',['table1'=>$data]);
    }
}
