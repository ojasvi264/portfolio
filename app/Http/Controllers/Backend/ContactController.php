<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::latest()->get();
        return view('backend.contact', compact('contacts'));
    }

    public function destroy(Contact $contact){
        $contact->delete();
        return redirect()->route('contact.index')->withMsg('Contact has been deleted successfully.');
    }
}
