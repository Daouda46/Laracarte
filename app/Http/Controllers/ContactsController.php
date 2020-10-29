<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Mail\ContactMessage;
use App\Http\Requests\ContactRequest;

class ContactsController extends Controller
{
    public function create(){
        return view('contacts/create');
    }

    public function store(ContactRequest $request){

       
       $mailable = new ContactMessage($request->name, $request->email, $request->message);
       Mail::to('admin.laracarte@gmail.com')->send($mailable);

       return "Envoye!!";
    }
}
