<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>@yield('title', 'Volant — Plain Language Control for Robots and Drones')</title>
    <meta name="description" content="@yield('meta_description', 'Tell any robot or drone what to do in plain language. Verified before it moves. Volant is a deterministic software safety layer by HOPn, Munich.')">
    <meta name="keywords" content="robotics, autonomous drones, plain language robot control, formal verification, safety barrier, HOPn Munich, industrial robotics, humanoid safety">
    <meta name="author" content="HOPn (Munich)">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="sitemap" type="application/xml" title="Sitemap" href="{{ route('sitemap') }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'Volant — Plain Language Control for Robots and Drones')">
    <meta property="og:description" content="@yield('meta_description', 'Tell any robot or drone what to do in plain language. Verified before it moves.')">
    <meta property="og:site_name" content="Volant">
    <meta property="og:locale" content="en_US">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="@yield('title', 'Volant — Plain Language Control for Robots and Drones')">
    <meta name="twitter:description" content="@yield('meta_description', 'Tell any robot or drone what to do in plain language. Verified before it moves.')">

    <!-- Favicon & Touch Icons -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="alternate icon" href="{{ asset('volant-icon.jpg') }}">
    <link rel="apple-touch-icon" href="{{ asset('volant-icon.jpg') }}">

    <!-- Theme Color for Mobile Browsers -->
    <meta name="theme-color" content="#080c14">

    <!-- Scripts & Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#080c14] text-slate-200 antialiased min-h-screen flex flex-col selection:bg-cyan-500 selection:text-white">
    <!-- Skip to Content for Screen Readers & Keyboard Navigation -->
    <a href="#main-content" class="sr-only focus:not-sr-only focus:fixed focus:top-4 focus:left-4 focus:z-50 focus:px-4 focus:py-2 focus:bg-cyan-500 focus:text-slate-950 focus:font-semibold focus:rounded-md focus:shadow-xl focus:outline-none">
        Skip to main content
    </a>

    <!-- Top Navigation Header -->
    <header class="sticky top-0 z-40 w-full border-b border-slate-800/80 bg-[#080c14]/90 backdrop-blur-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Brand Logo -->
                <div class="flex items-center gap-3">
                    <a href="{{ route('home') }}" class="flex items-center gap-3.5 group focus:outline-none" aria-label="Volant Home">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-cyan-500 to-emerald-400 p-[1.5px] shadow-lg shadow-cyan-500/20 group-hover:shadow-cyan-500/40 transition duration-300 overflow-hidden">
                            <img src="{{ asset('volant-icon.jpg') }}" alt="Volant Icon" width="40" height="40" class="w-full h-full object-cover rounded-[10px]">
                        </div>
                        <span class="text-2xl font-extrabold tracking-tight text-white group-hover:text-cyan-300 transition-colors">
                            Volant
                        </span>
                    </a>
                </div>

                <!-- Desktop Navigation Links -->
                <nav class="hidden md:flex items-center gap-1" aria-label="Primary Navigation">
                    <a href="{{ route('home') }}" 
                       class="px-4 py-2 text-sm font-medium rounded-lg transition-colors {{ request()->routeIs('home') ? 'text-cyan-400 bg-slate-800/60 font-semibold' : 'text-slate-300 hover:text-white hover:bg-slate-800/40' }}"
                       {{ request()->routeIs('home') ? 'aria-current="page"' : '' }}>
                        Home
                    </a>
                    <a href="{{ route('product') }}" 
                       class="px-4 py-2 text-sm font-medium rounded-lg transition-colors {{ request()->routeIs('product') ? 'text-cyan-400 bg-slate-800/60 font-semibold' : 'text-slate-300 hover:text-white hover:bg-slate-800/40' }}"
                       {{ request()->routeIs('product') ? 'aria-current="page"' : '' }}>
                        Product
                    </a>
                    <a href="{{ route('about') }}" 
                       class="px-4 py-2 text-sm font-medium rounded-lg transition-colors {{ request()->routeIs('about') ? 'text-cyan-400 bg-slate-800/60 font-semibold' : 'text-slate-300 hover:text-white hover:bg-slate-800/40' }}"
                       {{ request()->routeIs('about') ? 'aria-current="page"' : '' }}>
                        About HOPn
                    </a>
                    <a href="{{ route('contact.create') }}" 
                       class="px-4 py-2 text-sm font-medium rounded-lg transition-colors {{ request()->routeIs('contact.*') ? 'text-cyan-400 bg-slate-800/60 font-semibold' : 'text-slate-300 hover:text-white hover:bg-slate-800/40' }}"
                       {{ request()->routeIs('contact.*') ? 'aria-current="page"' : '' }}>
                        Contact
                    </a>
                </nav>

                <!-- Action CTA -->
                <div class="hidden md:flex items-center gap-3">
                    <a href="{{ route('contact.create') }}" 
                       class="inline-flex items-center gap-2 px-4 py-2 text-sm font-medium text-slate-950 bg-gradient-to-r from-cyan-400 to-emerald-400 hover:from-cyan-300 hover:to-emerald-300 rounded-lg shadow-md shadow-cyan-500/20 hover:shadow-cyan-500/30 transition-all focus:outline-none focus:ring-2 focus:ring-cyan-400 focus:ring-offset-2 focus:ring-offset-slate-900">
                        <span>Get in Touch</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="flex md:hidden">
                    <button id="mobile-menu-btn" 
                            type="button" 
                            aria-expanded="false" 
                            aria-controls="mobile-menu" 
                            aria-label="Toggle navigation menu"
                            class="p-2.5 rounded-lg text-slate-400 hover:text-white hover:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-cyan-400">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Drawer (Collapsible) -->
        <div id="mobile-menu" class="hidden md:hidden border-b border-slate-800 bg-[#0c121e] px-4 pt-3 pb-5 space-y-2">
            <a href="{{ route('home') }}" 
               class="block px-3 py-2.5 rounded-lg text-base font-medium {{ request()->routeIs('home') ? 'bg-cyan-500/10 text-cyan-400' : 'text-slate-300 hover:bg-slate-800' }}">
                Home
            </a>
            <a href="{{ route('product') }}" 
               class="block px-3 py-2.5 rounded-lg text-base font-medium {{ request()->routeIs('product') ? 'bg-cyan-500/10 text-cyan-400' : 'text-slate-300 hover:bg-slate-800' }}">
                Product (How It Works)
            </a>
            <a href="{{ route('about') }}" 
               class="block px-3 py-2.5 rounded-lg text-base font-medium {{ request()->routeIs('about') ? 'bg-cyan-500/10 text-cyan-400' : 'text-slate-300 hover:bg-slate-800' }}">
                About HOPn & Founder
            </a>
            <a href="{{ route('contact.create') }}" 
               class="block px-3 py-2.5 rounded-lg text-base font-medium {{ request()->routeIs('contact.*') ? 'bg-cyan-500/10 text-cyan-400' : 'text-slate-300 hover:bg-slate-800' }}">
                Contact Us
            </a>
            <div class="pt-2">
                <a href="{{ route('contact.create') }}" 
                   class="w-full flex items-center justify-center gap-2 px-4 py-2.5 text-base font-semibold text-slate-950 bg-gradient-to-r from-cyan-400 to-emerald-400 rounded-lg shadow">
                    <span>Contact Our Team</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </header>

    <!-- Main Content Area -->
    <main id="main-content" class="flex-grow">
        @yield('content')
    </main>

    <!-- Global Footer -->
    <footer class="border-t border-slate-800/80 bg-[#060910] text-slate-400" aria-labelledby="footer-heading">
        <h2 id="footer-heading" class="sr-only">Footer</h2>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10">
                <!-- Col 1: Volant / HOPn Munich -->
                <div class="md:col-span-2 space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-lg bg-gradient-to-tr from-cyan-500 to-emerald-400 p-[1px] overflow-hidden">
                            <img src="{{ asset('volant-icon.jpg') }}" alt="Volant Icon" width="36" height="36" class="w-full h-full object-cover rounded-[7px]">
                        </div>
                        <span class="text-xl font-bold tracking-tight text-white">Volant</span>
                    </div>
                    <p class="text-sm text-slate-400 max-w-md leading-relaxed">
                        Volant is a software layer that lets operators tell robots and drones what to do in plain language, with behavior checked for safety before the machine moves.
                    </p>
                    <div class="flex items-center gap-2 text-xs text-slate-400 font-mono">
                        <span class="inline-block w-2 h-2 rounded-full bg-emerald-400 animate-pulse" aria-hidden="true"></span>
                        <span>HOPn — Munich, Germany</span>
                    </div>
                </div>

                <!-- Col 2: Navigation -->
                <div class="space-y-3">
                    <h3 class="text-sm font-semibold uppercase tracking-wider text-slate-200">Platform</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="{{ route('home') }}" class="hover:text-cyan-400 transition-colors">Home</a></li>
                        <li><a href="{{ route('product') }}" class="hover:text-cyan-400 transition-colors">How It Works</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-cyan-400 transition-colors">About HOPn & Founder</a></li>
                        <li><a href="{{ route('contact.create') }}" class="hover:text-cyan-400 transition-colors">Contact Form</a></li>
                    </ul>
                </div>

                <!-- Col 3: Legal & Standards -->
                <div class="space-y-3">
                    <h3 class="text-sm font-semibold uppercase tracking-wider text-slate-200">Legal & Compliance</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="{{ route('legal.impressum') }}" class="hover:text-cyan-400 transition-colors">Impressum (Legal Notice)</a></li>
                        <li><a href="{{ route('legal.datenschutz') }}" class="hover:text-cyan-400 transition-colors">Datenschutz (Privacy Policy)</a></li>
                        <li><a href="{{ route('sitemap') }}" class="hover:text-cyan-400 transition-colors">XML Sitemap</a></li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Row -->
            <div class="mt-12 pt-8 border-t border-slate-800/80 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-400 gap-4">
                <p>&copy; {{ date('Y') }} HOPn. All rights reserved. Munich, Germany.</p>
                <div class="flex items-center gap-4">
                    <span>Safety Barrier Architecture</span>
                    <span>&bull;</span>
                    <span>Deterministic Robotics</span>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
