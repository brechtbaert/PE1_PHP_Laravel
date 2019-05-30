<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LottoController extends Controller
{
    //


    public function result(Request $request){

        //validatie (werkt niet)

        /* $this->validate($request,[
            'num1' => 'required|numeric',
            'num2' => 'required|numeric',
            'num3' => 'required|numeric',
            'num4' => 'required|numeric',
            'num5' => 'required|numeric',
            'nu6' => 'required|numeric',
        ]);
        */

        //ingegeven nummers
        $inputs = array(
            (int)$request -> input('num1'),
            (int)$request -> input('num2'),
            (int)$request -> input('num3'),
            (int)$request -> input('num4'),
            (int)$request -> input('num5'),
            (int)$request -> input('num6')
        );

        //getrokken nummers
        $randomnumbers = array(
            rand(1,45),
            rand(1,45),
            rand(1,45),
            rand(1,45),
            rand(1,45),
            rand(1,45),
        );


        //check overeenkomende cijfers
        $counter = 0;

        for ($i = 0; $i <= 5; $i++){
            if ($inputs[$i]==$randomnumbers[0]){
                $counter++;
            }
            elseif ($inputs[$i]==$randomnumbers[1]){
                $counter++;
            }
            elseif ($inputs[$i]==$randomnumbers[2]){
                $counter++;
            }
            elseif ($inputs[$i]==$randomnumbers[3]){
                $counter++;
            }
            elseif ($inputs[$i]==$randomnumbers[4]){
                $counter++;
            }
            elseif ($inputs[$i]==$randomnumbers[5]){
                $counter++;
            }
        }



        return view('result', array('inputs'=> $inputs, 'randomnumbers'=>$randomnumbers, 'counter'=>$counter));
    }


}
