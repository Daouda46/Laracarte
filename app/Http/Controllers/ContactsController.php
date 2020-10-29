<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Mail\ContactMessage;
use App\Http\Requests\ContactRequest;
use App\Models\Message;

class ContactsController extends Controller
{
    public function create(){
        return view('contacts/create');
    }

    public function store(ContactRequest $request){

         
       $message = Message::create($request->only('name', 'email', 'message'));
       

       Mail::to(config('laracarte.admin_support_email'))
            ->send(new ContactMessage($message));

       flashy()->success('Nous vous repondrons dans le plus bref delai .');

       return redirect()->route('home');
    }
}
