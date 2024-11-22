<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $request->validate(
            // Rules
            [
                'text_username' => 'required|email',
                'text_password' => ['required', 'min:6', 'max:16']
            ],
            // Error messages
            [
                'text_username.required' => 'O username é obrigatório',
                'text_username.email' => 'Username deve ser um email válido',
                'text_password.required' => 'A password é obrigatória',
                'text_password.min' => 'A password deve ter pelo menos :min caracteres',
                'text_password.max' => 'A password deve ter no máximo :max caracteres'
            ]
        );

        // Get user Input
        $username =  $request->input('text_username');
        $password = $request->input('text_password');

        // Check iif User Exists
        $user = User::where('username', $username)
                        ->where('deleted_at', NULL)
                        ->first();

        if (!$user) {
            return redirect()->back()->withInput()->with('loginError', 'Username ou Password incorreto');
        }

        echo "<pre>";
        print_r($user);
    }
    public function logout()
    {
        echo 'logout';
    }
}
