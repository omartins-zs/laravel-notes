<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index($value)
    {
        return view('main', ['value' => $value]);

        // return view('main')->with('value',$value);
        // return view('main')->with('apelido',$value);
    }

    public function page2($value)
    {
        return view('page2', ['value' => $value]);

        // return view('main')->with('value',$value);
        // return view('main')->with('apelido',$value);
    }

    public function page3($value)
    {
        return view('page3', ['value' => $value]);

        // return view('main')->with('value',$value);
        // return view('main')->with('apelido',$value);
    }
}
