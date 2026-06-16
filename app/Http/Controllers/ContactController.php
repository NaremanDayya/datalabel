<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactInquiry;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name'        => 'required|string|max:100',
            'company'     => 'required|string|max:150',
            'email'       => 'required|email|max:150',
            'description' => 'required|string|max:2000',
        ]);

        Mail::to(config('mail.contact_address'))->send(new ContactInquiry($validated));

        return back()->with('success', 'Your inquiry has been received. We\'ll be in touch shortly.');
    }
}
