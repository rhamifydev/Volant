<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volant Admin — Contact Inquiries Dashboard</title>
    <meta name="robots" content="noindex, nofollow">

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="alternate icon" href="{{ asset('images/volant_logo.png') }}">

    <!-- Google Fonts: Inter & Lobster -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Lobster&display=swap" rel="stylesheet">

    <!-- Tailwind & App Assets -->
    @vite(['resources/css/app.css'])

    <style>
        /* Light Dashboard Theme Overrides */
        body.light-dashboard {
            background-color: #f8fafc !important;
            color: #1e293b !important;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif !important;
        }
        .dashboard-header-font {
            font-family: 'Lobster', cursive !important;
            font-weight: 400 !important;
        }
    </style>
</head>
<body class="light-dashboard min-h-screen flex flex-col antialiased">
    
    <!-- Top Light Navbar -->
    <header class="bg-white border-b border-slate-200 sticky top-0 z-30 shadow-xs">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Brand & Breadcrumb -->
                <div class="flex items-center gap-3">
                    <a href="{{ route('home') }}" class="flex items-center gap-2.5 group">
                        <img src="{{ asset('images/volant_logo.png') }}" alt="Volant Logo" width="32" height="32" class="w-8 h-8 rounded-lg shadow-sm object-cover">
                        <span class="text-xl font-bold tracking-tight text-slate-900 group-hover:text-amber-600 transition-colors">Volant</span>
                    </a>
                    <span class="text-slate-300 font-light">/</span>
                    <span class="text-xs font-semibold uppercase tracking-wider px-2 py-0.5 rounded-md bg-slate-100 text-slate-700 border border-slate-200">
                        Admin Dashboard
                    </span>
                </div>

                <!-- Navigation Controls -->
                <div class="flex items-center gap-3">
                    <a href="{{ route('home') }}" 
                       class="inline-flex items-center gap-1.5 px-3 py-1.5 text-xs font-medium text-slate-600 hover:text-slate-900 bg-slate-100 hover:bg-slate-200 rounded-lg transition-colors">
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                        </svg>
                        <span>Back to Website</span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow py-8 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full space-y-6">
        
        <!-- Flash Alert -->
        @if (session('status'))
            <div class="p-4 rounded-xl bg-amber-50 border border-amber-200 flex items-center justify-between text-amber-800 text-sm shadow-xs" role="alert">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span>{{ session('status') }}</span>
                </div>
            </div>
        @endif

        <!-- Dashboard Header & Search -->
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
            <div>
                <h1 class="text-3xl text-slate-900 dashboard-header-font">Contact Inquiries</h1>
                <p class="text-xs text-slate-500 mt-1">Review and manage communications sent from the public Volant contact form.</p>
            </div>

            <!-- Search Bar -->
            <form action="{{ route('admin.index') }}" method="GET" class="flex items-center gap-2">
                <div class="relative w-64 sm:w-80">
                    <input type="text" 
                           name="search" 
                           value="{{ $search }}" 
                           placeholder="Search by name, company, email..." 
                           class="w-full pl-9 pr-3 py-2 text-xs rounded-lg border border-slate-300 bg-white text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-amber-400 focus:border-amber-500">
                    <svg class="w-4 h-4 text-slate-400 absolute left-3 top-2.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                @if ($search)
                    <a href="{{ route('admin.index') }}" class="px-2.5 py-2 text-xs text-slate-600 hover:text-slate-900 bg-slate-200 rounded-lg">Clear</a>
                @endif
                <button type="submit" class="px-3.5 py-2 text-xs font-semibold text-white bg-slate-900 hover:bg-slate-800 rounded-lg transition-colors">Search</button>
            </form>
        </div>

        <!-- Metric Stat Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="bg-white p-5 rounded-xl border border-slate-200 shadow-xs space-y-1">
                <span class="text-xs font-medium text-slate-500 uppercase tracking-wider">Total Inquiries</span>
                <div class="text-2xl font-bold text-slate-900">{{ $stats['total'] }}</div>
                <div class="text-[11px] text-slate-400">Recorded in database</div>
            </div>

            <div class="bg-white p-5 rounded-xl border border-slate-200 shadow-xs space-y-1">
                <span class="text-xs font-medium text-slate-500 uppercase tracking-wider">Received Today</span>
                <div class="text-2xl font-bold text-amber-600">{{ $stats['today'] }}</div>
                <div class="text-[11px] text-slate-400">Since midnight UTC</div>
            </div>

            <div class="bg-white p-5 rounded-xl border border-slate-200 shadow-xs space-y-1">
                <span class="text-xs font-medium text-slate-500 uppercase tracking-wider">Distinct Companies</span>
                <div class="text-2xl font-bold text-amber-600">{{ $stats['companies'] }}</div>
                <div class="text-[11px] text-slate-400">Unique organizations</div>
            </div>

            <div class="bg-white p-5 rounded-xl border border-slate-200 shadow-xs space-y-1">
                <span class="text-xs font-medium text-slate-500 uppercase tracking-wider">Latest Activity</span>
                <div class="text-base font-semibold text-slate-800 truncate">{{ $stats['latest'] }}</div>
                <div class="text-[11px] text-slate-400">Most recent entry</div>
            </div>
        </div>

        <!-- Inquiries Table / Card View -->
        <div class="bg-white rounded-xl border border-slate-200 shadow-xs overflow-hidden">
            <div class="px-6 py-4 border-b border-slate-200 flex items-center justify-between bg-slate-50/50">
                <span class="text-xs font-semibold text-slate-700 uppercase tracking-wider">
                    Messages List ({{ $contacts->total() }})
                </span>
                @if ($contacts->count() > 0)
                    <span class="text-[11px] text-slate-500 font-mono">
                        Showing page {{ $contacts->currentPage() }} of {{ $contacts->lastPage() }}
                    </span>
                @endif
            </div>

            @if ($contacts->count() === 0)
                <div class="p-12 text-center space-y-3">
                    <div class="w-12 h-12 mx-auto rounded-full bg-slate-100 flex items-center justify-center text-slate-400">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                        </svg>
                    </div>
                    <h3 class="text-base font-semibold text-slate-900">No contact inquiries found</h3>
                    <p class="text-xs text-slate-500 max-w-sm mx-auto">
                        {{ $search ? "No inquiries matched your search term '{$search}'." : "When prospective operators or partners reach out through the contact form, their submissions will appear here in real time." }}
                    </p>
                </div>
            @else
                <div class="divide-y divide-slate-200">
                    @foreach ($contacts as $contact)
                        <div class="p-6 hover:bg-slate-50/80 transition-colors space-y-4">
                            <!-- Header Row: Name, Company, Timestamp, Delete -->
                            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-amber-100 text-amber-800 font-bold flex items-center justify-center text-sm">
                                        {{ strtoupper(substr($contact->name, 0, 2)) }}
                                    </div>
                                    <div>
                                        <div class="flex items-center gap-2">
                                            <h3 class="text-sm font-bold text-slate-900">{{ $contact->name }}</h3>
                                            <span class="text-[11px] px-2 py-0.5 rounded-full bg-slate-100 text-slate-700 font-medium border border-slate-200">
                                                {{ $contact->company }}
                                            </span>
                                        </div>
                                        <div class="flex items-center gap-3 text-xs text-slate-500 mt-0.5">
                                            <a href="mailto:{{ $contact->email }}" class="text-amber-600 hover:underline flex items-center gap-1">
                                                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                                </svg>
                                                {{ $contact->email }}
                                            </a>
                                            <span>&bull;</span>
                                            <span title="{{ $contact->created_at }}">
                                                {{ $contact->created_at->format('M d, Y • H:i') }} ({{ $contact->created_at->diffForHumans() }})
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-center gap-2 self-end sm:self-auto">
                                    <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this inquiry?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="px-2.5 py-1 text-xs text-rose-600 hover:text-rose-800 hover:bg-rose-50 rounded border border-rose-200 transition-colors">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>

                            <!-- Message Content Box -->
                            <div class="p-4 rounded-lg bg-slate-50 border border-slate-200/80 text-xs sm:text-sm text-slate-800 whitespace-pre-line leading-relaxed">
                                {{ $contact->message }}
                            </div>

                            <!-- Footer Metadata: IP Address & User Agent -->
                            <div class="flex flex-wrap items-center gap-4 text-[11px] text-slate-400 font-mono">
                                <span>IP: {{ $contact->ip_address ?? 'Unknown' }}</span>
                                <span>&bull;</span>
                                <span class="truncate max-w-md" title="{{ $contact->user_agent }}">
                                    Device: {{ $contact->user_agent ? substr($contact->user_agent, 0, 80) . '...' : 'Standard HTTP' }}
                                </span>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                @if ($contacts->hasPages())
                    <div class="p-4 border-t border-slate-200 bg-slate-50/50">
                        {{ $contacts->links() }}
                    </div>
                @endif
            @endif
        </div>
    </main>

    <!-- Light Footer -->
    <footer class="bg-white border-t border-slate-200 py-6 mt-12 text-center text-xs text-slate-500">
        <p>&copy; {{ date('Y') }} Volant &bull; Administrative Review Interface</p>
    </footer>
</body>
</html>
