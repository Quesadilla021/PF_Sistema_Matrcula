<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail()
    {
        $details=[
            'title' => 'Correo prueba',
            'body'=> 'Esta es una prueba'
        ];

        Mail::to("ianques021@gmail.com")->send(new TestMail($details));
        return 'correo enviado';

    }
}
