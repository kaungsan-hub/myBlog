<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User_Data;

class BlogController extends Controller
{
    public function welcome()
    {
        return view('testblog.welcome');
    }

    public function index()
    {
        $userdata= User_Data::all();
        return view('testblog.index');
    }

    public function save(Request $request)
    {
        $name= $request->name;
        $age= $request->age;
        $phone= $request->phone;

        User_Data::create([
            'name'=>$name,
            'age'=>$age,
            'phone'=>$phone
        ]);

        return redirect('/laratest')->with('msg','user created');

    }
}
