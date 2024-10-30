<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('screens.contacts');
    }

    public function store(ContactRequest $request)
    {
        Contact::create(
            $request->validated()
        );

        return redirect()->route('contacts.index')->with('success', 'Nous avons reçu votre message et vous répondrons sous peu!');
    }

}
