<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Loaitin;

class TestController extends Controller
{
     public function show()
     {
     	$data=Loaitin::all();

        return view('layouts.welcome',[
 
               'data'=>$data
        	]);
 
     }

     
}
