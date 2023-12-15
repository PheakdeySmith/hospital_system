<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $data['contacts'] = Contact::all();
        return view('dashboard.contacts.index', $data);
    }

    public function create()
    {
        return view('dashboard.contacts.create');
    }

    public function store(Request $request)
    {
        $redirectRoute = $request->input('form_source') === 'front' ? 'front.contact' : 'contacts.index';
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string',
        ]);

        Contact::create($request->all());

        return redirect()->route('contacts.index')->with('success', 'Contact created successfully');
    }

    public function edit(Contact $contact)
    {
        return view('dashboard.contacts.edit', compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {
        $redirectRoute = $request->input('form_source') === 'front' ? 'front.contact' : 'contacts.index';
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string',
        ]);

        $contact->update($request->all());

        return redirect()->route($redirectRoute)->with('success', 'Contact updated successfully');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully');
    }
}
