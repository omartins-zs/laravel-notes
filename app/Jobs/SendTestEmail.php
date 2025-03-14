<?php

namespace App\Jobs;

use App\Mail\TestEmail;
use Illuminate\Bus\Batchable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;

class SendTestEmail implements ShouldQueue
{
    use Batchable;

    protected $email;

    // Recebe o e-mail como parâmetro
    public function __construct($email)
    {
        $this->email = $email;
    }

    // Método handle() que é executado quando o job é processado
    public function handle()
    {
        // Simula o tempo de envio do e-mail
        sleep(5);  // Simula um atraso de 5 segundos

        // Aqui você pode colocar o envio real de e-mail
        Mail::to($this->email)->send(new TestEmail());
    }
}
