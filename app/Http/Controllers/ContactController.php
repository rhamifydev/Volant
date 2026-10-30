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
        // 1. Honeypot check: reject bots that populate the hidden honeypot field
        if (! empty($request->input('hp_website'))) {
            // Silently redirect with success to fool automated scrapers without polluting the database
            return redirect()
                ->route('contact.create')
                ->with('success', 'Thank you! Your message has been received.');
        }

        // 2. Form submission timing check (anti-bot)
        if ($timestamp = $request->input('form_token_time')) {
            $submittedAt = (int) base64_decode($timestamp);
            if ($submittedAt > 0 && (time() - $submittedAt) < 1) {
                // Submitted in less than 1 second - likely automated bot script
                return redirect()
                    ->route('contact.create')
                    ->with('success', 'Thank you! Your message has been received.');
            }
        }

        // 3. Strict server-side validation
        $validated = $request->validate([
            'name' => ['required', 'string', 'min:2', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'company' => ['required', 'string', 'min:2', 'max:120'],
            'message' => ['required', 'string', 'min:10', 'max:3000'],
        ], [
            'name.required' => 'Please enter your name.',
            'email.required' => 'A valid business or work email address is required.',
            'email.email' => 'Please provide a valid email address.',
            'company.required' => 'Please specify your company or organization.',
            'message.required' => 'Please provide a brief message explaining your use case.',
            'message.min' => 'Your message should be at least 10 characters long.',
        ]);

        // 4. Persistence into SQLite / database
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
            ->with('success', 'Thank you for reaching out to HOPn! Our Munich engineering team will review your requirements and respond promptly.');
    }
}
