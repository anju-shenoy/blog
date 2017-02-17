<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class helocontroller extends Controller
{
    //
    public function index()
    {
        return view('calc');
        
    } 
    public function add(Request $request) {
        $n1=$request->number1;
        $n2=$request->number2;
        $n3=$n1+$n2;
        return view('sum',['result'=>$n3]);
        
    }
}
