<?php

// Virtuelna putanja do samog kontrolera
namespace App\Http\Controllers;

// require_once "Illuminate\Http\Request"
use App\Models\ContactModel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function getAllContacts()
    {
        $allContacts = ContactModel::all(); // SELECT * FROM contacts -> Vadi sve kontakte iz baze
        return view('allContacts', compact('allContacts')); // Učitavamo allContacts.blade.php i prosledjuemo varijablu $allContacts
    }
}
