<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class MainController extends Controller
{
    //
    public function index()
    {
        // Load Users notes
        $id = session('user.id');
        $notes = User::find($id)->notes()->get()->toArray();

        // Show Home View
        return view('home', ['notes' => $notes]);
        // return view('home', compact('notes'));
    }

    public function newNote()
    {
        echo "New note";
    }
    public function editNote($id)
    {
        try {
            $id = Crypt::decrypt($id);
            // $id =
        } catch (DecryptException $e) {
            return redirect()->route('home');
        }

        echo "Editando a nota ID:  " . $id;
    }
    public function deleteNote($id)
    {
        try {
            $id = Crypt::decrypt($id);
            // $id =
        } catch (DecryptException $e) {
            return redirect()->route('home');
        }

        echo "Delete a nota ID:  " . $id;
    }
}
