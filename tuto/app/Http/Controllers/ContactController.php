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
        // $data = $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'message' => 'required',
        // ]);

<<<<<<< HEAD:tuto/app/Http/Controllers/ContactController.php
        Mail::raw("Nom: {$data['name']}", function($message)  {
            $message->to('yahya.boussakla.solicode@gmail.com', )->subject('Nouveau message de contact');
        });
=======
        // Mail::send('emails.contact', $data, function($message) use ($data) {
        //     $message->to('votre_email@exemple.com', 'Destinataire')->subject('Nouveau message de contact');
        // });
>>>>>>> parent of 656e75a (tuto3):app/Http/Controllers/ContactController.php

        // return redirect('/')->with('success', 'Votre message a bien été envoyé.');
        var_dump($request);
    }
}
