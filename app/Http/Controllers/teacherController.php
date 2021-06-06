<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\teacher;

class teacherController extends Controller
{
    function show(){
    $data = teacher::all();
    return view('list',['teachers'=>$data]);
    }
}
