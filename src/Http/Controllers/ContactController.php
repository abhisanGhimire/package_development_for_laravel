<?php

namespace abhisanGhimire\Contact\Http\Controllers;

use abhisanGhimire\Contact\Mail\ContactMailable;
use abhisanGhimire\Contact\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {

        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message, $request->name, $request->sender_email));
        Contact::create($request->all());
        return redirect()->route('contact');
    }
}
