<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    /**
     * Show the contact page.
     */
    public function create(): View
    {
        return view('contact');
    }

    /**
     * Store a newly created contact message.
     */
    public function store(Request $request): RedirectResponse
    {
        // 1. Honeypot check: Naive automated scrapers populate hidden honeypot fields
        // We use a dedicated anti-spam token field that humans and autofill never populate
        if ($request->filled('_bot_catch') && $request->input('_bot_catch') !== '') {
            // Silently redirect automated spam bots without persisting
            return redirect()
                ->route('contact.create')
                ->with('success', 'Thank you! Your inquiry has been received.');
        }

        // 2. Server-side validation with clear, friendly messages
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:150'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'company' => ['required', 'string', 'max:150'],
            'message' => ['required', 'string', 'min:2', 'max:5000'],
        ], [
            'name.required' => 'Please enter your name.',
            'email.required' => 'A valid work email is required.',
            'email.email' => 'Please provide a valid email format.',
            'company.required' => 'Please provide your company or institution name.',
            'message.required' => 'Please include a message regarding your inquiry.',
            'message.min' => 'Please provide at least a short message.',
        ]);

        // 3. Persist cleanly to the database
        Contact::create([
            'name' => strip_tags(trim($validated['name'])),
            'email' => strtolower(trim($validated['email'])),
            'company' => strip_tags(trim($validated['company'])),
            'message' => strip_tags(trim($validated['message'])),
            'ip_address' => $request->ip(),
            'user_agent' => substr((string) $request->userAgent(), 0, 500),
        ]);

        return redirect()
            ->route('contact.create')
            ->with('success', 'Thank you for reaching out! Your inquiry has been received and saved successfully.');
    }
}
