<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\Operations;
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
        // Show new Note View
        return view('new_note');
    }

    public function editNote($id)
    {
        $id = Operations::decryptId($id);

        echo "Editando a nota ID:  " . $id;
    }
    public function deleteNote($id)
    {
        $id = Operations::decryptId($id);

        echo "Delete a nota ID:  " . $id;
    }
}
