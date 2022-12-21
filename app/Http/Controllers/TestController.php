<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
class TestController extends Controller
{
    public function test1()
    {
         $bye ='goodbye';
         $age ='5';
         return view('test1',compact('bye','age'));
    }
}
//     public function greet(){
//         return "hello";
//     }
//     public function greetDevsname($name)
//     {
//         return "hello ".$name. " developers";
//     }
//     public function greetDevs()
//     {
//         return "hello devs";
//     }
//     
// }

