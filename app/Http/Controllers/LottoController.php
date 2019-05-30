<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LottoController extends Controller
{
    //


    public function result(Request $request){
        //ingegeven nummers
        $inputs = array(
            'input1'=>(int)$request -> input('num1'),
            'input2'=>(int)$request -> input('num2'),
            'input3'=>(int)$request -> input('num3'),
            'input4'=>(int)$request -> input('num4'),
            'input5'=>(int)$request -> input('num5'),
            'input6'=>(int)$request -> input('num6')
        );

        //getrokken nummers
        $randomnumbers = array(
            'rand1'=>rand(1,45),
            'rand2'=>rand(1,45),
            'rand3'=>rand(1,45),
            'rand4'=>rand(1,45),
            'rand5'=>rand(1,45),
            'rand6'=>rand(1,45),
        );


        //check overeenkomende cijfers
        $counter = 0;



        return view('result', array('inputs'=> $inputs, 'randomnumbers'=>$randomnumbers, 'counter'=>$counter));
    }


}
