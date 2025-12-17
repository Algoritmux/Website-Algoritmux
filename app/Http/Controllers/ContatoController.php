<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContatoMail;

class ContatoController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name-user' => 'required|string|max:255',
            'email-user' => 'required|email',
            'mensagem-user' => 'required|string',
        ]);

        $data = $request->all(); 

        // dd($data);

        Mail::to('leonardo.macedo@algoritmux.com')->send(new ContatoMail($data));

        return redirect()->away('http://127.0.0.1:8000/obrigado');
    }
}
