@extends('layouts.app')

@section('title', 'Contact HOPn — Get in Touch | Munich, Germany')
@section('meta_description', 'Contact HOPn in Munich regarding Volant. Submit your inquiry to discuss plain-language verification and control for industrial arms, humanoids, mobile robots, and drones.')

@section('content')
<!-- Page Header / Hero Section -->
<section class="relative py-24 sm:py-32 border-b border-slate-800/80 overflow-hidden bg-grid-pattern">
    <!-- Contact Page Hero Background Image with High Visibility -->
    <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none">
        <img src="{{ asset('images/contact.webp') }}" 
             alt="Contact HOPn Robotics — Engineering & Deployment Inquiries" 
             aria-hidden="true" 
             class="w-full h-full object-cover object-center scale-100 opacity-80 sm:opacity-90 filter contrast-110 brightness-95">
        <!-- Balanced vignette gradient overlay ensuring the background is clearly visible while typography pops -->
        <div class="absolute inset-0 bg-gradient-to-b from-[#09090b]/75 via-[#09090b]/40 to-[#09090b]"></div>
    </div>

    <!-- Ambient Radial Glows -->
    <div class="absolute inset-0 pointer-events-none glow-radial-amber opacity-80" aria-hidden="true"></div>
    <div class="absolute inset-0 pointer-events-none glow-radial-gold opacity-60" aria-hidden="true"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-slate-950/90 border border-amber-500/40 text-xs font-mono text-amber-300 shadow-xl shadow-black/80 backdrop-blur-md">
            <span class="w-2 h-2 rounded-full bg-amber-400 animate-ping" aria-hidden="true"></span>
            <span>Inquiries &amp; Deployments</span>
        </div>
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-white tracking-tight drop-shadow-[0_4px_16px_rgba(0,0,0,0.95)]">
            Contact Our Engineering Team
        </h1>
        <p class="text-base sm:text-lg lg:text-xl text-slate-100 max-w-2xl mx-auto leading-relaxed drop-shadow-[0_2px_12px_rgba(0,0,0,0.95)]">
            Have a question about Volant or want to explore integrating our verification layer into your fleet? Send us a message below.
        </p>
    </div>
</section>

<!-- Contact Form Section -->
<section class="py-20 relative overflow-hidden">
    <!-- Subtle Background Image Layer continuing through the form section -->
    <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none">
        <img src="{{ asset('images/contact.webp') }}" 
             alt="HOPn Robotics Contact Background" 
             aria-hidden="true" 
             class="w-full h-full object-cover object-center opacity-25 filter contrast-110 brightness-75">
        <div class="absolute inset-0 bg-gradient-to-b from-[#09090b] via-[#09090b]/85 to-[#09090b]"></div>
    </div>

    <div class="relative z-10 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            
            <!-- Left Info Column -->
            <div class="lg:col-span-5 space-y-8">
                <div>
                    <div class="flex items-center gap-3 mb-2">
                        <div class="w-11 h-11 rounded-xl bg-slate-900 border border-slate-700 p-0.5 overflow-hidden shrink-0 shadow-md">
                            <img src="{{ asset('images/hopn_ug_logo.jpg') }}" alt="HOPn UG Logo" width="44" height="44" class="w-full h-full object-cover rounded-lg">
                        </div>
                        <div>
                            <span class="text-xs font-mono uppercase tracking-wider text-amber-400">Headquarters</span>
                            <h2 class="text-2xl font-bold text-white">HOPn UG &bull; Munich</h2>
                        </div>
                    </div>
                    <p class="text-sm text-slate-300 mt-2 leading-relaxed">
                        We are based in Munich, Germany, developing the verified safety software layer for next-generation robotics and autonomous flight.
                    </p>
                </div>

                <div class="space-y-4 text-sm">
                    <div class="glass-panel p-5 rounded-xl border border-slate-800 flex items-start gap-3.5">
                        <div class="w-9 h-9 rounded-lg bg-amber-950/80 border border-amber-800/60 flex items-center justify-center text-amber-400 shrink-0">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-white font-semibold">Location</h3>
                            <p class="text-slate-400 text-xs mt-0.5">Munich, Bavaria, Germany</p>
                        </div>
                    </div>

                    <div class="glass-panel p-5 rounded-xl border border-slate-800 flex items-start gap-3.5">
                        <div class="w-9 h-9 rounded-lg bg-amber-950/80 border border-amber-800/60 flex items-center justify-center text-amber-400 shrink-0">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-white font-semibold">Verified Safety Guarantee</h3>
                            <p class="text-slate-400 text-xs mt-0.5">Pre-motion invariant verification for arms, humanoids, AMRs, and UAVs.</p>
                        </div>
                    </div>

                    <div class="glass-panel p-5 rounded-xl border border-slate-800 flex items-start gap-3.5">
                        <div class="w-9 h-9 rounded-lg bg-slate-800 border border-slate-700 flex items-center justify-center text-slate-300 shrink-0">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-white font-semibold">Direct Review</h3>
                            <p class="text-slate-400 text-xs mt-0.5">Every message is stored securely and reviewed directly by our engineering group.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Form Column -->
            <div class="lg:col-span-7">
                <div class="glass-panel p-8 sm:p-10 rounded-2xl border border-slate-800">
                    
                    <!-- Flash Success Message -->
                    @if (session('success'))
                        <div class="mb-8 p-4 rounded-xl bg-amber-950/80 border border-amber-500/50 flex items-start gap-3 shadow-lg shadow-amber-950/40" role="alert">
                            <svg class="w-5 h-5 text-amber-400 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <div>
                                <h3 class="text-sm font-semibold text-amber-300">Message Delivered Successfully</h3>
                                <p class="text-xs text-amber-200/90 mt-1 leading-relaxed">{{ session('success') }}</p>
                            </div>
                        </div>
                    @endif

                    <!-- Error Alert Header -->
                    @if ($errors->any())
                        <div class="mb-8 p-4 rounded-xl bg-rose-950/80 border border-rose-500/50 flex items-start gap-3" role="alert">
                            <svg class="w-5 h-5 text-rose-400 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                            <div>
                                <h3 class="text-sm font-semibold text-rose-300">Please correct the indicated errors:</h3>
                                <ul class="text-xs text-rose-200/90 mt-1 list-disc list-inside space-y-0.5">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-6" novalidate>
                        @csrf

                        <!-- Anti-Spam Honeypot Field (Hidden, autofill-proof) -->
                        <div style="display:none !important;" aria-hidden="true">
                            <label for="_bot_catch">Leave empty</label>
                            <input type="text" name="_bot_catch" id="_bot_catch" tabindex="-1" autocomplete="new-password" value="">
                        </div>

                        <!-- Name Field -->
                        <div>
                            <label for="name" class="block text-xs font-mono text-slate-300 uppercase tracking-wider mb-2">
                                Full Name <span class="text-rose-400">*</span>
                            </label>
                            <input type="text" 
                                   name="name" 
                                   id="name" 
                                   required 
                                   value="{{ old('name') }}"
                                   placeholder="e.g. Dr. Markus Weber"
                                   autocomplete="name"
                                   aria-required="true"
                                   @error('name') aria-invalid="true" aria-describedby="name-error" @enderror
                                   class="w-full px-4 py-3 rounded-lg bg-slate-950/70 border {{ $errors->has('name') ? 'border-rose-500 ring-1 ring-rose-500' : 'border-slate-800 focus:border-amber-400' }} text-slate-100 placeholder-slate-500 text-sm focus:outline-none transition-colors">
                            @error('name')
                                <p id="name-error" class="mt-1.5 text-xs text-rose-400 font-mono">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Email Field -->
                        <div>
                            <label for="email" class="block text-xs font-mono text-slate-300 uppercase tracking-wider mb-2">
                                Work Email <span class="text-rose-400">*</span>
                            </label>
                            <input type="email" 
                                   name="email" 
                                   id="email" 
                                   required 
                                   value="{{ old('email') }}"
                                   placeholder="name@organization.com"
                                   autocomplete="email"
                                   aria-required="true"
                                   @error('email') aria-invalid="true" aria-describedby="email-error" @enderror
                                   class="w-full px-4 py-3 rounded-lg bg-slate-950/70 border {{ $errors->has('email') ? 'border-rose-500 ring-1 ring-rose-500' : 'border-slate-800 focus:border-amber-400' }} text-slate-100 placeholder-slate-500 text-sm focus:outline-none transition-colors">
                            @error('email')
                                <p id="email-error" class="mt-1.5 text-xs text-rose-400 font-mono">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Company Field -->
                        <div>
                            <label for="company" class="block text-xs font-mono text-slate-300 uppercase tracking-wider mb-2">
                                Company / Institution <span class="text-rose-400">*</span>
                            </label>
                            <input type="text" 
                                   name="company" 
                                   id="company" 
                                   required 
                                   value="{{ old('company') }}"
                                   placeholder="e.g. Bavarian Robotics GmbH"
                                   autocomplete="organization"
                                   aria-required="true"
                                   @error('company') aria-invalid="true" aria-describedby="company-error" @enderror
                                   class="w-full px-4 py-3 rounded-lg bg-slate-950/70 border {{ $errors->has('company') ? 'border-rose-500 ring-1 ring-rose-500' : 'border-slate-800 focus:border-amber-400' }} text-slate-100 placeholder-slate-500 text-sm focus:outline-none transition-colors">
                            @error('company')
                                <p id="company-error" class="mt-1.5 text-xs text-rose-400 font-mono">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Message Field -->
                        <div>
                            <label for="message" class="block text-xs font-mono text-slate-300 uppercase tracking-wider mb-2">
                                Message / Robot Architecture <span class="text-rose-400">*</span>
                            </label>
                            <textarea name="message" 
                                      id="message" 
                                      rows="5" 
                                      required 
                                      placeholder="Tell us about your robotic or drone platform, operational constraints, and plain language control requirements..."
                                      aria-required="true"
                                      @error('message') aria-invalid="true" aria-describedby="message-error" @enderror
                                      class="w-full px-4 py-3 rounded-lg bg-slate-950/70 border {{ $errors->has('message') ? 'border-rose-500 ring-1 ring-rose-500' : 'border-slate-800 focus:border-amber-400' }} text-slate-100 placeholder-slate-500 text-sm focus:outline-none transition-colors">{{ old('message') }}</textarea>
                            @error('message')
                                <p id="message-error" class="mt-1.5 text-xs text-rose-400 font-mono">{{ $message }}</p>
                            @enderror
                            <p class="mt-1 text-[11px] text-slate-400 font-mono">Minimum 10 characters.</p>
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <button type="submit" 
                                    class="w-full flex items-center justify-center gap-2 px-6 py-3.5 text-sm font-semibold text-slate-950 bg-gradient-to-r from-amber-400 via-amber-500 to-orange-500 hover:from-amber-300 hover:to-orange-400 rounded-lg shadow-lg shadow-amber-500/25 transition-all focus:outline-none focus:ring-2 focus:ring-amber-400">
                                <span>Send Inquiry to HOPn</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </button>
                        </div>

                        <p class="text-[11px] text-slate-400 text-center leading-normal">
                            Protected by deterministic spam filters and rate limiting. Read our <a href="{{ route('legal.datenschutz') }}" class="underline hover:text-slate-300">Datenschutz (Privacy Policy)</a> for details on data processing.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
