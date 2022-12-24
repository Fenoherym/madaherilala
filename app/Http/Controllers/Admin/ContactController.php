<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index()
    {
        $contacts = Contact::all();

        return view('admin.contact.index', compact('contacts'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "telephone" => ['required']
        ]);

        Contact::findOrFail($id)->update([
            "adresse" => $request->adresse,
            "email" => $request->email,
            "telephone" => $request->telephone
        ]);

        return redirect()->back()->with("success", "Modification réussi");
    }
}
