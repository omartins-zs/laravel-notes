<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index()
    {
        // Load Users notes
        $id = session('user.id');
        $user = User::find($id)->toArray();
        $notes = User::find($id)->notes()->get()->toArray();

        echo '<pre>';
        print_r($user);
        print_r($notes);

        die();


        // Show Home View
        return view('home', compact('user', 'notes'));
    }

    public function newNote()
    {
        echo "New note";
    }
}
