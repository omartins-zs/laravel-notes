<?php

namespace App\Http\Controllers;

use App\Jobs\SendTestEmail;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function sendEmail()
    {
        // Enfileira o job para enviar um e-mail
        SendTestEmail::dispatch('teste@example.com');

        return "O Job foi enviado para a fila!";
    }
}
