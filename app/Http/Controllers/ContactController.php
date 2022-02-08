<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        return view('pages.contact');
    }
    
    public function send(Request $request) {
        $data = array(
            'email' => $request->email,
            'name' => $request->name,
            'subject' => $request->subject,
            'bodyMessage' => $request->message
        );
            
        Mail::send('emails.contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('atencion@unisound.com.mx');
            $message->subject($data['subject']);
        });

        return redirect()->back()->with('message','¡You Email fue enviado!');
    }
}
