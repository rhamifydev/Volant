<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
    /**
     * Display the lightweight contact inquiries dashboard.
     */
    public function index(Request $request): View
    {
        $search = $request->query('search');

        $query = Contact::query()->latest();

        if (! empty($search)) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('company', 'like', "%{$search}%")
                  ->orWhere('message', 'like', "%{$search}%");
            });
        }

        $contacts = $query->paginate(15)->withQueryString();

        $stats = [
            'total' => Contact::count(),
            'today' => Contact::where('created_at', '>=', now()->startOfDay())->count(),
            'companies' => Contact::distinct('company')->count('company'),
            'latest' => Contact::latest()->first()?->created_at?->diffForHumans() ?? 'None yet',
        ];

        return view('admin.dashboard', compact('contacts', 'stats', 'search'));
    }

    /**
     * Delete an inquiry.
     */
    public function destroy(Contact $contact): RedirectResponse
    {
        $contact->delete();

        return redirect()
            ->route('admin.index')
            ->with('status', 'Inquiry deleted successfully.');
    }
}
