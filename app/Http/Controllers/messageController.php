<?php

namespace App\Http\Controllers;

use App\Mail\messageReceived;
use Illuminate\Support\Facades\Mail;

class messageController extends Controller
{
    public function store()
    {
    	$message = request()->validate([
    		'name' => 'required',
    		'email' => 'required|email',
    		'subject' => 'required',
    		'content' => 'required|min:3'
    	], [
            'name.required' => __('I need your name')
        ]);

        //Enviar email
        
        Mail::to('j_felipe05@hotmail.com')->queue(new messageReceived($message));

    	return back()->with('status', 'Recibimos tu mensaje, te responderemos en menos de 24 horas.');
    }
}
