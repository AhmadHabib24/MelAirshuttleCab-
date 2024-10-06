<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;



class ContactController extends Controller
{
    //
    public function loadview()
    {
        return view('user.contact-us');
    }
    public function store(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Save the contact information
        Contact::create($request->all());

        // Redirect with success message
        return redirect()->route('contact')->with('success', 'Your message has been sent successfully.');
    }
    public function index()
    {
        $contacts = Contact::all();
        return view('auth.contact.index', compact('contacts'));
    }
    public function edit($id)
    {
        
        $contact = Contact::findOrFail($id);
        return view('auth.contact.edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        $contact = Contact::findOrFail($id);
        $contact->update($request->all());

        return redirect()->route('contacts.index')->with('success', 'Contact updated successfully!');
    }

    public function destroy($id)
    {
        $booking = Contact::findOrFail($id);
        // dd($booking);
        $booking->delete();
        return redirect()->route('contacts.index')->with('success', 'Booking deleted successfully');
    }
}
