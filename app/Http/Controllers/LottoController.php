<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function result(Request $request){
        $num1 = $request -> input('num1');
        $num2 = $request -> input('num2');
        $num3 = $request -> input('num3');
        $num4 = $request -> input('num4');
        $num5 = $request -> input('num5');
        $num6 = $request -> input('num6');


        return view('result', array('numbers' => $num1,$num2,$num3,$num4,$num5,$num6));
    }
}
