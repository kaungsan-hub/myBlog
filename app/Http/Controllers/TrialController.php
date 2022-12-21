<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class TrialController extends Controller
{
    public function trial1(){
        $name='kyawgyi';
        $age='54';
        echo $age,$name;
        return view('monday',compact('name','age'));
     
    }
}
  