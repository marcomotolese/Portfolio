<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('portfolio.landing');
});

Route::view('/privacy-policy', 'portfolio.privacy-policy')->name('privacy.policy');




Route::post('/contact', function (Request $request) {
    $data = $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'email'],
        'subject' => ['required', 'string', 'max:255'],
        'message' => ['required', 'string'],
        'privacy_consent' => ['accepted'],
    ]);

    // In produzione puoi cambiare destinatario e contenuto come preferisci
    Mail::raw(
        "Nuovo messaggio dal portfolio:\n\nNome: {$data['name']}\nEmail: {$data['email']}\nOggetto: {$data['subject']}\n\n{$data['message']}",
        function ($mail) use ($data) {
            $mail->to('marcomotolese10@gmail.com')
                ->subject('[Portfolio] Nuovo messaggio: ' . $data['subject']);
        }
    );

    return redirect('/')
        ->with('status', 'Grazie per il messaggio! Ti risponderò al più presto.');
});
