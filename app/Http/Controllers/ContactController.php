<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Mail::raw('layo', $data, function($message) use ($data) {
            $message->to('yahyaboussakla.gmail.com', 'Destinataire')->subject('Nouveau message de contact');
        });

        return redirect('/')->with('success', 'Votre message a bien été envoyé.');
        
    }
}
