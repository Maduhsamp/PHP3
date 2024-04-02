<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();

        return view('contact', compact('contacts'));
    }

    public function store(){
        $contact = new Contact();

        $contact->name = 'Maria Eduarda Sampietro';
        $contact->email = 'mariaduda@gmail.com';
        $contact->telefone = '(42) 99999-9999';
        $contact->data_nascimento = '2003-08-01';
        $contact->save();
    }

    public function update(){
        $contact = Contact::find(3);
        $contact->name = 'Maduh Sampietro';
        $contact->save();
    }

    public function destroy($id){
        $contact = Contact::find($id);
        $contact->delete();
    }
}
