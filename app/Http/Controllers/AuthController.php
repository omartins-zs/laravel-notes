<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login()
    {
        return view('login');
    }
    public function loginSubmit(Request $request)
    {
        // Form validation

        $request->validate([
            'text_username' => 'required|min:3',
            'text_password' => ['required', 'min:3']
        ]);

        // Get user Input
        $username =  $request->input('text_username');
        $password = $request->input('text_password');

        echo "OK";
        dump($request);

        echo $request->input('text_username');
        echo "<br>";
        echo $request->input('text_password');

        //   return view('login');
    }
    public function logout()
    {
        echo 'logout';
    }
}
