<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index()
    {
        echo "Home page";
    }
    public function newNote()
    {
        echo "New note";
    }
}
